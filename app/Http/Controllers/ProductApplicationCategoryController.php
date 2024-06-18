<?php

namespace App\Http\Controllers;

use App\Product_application_category;
use Illuminate\Http\Request;
use App\ProductCategory;
use App\ContainmentControl;
use App\Product;
use App\Page;
use App\Solution;


class ProductApplicationCategoryController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product_application_category  $product_application_category
     * @return \Illuminate\Http\Response
     */
    public function show($slug, $productCatId)
    {
        // dd($slug);
        // $productCategories = ProductCategory::all();
        $products = Product::all();
        $activeProductCat = Product_application_category::active($slug,$productCatId)->get();




        if ($activeProductCat->isEmpty()) {
            return abort(404);
        }
        else
        {
            $Breadcrumb_banner = 'products-directory-banner.jpg';
            $page_title = $activeProductCat->first()->productCategory->name;
            $breadcrumb_name = $activeProductCat->first()->name;
            $breadcrumb_section = 'Products A-Z';
            // $about_sub_menus = Page::submenu('about')->get();
            // $services_sub_menus = Page::submenu('services')->get();
            $solutions = Solution::getparents()->get();
            return view('productCatApp',compact('activeProductCat', 'products', 'Breadcrumb_banner', 'page_title', 'breadcrumb_section', 'breadcrumb_name','solutions'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product_application_category  $product_application_category
     * @return \Illuminate\Http\Response
     */
    public function edit(Product_application_category $product_application_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product_application_category  $product_application_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product_application_category $product_application_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product_application_category  $product_application_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product_application_category $product_application_category)
    {
        //
    }
}
