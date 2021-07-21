<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\serviceaddmodel;
use Illuminate\Support\Facades\DB;
class serviceaddcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serviceadd=serviceaddmodel::all();
       return view('services',compact ('serviceadd'));
        //$serviceadd=serviceaddmodel::all();
        //return view('serviceview',compact ('serviceadd'));
    }
    public function index1()
    {
       // $serviceadd=serviceaddmodel::all();
       // return view('services',compact ('serviceadd'));
        $serviceadd=serviceaddmodel::all();
        return view('serviceview',compact ('serviceadd'));
    }
    public function disp($id)
    {
        $feet=serviceaddmodel::select('*')
                                -> where('scat', $id)
                                ->get();
      return view('feetcareview',compact ('feet'));
    }
    
    
    public function del($id)
    {
        $s=DB::table('serviceaddmodels')
                ->where('sid',$id)
                ->delete();
        return redirect('/serviceviews');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('serviceadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getsid = request('sid');
        $getsname = request('sname');
        $getsdes = request('sdes');
        $getscat = request('scat');
        $getsrate = request('srate');
        $getimage=$request->file('simg');
        $name=$getimage->getClientOriginalName();

        $getimage->move(public_path('assets/serviceimages'),$name);

        

        echo $getsid;
        echo $getsname;
        echo $getsdes;
        echo $getscat;
        echo $getsrate;
        echo $name;
      
        
       
        $serviceadd = new serviceaddmodel();

        $serviceadd->sid=$getsid;
        $serviceadd->sname=$getsname;
        $serviceadd->sdes=$getsdes;
        $serviceadd->scat=$getscat;
        $serviceadd->srate=$getsrate;
        $serviceadd->simg=$name;

        $serviceadd->save();
        return redirect('/serviceviews'); 
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
