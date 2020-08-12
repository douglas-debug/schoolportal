<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Redirect;
class DashboardController extends Controller
{
    //
    public function registered()
    {
        $users = User::all();
        return view('admin.register')->with('users',$users);
    }

    public function status(Request $request,$id)
    {
      $users = User::findorFail($id);
      if ($users->status == 0) {
        $users->status = 1;
      }else{
        $users->status=0;
      }
      $users->save();
      return Redirect::to('/role_register')->with('message',$users->name. 'Status has been Approved Successfully.');
    }
    
    public function registeredit(Request $request,$id)
    {
      $users = User::findorFail($id);
      return view('admin.register_edit')->with('users',$users);
    }
    public function registerupdate(Request $request,$id)
    {
       $users = User::find($id);
       $users->name =$request->input('name');
       $users->email =$request->input('email');
       $users->mobile_number =$request->input('mobile_number');
       $users->city =$request->input('city');
       $users->update();
       return redirect('/role_register')->with('status','your date is update');
    }
    public function registerdelete($id)
    {
      $users = User:: findorFail($id);
      $users->delete();
      return redirect('/role_register')->with('status','your data is deleted successful');
    }
}
