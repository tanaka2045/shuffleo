<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Announces;
use App\AnnounceHistory;
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
    $this->validate($request, Announces::$rules);
    
    $announce = new Announces;
    $form = $request->all();
    
    unset($form['_token']);
    
    $announce->fill($form);
    $announce->save();
    
    return redirect('admin/announce_create');
      
  }
  
  public function announceIndex()
  {
      return view('admin.announce_index');
  }  
  
  public function announceEdit(Request $request)
  {
      //Announces Modelからデータを取得する
      $announce = Announces::find($request->id);
      if (empty($announce)) {
        abort(403);
      }
      return view('admin.announce_edit', ['announce_form' => $announce]);
  }
  
  /*public function update(Request $request)
  {
    //Validationをかける
    $this->validate($request, Announces::$rules);
    //Announces Modelからデータを取得する
    $announce = Announces::find($request->id);
    //送信されてきたフォームデータを格納する
    $announce_form = $request->all();
    
    unset($announce_form['_token']);
    
    $announce->fill($announce_form)->save();
    $history = new announceHistory;
    $history->announce_id = $announce->id;
    $history->edited_at = Carbon::now();
    $history->save();
    
    return redirect('admin/announceIndex');
  }*/
  
  
}
