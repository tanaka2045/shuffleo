<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnnounceAdminController extends Controller
{
    public function announceCreate()
    {
        return view('admin.announce_create');
    }
    
    public function announceEdit()
    {
        return view('admin.announce_edit');
    }
    public function announceIndex()
    {
        return view('admin.announce_index');
    }  
  
}
