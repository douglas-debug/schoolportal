<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Employer;
//use App\Http\Controllers\Auth;
use App\User;
//use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth',['except'=>['index']]);
    }


    public function index()
    {
        //
        //$employers = DB::select('SELECT * FROM employers');
       // return employer::orderBy('firstname','desc')->take(1)->get();
      // $employers = employer::orderBy('firstname','desc')->get();
      $employers= Employer::all();
    //  $user_id = auth()->user()->id;
     // $user = User::find($user_id);
       return view('employer.index')->with('employers',$employers);
    }

    
    public function viewprofile()
    {
        //
        //$employers = DB::select('SELECT * FROM employers');
       // return employer::orderBy('firstname','desc')->take(1)->get();
      // $employers = employer::orderBy('firstname','desc')->get();
     // $user = User::find(Auth()->user()->id);
     // $employers= $user->employers;
      $user_id =Auth::user()->id;
      $employers =Employer::where('user_id',$user_id)->get();

      //dd($employers);
    //  $user_id = auth()->user()->id;
     // $user = User::find($user_id);
     if(!$employers){
         return redirect('/employerdashboard')->with('error','You have not create a profile yet please do so');
     }
       return view('employer.index')->with('employers',$employers);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('employer.create');
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
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
            'firstname' => 'required',
            'secondname' => 'required',
            'lastname' => 'required',
            'age'=>'required',
            'number'=>'required',
            'address'=>'required',
            'companyname'=>'required',
            'country'=>'required',
            'reference'=>'required',
            'purpose'=>'required'

           ]);
           //return 123;
         $employer = new Employer;
         /*if(auth()->user()){
             dd(auth()->user());
         }*/
         $employer->email =auth()->user()->email;//$request->input('email');
         $employer->password =auth()->user()->password;  //$request->input('password');
         $employer->firstname =$request->input('firstname');
         $employer->secondname =$request->input('secondname');
         $employer->lastname =$request->input('lastname');
         $employer->age =$request->input('age');
         $employer->number =$request->input('number');
         $employer->address =$request->input('address');
         $employer->companyname =$request->input('companyname');
         $employer->country =$request->input('country');
         $employer->reference =$request->input('reference');
         $employer->purpose =$request->input('purpose');
         $employer->user_id =Auth::user()->id;
         $employer->save();
         return redirect('/employerdashboard')->with('success','Records created');
      
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
      $employer = Employer::find($id);
      return view('employer.show')->with('employer',$employer);
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
        $employer = Employer::find($id);

        // check for correct user

        if(auth()->user()->id !==$employer->user_id){
            return redirect('/employerdashboard')->with('error','unauthorised page');

        }

        return view('employer.edit')->with('employer',$employer);
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
         //
         $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
            'firstname' => 'required',
            'secondname' => 'required',
            'lastname' => 'required',
            'age'=>'required',
            'number'=>'required',
            'address'=>'required',
            'companyname'=>'required',
            'country'=>'required',
            'reference'=>'required',
            'purpose'=>'required'

           ]);
           //return 123;
         $employer = Employer::find($id);

         $employer->email =$request->input('email');
         $employer->password =$request->input('password');
         $employer->firstname =$request->input('firstname');
         $employer->secondname =$request->input('secondname');
         $employer->lastname =$request->input('lastname');
         $employer->age =$request->input('age');
         $employer->number =$request->input('number');
         $employer->address =$request->input('address');
         $employer->companyname =$request->input('companyname');
         $employer->country =$request->input('country');
         $employer->reference =$request->input('reference');
         $employer->purpose =$request->input('purpose');
         $employer->save();
         return redirect('/employerdashboard')->with('success','Records updated');
      
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
        $employer = Employer::find($id);
        
        // check for correct user

        if(auth()->user()->id !==$employer->user_id){
            return redirect('/employerdashboard')->with('error','unauthorised page');

        }
        $employer->delete();
        return redirect('/employerdashboard')->with('success','Records delete');
    }
}
