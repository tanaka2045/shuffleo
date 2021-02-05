<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Storage;

class AnnounceAdminController extends Controller
{
    public function announceAdd()
    {
        return view('admin.announce_create');
    }
    
    public function announceCreate(Request $request)
    {
      $this->validate($request, )
        
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
