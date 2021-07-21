<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bookingmodel;
use App\Models\serviceaddmodel;

class servicecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getsname = request('sname');
        $getsdate = request('sdate');
        $getemail = request('email');
        $getstatus = "pending";
        $getamount = request('amount');
        $getcheckout = "No"; 
        echo $getsname;
        echo $getsdate;
        echo $getemail;
        echo $getstatus;
        echo $getamount;
        echo $getcheckout;
       
        $booking = new bookingmodel();

        $booking->sname=$getsname;
        $booking->sdate=$getsdate;
        $booking->email=$getemail;
        $booking->status=$getstatus;
        $booking->amount=$getamount;
        $booking->checkout=$getcheckout;
        
        $booking->save();
        echo "<script>alert('Successfully booked')</script>";
        return redirect('/customerhome');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $getsname = request('sname');
        $getsdate = request('sdate');
        $getemail = request('email');
        $getstatus = request('status');
        $getamount = request('amount');
        
       
        $booking = new bookingmodel();

        $booking->sname=$getsname;
        $booking->sdate=$getsdate;
        $booking->email=$getemail;
        $booking->status=$getstatus;
        $booking->amount=$getamount;
        
        $booking->save();
        echo "<script>alert('Successfully booked')</script>";
        return redirect('/serviceviews');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stf=serviceaddmodel::find($id);
        return view('serviceupdate',compact('stf'));

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
        
        $getsname = request('sname');
        $getsdes = request('sdes');
        $getsrate = request('srate');
       
        echo $getsname;
        echo $getsdes;
        echo $getsrate;
       
        $serviceadd = serviceaddmodel::find($id);
        $serviceadd->sname=$getsname;
        $serviceadd->sdes=$getsdes;
        $serviceadd->srate=$getsrate;

        $serviceadd->save();
       
        return redirect('/serviceviews');

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
