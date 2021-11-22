<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users=User::all();
        return view('user.index',compact('users'));
    }
    public function edit($id)
    {
        $user=User::find($id);
        return view('user.edit',compact('user'));
    }
    public function update( Request $request,$id)
    {
        $user=User::find($id);
        $user->isadmin=$request->isadmin;
        $user->save();

        
         return back()->with('message','User Updated Successfully');
    }
    public function delete($id)
    {
        $user=User::find($id);
        $user->delete();
        return back()->with('message','User Deleted Successfully');

    }
}
