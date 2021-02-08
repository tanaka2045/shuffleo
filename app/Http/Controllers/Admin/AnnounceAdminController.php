<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Announce;
use App\AnnounceHistory; //現時点で使っていない
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
    $this->validate($request, Announce::$rules);
    
    $announce = new Announce;
    $form = $request->all();
    
    unset($form['_token']);
    
    $announce->fill($form);
    $announce->save();
    
    return redirect('admin/announce_index');
      
  }
  
  public function announceIndex(Request $request)
  {
    $cond_title = $request->cond_title;
    if ($cond_title !='') {
      //検索されたら検索結果を取得する
      $posts = Announce::where('title', $cond_title)->get();
    }else{
      //それ以外はすべてのインフォメーションを取得する
      $posts = Announce::all();
    }
      return view('admin.announce_index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }  
  
  public function announceEdit(Request $request)
  {
      //Announce Modelからデータを取得する
      $announce = Announce::find($request->id);
      if (empty($announce)) {
        abort(404);
      }
      return view('admin.announce_edit', ['announce_form' => $announce]);
  }
  
  public function announceUpdate(Request $request)
  {
    //Validationをかける
    $this->validate($request, Announce::$rules);
    //Announce Modelからデータを取得する
    $announce = Announce::find($request->id);
    //送信されてきたフォームデータを格納する
    $announce_form = $request->all();
    
    unset($announce_form['_token']);
    
    $announce->fill($announce_form)->save();
    /*$history = new announceHistory;
    $history->announce_id = $announce->id;
    $history->edited_at = Carbon::now();
    $history->save();*/
    
    return redirect('admin/announce_index');
  }
  
  public function announceDelete(Request $request)
  {
    $announce = Announce::find($request->id);
    $announce->delete();
    return redirect('admin/announce_index');
  }

  public function announcePreview()
  {
    $extract = Announce::latest()->take(10)->get();
    
    /*foreach($extract as $extracts){
    $extracts->update(["public"=>0]);
    }*/
    
    return view('admin.announce_official_preview', ['extract' => $extract]);
  }
  
  public function announceOfficialUpdate(Request $request)
  {
    $announcetest = Announce::latest()->take(10)->get();
    
    foreach($announcetest as $announcetests){
    $announcetests->update(["public"=>1]);
    }
    
    return view('admin.announce_official_update');
  }
}
