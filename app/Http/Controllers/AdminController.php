<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\contact;



class AdminController extends Controller
{
    public function index(){
        $countuser= User::where('usertype', 'user')->count();
        $countcontact= contact::all()->count();
        return view('admin.dashboard',compact('countuser','countcontact'));
    }
}
