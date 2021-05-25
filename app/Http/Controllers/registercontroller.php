<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registermodel;
use App\Models\nailmodel;
use App\Http\Requests\StorePostRequest;

class registercontroller extends Controller
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
        return view('nailregister');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $validated = $request->validated();

        $getname = request('name');
        $getaddress = request('address');
        $getsex = request('sex');
        $getdob = request('dob');
        $getmobile = request('mobile');
        $getemail = request('email');
        $getpass = request('pass');
    
        echo $getname;
        echo $getaddress;
        echo $getsex;
        echo $getdob;
        echo $getmobile;
        echo $getemail;
        echo $getpass;
        
        $register = new registermodel();
       
        $register->name=$getname;
        $register->address=$getaddress;
        $register->sex=$getsex;
        $register->dob=$getdob;
        $register->mobile=$getmobile;
        $register->email=$getemail;
        $register->pass=$getpass;
    
        $register->save();

        $log = new nailmodel();
        $log->email=$getemail;
        $log->password=$getpass;

        $log->utype="Customer";

        $log->save();
       
        return redirect('/login');
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
