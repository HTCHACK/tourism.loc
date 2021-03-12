<?php

namespace App\Http\Controllers;
use App\Category;
use App\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TourController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show','frontPageIndex');
        $this->middleware('can:admin')->except('show','frontPageIndex');
    }
    
    public function index()
    {
        return view('admin.tour.index',['tours'=>Tour::with('category')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tour.create', ['categories'=>Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tour::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'picture' => $request->hasFile('picture') ? $request->file('picture')->storeAs('public/', Str::random(20) . '.' . $request->file('picture')->getClientOriginalExtension()) : null,
            'category_id'=>$request->category_id,  
            'location'=>$request->location,
            'lang'=>$request->lang,
            'is_it_here' => boolval($request->is_it_here),
        ]);

        return redirect()->route('tours.index')->with('success','Tour Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tour = Tour::findorFail($id);
        return view('tour.show', ['tour' => $tour]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.tour.edit', ['tour'=>Tour::findorFail($id), 'categories' =>Category::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tour = Tour::findorFail($id);
        $tour->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'picture' => $request->hasFile('picture') ? $request->file('picture')->storeAs('public/', Str::random(20) . '.' . $request->file('picture')->getClientOriginalExtension()) : null,
            'category_id'=>$request->category_id,  
            'location'=>$request->location,
            'lang'=>$request->lang,
            'is_it_here' => boolval($request->is_it_here),
        ]);

        return redirect()->route('tours.index')->with('success','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tour $tour)
    {
        $findtour = Tour::findorFail($tour->id);
        if ($findtour->delete()) {

            return redirect()->route('tours.index')->with('success', 'Tour deleted Successfully');
        }

        return back()->withInput()->with('errors', 'Tour could not be deleted');
    }


    public function frontPageIndex()
    {
        return view('tour.index',['tours' => Tour::where('lang', $this->getLang())->where('is_it_here', false)->paginate(30)]);
    }
    private function getLang()
    {
        if (!isset($_COOKIE['language'])) {
            return 'ru';
        }
        if (isset($_COOKIE['language'])) {
            return $_COOKIE['language'];
        }
    }
}
