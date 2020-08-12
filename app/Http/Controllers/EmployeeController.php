<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Employee;
use App\Applied;
use App\Bookmark;
use App\User;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;





class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
         // $employees = DB::select('SELECT * FROM employees');
       //return $employees= Employee::all();
       $user_id =Auth::user()->id;
      $employees =Employee::where('user_id',$user_id)->get();
      if(!$employees){
        return redirect('/employeedashboard')->with('error','You have not create a profile yet please do so');
    }
    //appliedjobs
    $total_jobs ="";
    $applied_num = Applied::where('employee_id', $user_id)->get();
    if ($applied_num !="") $total_jobs = count($applied_num);

    //bookmarkedjobs
    $total_favorites ="";
    $bookmarked_num = Bookmark::where('employee_id', $user_id)->get();
    if ($bookmarked_num !="") $total_favorites = count($bookmarked_num);
      return view('employee.index')->with('employees',$employees)->with('total_jobs',$total_jobs)->with('total_favorites',$total_favorites);
   }

    //  $employees=Employee::all();
    //    return view('employee.index')->with('employees',$employees);
  //  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('employee.create');
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
             //
             $this->validate($request, [
                'fullname' => 'required',
                'address' => 'required',
                'objective' => 'required',
                'date' => 'required',
                'companyworked' => 'required',
                'designation'=>'required',
                'experience'=>'required',
                'aboutyou'=>'required',
                'institutename'=>'required',
                'highest_qualification'=>'required',
                'Language'=>'required',
                'rating'=>'required',
                'city'=>'required'
    
               ]);
               
             $employee = new Employee;
             $employee->fullname =$request->input('fullname');
             $employee->address =$request->input('address');
             $employee->objective =$request->input('objective');
             $employee->date =$request->input('date');
             $employee->companyworked =$request->input('companyworked');
             $employee->designation =$request->input('designation');
             $employee->experience =$request->input('experience');
             $employee->aboutyou =$request->input('aboutyou');
             $employee->institutename =$request->input('institutename');
             $employee->highest_qualification =$request->input('highest_qualification');
             $employee->Language =$request->input('Language');
             $employee->rating =$request->input('rating');
             $employee->city =$request->input('city');
             $employee->user_id =Auth::user()->id;
             $employee->save();
             return redirect('/employee')->with('success','Records created');
          
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
        $employee = Employee::find($id);
        return view('employee.show')->with('employee',$employee);
        
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
        $employee = Employee::find($id);
/*
        if(auth()->user()->id !==$employee->user_id){
            return redirect('/employeedashboard')->with('error','unauthorised page');

        }
*/
       
        return view('employee.edit')->with('employee',$employee);
       
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
        $this->validate($request, [
            'fullname' => 'required',
            'address' => 'required',
            'objective' => 'required',
            'date' => 'required',
            'companyworked' => 'required',
            'designation'=>'required',
            'experience'=>'required',
            'aboutyou'=>'required',
            'institutename'=>'required',
            'highest_qualification'=>'required',
            'Language'=>'required',
            'rating'=>'required',
            'city'=>'required'

           ]);
         $employee = Employee::find($id);
         $employee->fullname =$request->input('fullname');
         $employee->address =$request->input('address');
         $employee->objective =$request->input('objective');
         $employee->date =$request->input('date');
         $employee->companyworked =$request->input('companyworked');
         $employee->designation =$request->input('designation');
         $employee->experience =$request->input('experience');
         $employee->aboutyou =$request->input('aboutyou');
         $employee->institutename =$request->input('institutename');
         $employee->highest_qualification =$request->input('highest_qualification');
         $employee->Language =$request->input('Language');
         $employee->rating =$request->input('rating');
         $employee->city =$request->input('city');

         $employee->save();
         return redirect('/employee')->with('success','Records Updated');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);

       /* if(auth()->user()->id !==$employee->user_id){
            return redirect('/employeedashboard')->with('error','unauthorised page');

        }
        */
        $employee->delete();
        return redirect('/employee')->with('success','Records delete');
    }


    public  function deleteaccount()
    {     
       
        return view('employee.deleteaccount');
       
    }
   
    
}
