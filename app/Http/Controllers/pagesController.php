<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class pagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function page1(){
        $name1 = 'Andi';
        return view('pages.page1',compact('name1'));
    }

    public function page2(){
        $name2 = 'Budi';
        return view('pages.page2',compact('name2'));
    }

    public function somePage1(){
        $name = '<b> Andi </b>';
        return view('pages.somePages1')->with('name',$name);
    }

    // public function somePage2(){
    //     return view('pages.somePages2')->with([
    //         'name1' => 'Andi',
    //         'name2' => 'Budi'
    //         ]);
    // }

    // public function somePage2(){
    //         $data = [];
    //         $data['name1'] = 'Andi';
    //         $data['name2'] = 'Budi';
    //         return view('pages.somePages2', $data);
    // }

    public function somePage2(){
            $data = [];
            $name1 = 'Andi';
            $name2 = 'Budi';
            return view('pages.somePages2', compact('name1', 'name2'));
    }


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
}
