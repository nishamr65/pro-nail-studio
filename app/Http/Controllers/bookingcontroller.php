<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bookingmodel;
use Illuminate\Support\Facades\DB;
class bookingcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking=bookingmodel::select('*')
                                -> where('status', '=','pending')
                                ->get();
        return view('viewbooking',compact ('booking'));
    }
   
    public function index1(Request $request)
    {
        $d=request('serdate');
        $booking=bookingmodel::select('*')
                                -> where('status', '=','paid')
                                ->where('sdate', '=', $d)
                                ->get();
        return view('perdayreport',compact ('booking'));

    }
    public function index2(Request $request)
    {
        $booking=DB::table('bookingmodels')
                                ->join('registermodels','bookingmodels.email','=','registermodels.email') 
                                ->select('bookingmodels.*','registermodels.*')
                                ->where(function($q) {
                                    $q->where('bookingmodels.status','paid')
                                      ->orWhere('bookingmodels.checkout','No');
                                })
                                ->orderBy('bookingmodels.sdate')
                                ->get();
                                
                                
                           
    
        return view('adminhome',compact ('booking'));

    }
    
    public function sea(Request $request)
    {
         $d=request('serdate');
        $booking=bookingmodel::where('status','paid')
                                ->orWhere('sdate',$d)
                                ->get();
        return view('perdayreport',compact ('booking'));

    
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('booking');
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
        $getstatus = request('status');
        $getamount = request('amount');
        $getcheckout = request('checkout');
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
        $r=DB::table('bookingmodels')
                ->where('email',$id)
                ->update(['status'=>'Accepted']);
        return redirect('/readall');   
    }
    public function edit1($id)
    {
        $s=DB::table('bookingmodels')
                ->where('email',$id)
                ->update(['status'=>'Rejected']);
        return redirect('/readall');  
    }
    public function today($id)
     {
        // echo 'hello';
         $s=DB::table('bookingmodels')
                 ->where('email',$id)
                 ->update(['checkout'=>'Yes']);
                 echo $s;
         return redirect('/adminhome');  
     }
   
    public function payment(Request $request)
    {
        $logemail=$request->session()->get('loggedemail');
        $stat1="Accepted";
        $stat2="Rejected";


        $p=DB::table('bookingmodels')
        ->select('status')
        ->where('email',$logemail)
        ->first();
        if(strcmp($stat1,$p->status)==0) {
            
            $s=DB::table('bookingmodels')
            ->where('email',$logemail)
            ->update(['status'=>'Paid']);
            echo "<script>alert('Payment Successful')</script>";
    
            return redirect('/customerhome');
        }
        else if(strcmp($stat2,$p->status)==0){
            echo "<script>alert('Sorry your booking has been Rejected. Please try for some another date')</script>";
            return redirect('/customerhome');
    }
        else {
                echo "<script>alert('Please wait your booking has not been Accepted yet')</script>";
                return redirect('/customerhome');
        }

         
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
