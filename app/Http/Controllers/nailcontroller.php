<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nailmodel;
use Illuminate\Support\Facades\DB;
class nailcontroller extends Controller
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
        return view('login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getuname = request('uname');
        $getupass = request('upass');
       
        echo $getuname;
        echo $getupass;
       
        $login = new nailmodel();

        $login->uname=$getuname;
        $login->upass=$getupass;


        $login->save();
    }

    public function check(Request $request)
    {
        $admin="Admin";
        $cust="Customer";
        

        $userInfo =nailmodel::where('email','=',$request->lemail)->first(); 
        if(!$userInfo)
        {
            return back()->with('fail','Error: Invalid Login');
        }
        else
        {
            if(strcmp($request->lpass,$userInfo->password)==0)
            {
                $request-> session()->put('loggeduser', $userInfo->id);
                $request-> session()->put('loggedemail', $userInfo->email);
                if (strcmp($admin, $userInfo->utype)==0) {
                    return redirect('/adminhome');
                }     
                else if (strcmp($cust, $userInfo->utype)==0) {
                    return redirect('/customerhome');
                }     
                  
            }
            else
            {
                return back()->with('fail','Error: Invalid Login');
            }
        }
    }
    public function adminHomeView()
    {
               $registers=nailmodel::all();
               $data=['LoggedUserinfo'=>nailmodel::where('id','=',session('loggeduser'))->first()];
               $booking=DB::table('bookingmodels')
                                ->join('registermodels','bookingmodels.email','=','registermodels.email') 
                                ->select('bookingmodels.*','registermodels.*')
                                ->where('bookingmodels.Status','like',"Paid")
                                ->where('bookingmodels.Checkout','like',"No")
                                ->orderBy('bookingmodels.sdate')
                                ->get();
               return view('adminhome',compact('booking'),$data);
    }
    public function customerHomeView()
    {
               $registers=nailmodel::all();
               $data=['LoggedUserinfo'=>nailmodel::where('id','=',session('loggeduser'))->first()];
                   $res=DB::table('bookingmodels')->select ('*')
                                                        -> where ('status','Accepted')
                                                        ->where ('email',session('loggedemail'))
                                                        ->get();
            
               return view('customerhome',compact('res'),$data);
    }
    public function lgout()
    {
        if(session()->has('loggeduser'))
        {
            session()->pull('loggeduser');
            session()->pull('loggedemail');
            session()->flush();
            return redirect('/login');
        }
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
