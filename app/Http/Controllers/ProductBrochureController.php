<?php

namespace App\Http\Controllers;

use App\ProductBrochure;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ProductBrochureController extends Controller
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
        // dd($product_brochures);
        return view('dashboard.create-resources');
    }

    public function showList()
    {
        $productsbrochureslist = ProductBrochure::all();
        // dd($productBrochurelist->first());
        // dd($productsbrochureslist);
        return view('dashboard.show-product-brochures',compact('productsbrochureslist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductBrochure $productBrochure)
    {
        $productBrochure = ProductBrochure::create($this->validateRequest());
        $this->storeImage($productBrochure);
        $this->storeFile($productBrochure);
        return redirect('/dashboard/resources')->with('message','The resource has been added');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\ProductBrochure  $productBrochure
     * @return \Illuminate\Http\Response
     */
    public function show(ProductBrochure $productBrochure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductBrochure  $productBrochure
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductBrochure $brochure)
    {
        // dd($brochure);
        return view('dashboard.edit-product-brochures',compact('brochure'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductBrochure  $productBrochure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductBrochure $brochure)
    {
        $brochureOldFile = ProductBrochure::find($brochure->id)->file;
        $brochureOldImage = ProductBrochure::find($brochure->id)->img_thumb;
        // dd($brochureOldFile, $brochureOldImage);
        $brochure->update($this->validateRequest());
        if(request()->hasFile('file')){
            (new self())->deleteOldPdf($brochureOldFile);
            $this->storeFile($brochure);
        }
        if(request()->hasFile('img_thumb')){
            (new self())->deleteOldImage($brochureOldImage);
            $this->storeImage($brochure);
        }
        return redirect('/dashboard/resources/'.$brochure->id.'/edit')->with('message','The resource have been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductBrochure  $productBrochure
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        (new self())->deleteOldImage(ProductBrochure::find($id)->img_thumb);
        (new self())->deleteOldPdf(ProductBrochure::find($id)->file);
        ProductBrochure::destroy($id);
        return $id;
    }


    public function changeStatus(Request $request)
    {
        $ProductBrochure = ProductBrochure::find($request->brochure_id);
        $ProductBrochure->is_activated = $request->status;
        $ProductBrochure->save();

        return response()->json(['success'=>'Status change successfully.']);
    }

    private function  validateRequest()
    {
      return request()->validate([
        'title' => 'required|min:3',
        'type' => 'required',
        'is_activated' => '',
        'file' => 'sometimes|mimes:doc,docx,pdf|max:15000',
        'img_thumb' => 'sometimes|file|image|max:2000',
      ],

      [
        'title.required' => 'The :attribute field is required.',
        'title.min' => 'The :attribute field should be 3 or more characters.',
        'type.required' => 'The :attribute field is required.',
        'file.required' => 'The :attribute field is required.',
        'file.max' => 'The file size should not exceed 15mb.',
        'file.mimes' => 'The file should be PDF or Microsoft office word file (doc,docx).',
        'img_thumb.required' => 'The :attribute field is required.',
        'img_thumb.image' => 'The image should be jpg or png',
        'img_thumb.max' => 'The image size should not exceed 2mb.',
        // 'meta_title.max' => 'The :attribute field should be less than 65 chars',

      ]);

    }
    private function storeImage($productBrochure)
    {

        if(request()->hasFile('img_thumb')){
            $productBrochure->update([
                'img_thumb' => request()->img_thumb->storeAs('images/product-brochure-thumb',request()->file('img_thumb')->getClientOriginalName(),'public'),
                'img_thumb' => request()->file('img_thumb')->getClientOriginalName(),

            ]);
        }
    }
    private function storeFile($productBrochure)
    {
        if(request()->hasFile('file')){
            $productBrochure->update([
                'file' => request()->file->storeAs('pdf/brochures',request()->file('file')->getClientOriginalName(),'public'),
                'file' => request()->file('file')->getClientOriginalName(),

            ]);
        }
    }
    protected function deleteOldPdf($file){
        if($file){
            Storage::disk('public')->delete(['/pdf/brochures/'.$file]);
        }
    }
    protected function deleteOldImage($img_thumb){
        if($img_thumb){
            Storage::disk('public')->delete(['/images/product-brochure-thumb/'.$img_thumb]);
        }
    }

}
