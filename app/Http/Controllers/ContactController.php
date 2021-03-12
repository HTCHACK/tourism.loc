<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Input;

class ContactController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('show','frontPageIndex', 'store');
        $this->middleware('can:admin')->except('show','frontPageIndex', 'store');
    }


    public function index()
    {
        return view('admin.contact.index', ['contacts' => Contact::all()]);
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
    public function store(ContactRequest $request)
    {
        Contact::create([
            'name' => $request->input('name'),
            'phone_number' => $request->input('phone_number'),
            'message' => $request->input('message'),
        ]);

        
           
            return redirect()->back()->with('success', 'Message Send Successfully');
    
        
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function frontPageIndex()
    {
        return view('contact.index');
    }
}
