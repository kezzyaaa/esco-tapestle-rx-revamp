<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\ProductCategory;
use App\ContainmentControl;
use App\ProductSpecification;
use App\Solution;
use App\ProductBrochure;
use App\Product_application_category;
use Intervention\Image\Facades\Image;


use Illuminate\Support\Str;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }



    public function showList()
    {
        $productslist = Product::all();
        // dd($newslist->first());
        return view('dashboard.show-product-models',compact('productslist'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product_spec = ProductSpecification::all()->where('is_activated', '=', 1);
        $product_categories = ProductCategory::all()->where('is_activated', '=', 1);
        $product_list = Product::all()->where('is_activated', '=', 1)->sortBy('name');
        $product_application_categories = Product_application_category::all()->where('is_activated', '=', 1);
        $product_brochures = ProductBrochure::all()->where('is_activated', '=', 1)->sortBy('title');
        $containments = ContainmentControl::all()->where('is_activated', '=', 1);

        // dd($product_brochures);

        return view('dashboard.create-product-model',compact('product_spec','product_categories','product_brochures','product_application_categories','product_list','containments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Product $product)
    {
        // dd(request());

        $product_specs = ProductSpecification::all()->where('is_activated', '=', 1);
        $containments = ContainmentControl::all()->where('is_activated', '=', 1);
        $product_brochures = ProductBrochure::all()->where('is_activated', '=', 1)->sortBy('title');
        $product_list = Product::all()->where('is_activated', '=', 1)->sortBy('name');


        $specifications =[];
        $prod_containments = [];
        $prod_brochures = [];
        $prod_related = [];

        foreach ($product_specs as $product_spec) {
            // If Product has sku (collection object, probably related models)
            $title = $product_spec->title;
            $id = $product_spec->id;
            if(isset(request()->$title)){
                $specifications[$id] = ['content' => request()->$title];
            }

        }

        foreach ($product_brochures as $product_brochure) {
            // If Product has sku (collection object, probably related models)
            $title = Str::slug($product_brochure->title);
            $id = $product_brochure->id;
            if(isset(request()->$title)){
                $prod_brochures[] = $id;
            }

        }

        foreach ($product_list as $prod) {
            // If Product has sku (collection object, probably related models)
            $name = Str::slug($prod->name);
            $id = $prod->id;
            if(isset(request()->$name)){
                $prod_related[] = $id;
            }

        }


        foreach ($containments as $containment) {
            // If Product has sku (collection object, probably related models)
            $name = Str::slug($containment->name);
            $id = $containment->id;
            if(isset(request()->$name)){
                $prod_containments[$id] = ['is_activated' => 1];
            }else{
                $prod_containments[$id] = ['is_activated' => 0];
            }
            // dump($name);
        }
        // dd($prod_containments);
        $product = Product::create($this->validateRequest());

        $this->storeImage($product);

        $prodSpec = $product->ProductSpecification()->sync($specifications);
        $prodCon = $product->containmentControl()->sync($prod_containments);
        $prodBroch = $product->productBrochure()->sync($prod_brochures);
        $prodrel = $product->relProd()->sync($prod_related);

        // $this->storeImage($product);
        return redirect('/dashboard/product-model')->with('message','The product have been saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($slug, $product_id)
    {
        // dd($slug);
        $productCategories = ProductCategory::all();
        $products = Product::all();
        $activeProduct = Product::active($slug,$product_id)->first();
        if (!$activeProduct) {
            return abort(404);
        }
        else
        {
            $Breadcrumb_banner = $activeProduct->productCategory->banner_img;
            $page_title = $activeProduct->productCategory->name;
            $breadcrumb_name = $activeProduct->name;
            $breadcrumb_section = 'Products A-Z';
            $Containment_controls = ContainmentControl::all();
            // $about_sub_menus = Page::submenu('about')->get();
            // $services_sub_menus = Page::submenu('services')->get();
            $solutions = Solution::getparents()->get();
            $relatedprods_cat = collect(Product::related($activeProduct->product_application_category_id,$activeProduct->id));
            $relatedprods = collect($activeProduct->relProd()->where('is_activated', '=', 1)->get()->merge($relatedprods_cat))->sortBy('name');
            $relatedArticles = collect($activeProduct->relNews()->where('is_activated', '=', 1)->get());

            return view('product',compact('activeProduct', 'productCategories', 'products', 'Breadcrumb_banner', 'page_title', 'breadcrumb_section', 'breadcrumb_name', 'Containment_controls', 'solutions', 'relatedprods','relatedArticles'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        $product_spec = ProductSpecification::all()->where('is_activated', '=', 1);
        $product_categories = ProductCategory::all()->where('is_activated', '=', 1);
        $product_list = Product::all()->where('is_activated', '=', 1)->where('id', '!=', $product->id)->sortBy('name');
        $product_application_categories = Product_application_category::all()->where('is_activated', '=', 1);
        $product_brochures = ProductBrochure::all()->where('is_activated', '=', 1)->sortBy('title');
        // dd($product_brochures);

        return view('dashboard.edit-product-model',compact('product','product_spec','product_categories','product_brochures','product_application_categories','product_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {

        // dd(request());

        $product_specs = ProductSpecification::all()->where('is_activated', '=', 1);
        $containments = ContainmentControl::all()->where('is_activated', '=', 1);
        $product_brochures = ProductBrochure::all()->where('is_activated', '=', 1)->sortBy('title');
        $product_list = Product::all()->where('is_activated', '=', 1)->where('id', '!=', $product->id)->sortBy('name');


        $specifications =[];
        $prod_containments = [];
        $prod_brochures = [];
        $prod_related = [];

        foreach ($product_specs as $product_spec) {
            // If Product has sku (collection object, probably related models)
            $title = $product_spec->title;
            $id = $product_spec->id;
            if(isset(request()->$title)){
                $specifications[$id] = ['content' => request()->$title];
            }

        }

        foreach ($product_brochures as $product_brochure) {
            // If Product has sku (collection object, probably related models)
            $title = Str::slug($product_brochure->title);
            $id = $product_brochure->id;
            if(isset(request()->$title)){
                $prod_brochures[] = $id;
            }

        }

        foreach ($product_list as $prod) {
            // If Product has sku (collection object, probably related models)
            $name = Str::slug($prod->name);
            $id = $prod->id;
            if(isset(request()->$name)){
                $prod_related[] = $id;
            }

        }


        foreach ($containments as $containment) {
            // If Product has sku (collection object, probably related models)
            $name = Str::slug($containment->name);
            $id = $containment->id;
            if(isset(request()->$name)){
                $prod_containments[$id] = ['is_activated' => 1];
            }else{
                $prod_containments[$id] = ['is_activated' => 0];
            }
            // dump($name);
        }
        // dd($prod_containments);
        $product->update($this->validateRequest());

        $this->storeImage($product);

        $prodSpec = $product->ProductSpecification()->sync($specifications);
        $prodCon = $product->containmentControl()->sync($prod_containments);
        $prodBroch = $product->productBrochure()->sync($prod_brochures);
        $prodrel = $product->relProd()->sync($prod_related);

        // $this->storeImage($product);
        return redirect('/dashboard/product-model/'.$product->id.'/edit')->with('message','The product have been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return $id;
    }


    public function getProdCat()
    {
        $productCategories = ProductCategory::with(['products'  => function ($query) {
            $query->where('is_activated', '=', 1)->orderBy('name', 'asc');
        }, 'products.containmentcontrol'])->get();
        return $productCategories;


    }


    public function search()
    {
        if ($search = request()->get('q')){
            $productCategories = ProductCategory::with(['products'  => function ($query) {
                $query->where('name', 'like', '%'.request()->get('q').'%')
                      ->where('is_activated', '=', 1)
                      ->orWhere('brand', 'like', '%'.request()->get('q').'%')
                      ->where('is_activated', '=', 1)
                      ->orderBy('name', request()->get('s'));
            }, 'products.containmentcontrol'])->get();
        }else{
            $productCategories = ProductCategory::with(['products'  => function ($query) {
                $query->where('is_activated', '=', 1)->orderBy('name', request()->get('s'));
            }, 'products.containmentcontrol'])->get();
        }
        return $productCategories;
    }



    public function changeStatus(Request $request)
    {
        $Product = Product::find($request->product_id);
        $Product->is_activated = $request->status;
        $Product->save();

        return response()->json(['success'=>'Status change successfully.']);
    }

    private function  validateRequest()
    {
      return request()->validate([
        'brand' => '',
        'slug' => 'required|min:3',
        'name' => 'required|min:3',
        'details' => 'required|min:3',
        'product_category_id' => 'required',
        'product_application_category_id' => 'required',
        'is_activated' => '',
        'meta_title' => 'required',
        'meta_keywords' => 'required',
        'meta_description' => 'required',
        'image' => 'sometimes|file|image|max:2000',

      ],

      [
        'slug.required' => 'The :attribute field is required.',
        'slug.min' => 'The :attribute field should be 3 or more characters.',
        'name.required' => 'The :attribute field is required.',
        'name.min' => 'The :attribute field should be 3 or more characters.',
        'details.required' => 'The :attribute field is required.',
        'details.min' => 'The :attribute field should be 20 or more characters.',
        'product_category_id.required' => 'The :attribute field is required.',
        'product_application_category_id.required' => 'The :attribute field is required.',
        'meta_keywords.required' => 'The :attribute field is required.',
        'meta_description.required' => 'The :attribute field is required.',
        'image.max' => 'The image size should not exceed 2mb.',
        'image.file' => 'The image should be a file.',
        'image.image' => 'The should be an image',
        'meta_title.required' => 'The :attribute field is required.',
        // 'meta_title.max' => 'The :attribute field should be less than 65 chars',

      ]);

    }


    private function storeImage($product)
    {

        if(request()->hasFile('image')){
            $product->update([
                'image' => request()->image->storeAs('images/product-images/full-image',request()->file('image')->getClientOriginalName(),'public'),
                'image_thumb' => request()->image->storeAs('images/product-images/thumb',request()->file('image')->getClientOriginalName(),'public'),
                'image' => request()->file('image')->getClientOriginalName(),
                'image_thumb' => request()->file('image')->getClientOriginalName(),

            ]);
            $image = Image::make('images/product-images/thumb/'.$product->image_thumb)->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save();
        }
    }
}
