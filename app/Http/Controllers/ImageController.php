<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as InterventionImage;;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
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
        return view('dashboard.create-image');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Image $image)
    {

        $image_size = floor(InterventionImage::make(request()->file('file'))->filesize()/1000).' KB';
        $image_dimension = InterventionImage::make(request()->file('file'))->width().'x'.InterventionImage::make(request()->file('file'))->height(). ' pixels';

        $image = Image::create(array_merge($this->validateRequest(),['size' => $image_size, 'dimension' => $image_dimension]));
        $this->storeImage($image);
        return redirect('/dashboard/images')->with('message','The resource has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        (new self())->deleteOldImage(Image::find($id)->file);
        Image::destroy($id);
        return $id;
    }
    public function showList()
    {
        $imagelist = Image::orderBy('created_at', 'desc')->get();
        // dd($newslist->first());
        return view('dashboard.show-images',compact('imagelist'));
    }


    private function  validateRequest()
    {
      return request()->validate([
        'title' => 'required|min:3',
        'file' => 'sometimes|file|image|max:2000',
        'alt' => 'required|min:3',
      ],

      [
        'title.required' => 'The :attribute field is required.',
        'title.min' => 'The :attribute field should be 3 or more characters.',
        'alt.required' => 'The :attribute field is required.',
        'alt.min' => 'The :attribute field should be 3 or more characters.',
        'file.required' => 'The :attribute field is required.',
        'file.image' => 'The image should be jpg or png',
        'file.max' => 'The image size should not exceed 2mb.',
        // 'meta_title.max' => 'The :attribute field should be less than 65 chars',

      ]);

    }
    private function storeImage($image)
    {

        if(request()->hasFile('file')){
            $image->update([
                'file' => request()->file->storeAs('images/upload',request()->file('file')->getClientOriginalName(),'public'),
                'file' => request()->file('file')->getClientOriginalName(),

            ]);
        }
    }

    protected function deleteOldImage($file){
        if($file){
            Storage::disk('public')->delete(['/images/upload/'.$file]);
        }
    }
}
