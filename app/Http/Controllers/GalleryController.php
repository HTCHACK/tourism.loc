<?php

namespace App\Http\Controllers;
use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Requests\GalleryRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show','frontPageIndex');
        $this->middleware('can:admin')->except('show','frontPageIndex');
    }
    
    public function index()
    {
        return view('admin.gallery.index', ['galleries'=>Gallery::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {

        Gallery::create([
            'name' => $request->name,
            'picture' => $request->hasFile('picture') ? $request->file('picture')->storeAs('public/', Str::random(20) . '.' . $request->file('picture')->getClientOriginalExtension()) : null
        ]);

        return redirect()->route('galleries.index')->with('success', 'Successfully Upload');
        /*if($request->hasFile('picture')){
            if($request->file('picture')->isValid()){
                $validated = $request->validate([
                    'name'=>'string|max:40',
                    'picture'=>'mimes:jpeg,png,webp|max:4096',
                ]);
                $extension = $request->picture->extension();
                $request->picture->storeAs('/public',$validated['name'].".".$extension);
                $picture = Storage::url($validated['name'].".".$extension);
                Gallery::create([
                    'name' => $validated['name'],
                    'picture' => $picture,
                ]);

                return redirect()->route('galleries.index')->with('success', 'Successfully Upload');
            }
        }*/
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('admin.gallery.edit',['gallery'=>$gallery]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request, $id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->update([  
            'name'=>$request->input('name'),
            'picture' => $request->hasFile('picture') ? $request->file('picture')->storeAs('public/', Str::random(20) . '.' . $request->file('picture')->getClientOriginalExtension()) : $gallery->picture
        ]);
        return redirect()->route('galleries.index')->with('success', 'Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery )
    {
        $findImage = Gallery::findorFail($gallery->id);
        if ($findImage->delete()) {

            return redirect()->route('galleries.index')->with('success', 'Gallery deleted Successfully');
        }

        return back()->withInput()->with('errors', 'Image could not be deleted');
    
    }

    public function frontPageIndex()
    {
        return view('gallery.index',['galleries'=>Gallery::paginate(20)]);
    }
}
