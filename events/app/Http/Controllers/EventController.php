<?php

namespace App\Http\Controllers;

use App\Category;
use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Home.category');
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
        // dd(request()->image->store('uploads', 'public'));
        //dd($request->input('category_id'));
        $this->validate($request, [
            'name'  => 'required',
            'des'  => 'required',
            'location'  => 'required',
            'date'  => 'required',
            'time'  => 'required',
            'price'  => 'required',
            'image'=> 'required',
            'category_id' => 'required',
        ]);

        Event::create([
            'name'=> $request->input('name'),
            'description'=> $request->input('des'),
            'location'=> $request->input('location'),
            'date'=> $request->input('date'),
            'time'=> $request->input('time'),
            'price'=> $request->input('price'),
            'photo' => request()->image->store('uploads', 'public'),
            'category_id'=>$request->input('category_id'),
        ]);
        return redirect()->route('category.index');
        //return view('Home.category');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category_id=$id;
        $find=Category::findOrFail($category_id);
        $event=$find->event()->get();
        return view('Events.event',compact('event'));
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


    public function info($event_id)
    {

        $event=Event::findOrFail($event_id);
        return view('Events.info',compact('event'));


    }
}
