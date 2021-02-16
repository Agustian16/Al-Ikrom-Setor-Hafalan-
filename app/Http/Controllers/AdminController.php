<?php
  
namespace App\Http\Controllers;
   
use App\Models\Admin;
use Illuminate\Http\Request;
  
class AdminController extends Controller
{
    public function index()
    {
        // $admins = Admin::latest()->paginate(5);
    
        // return view('admins.index',compact('admins'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
        return view('admins.index');
    }
}