<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\CardStatus;
use App\MatchResult;
use App\TermResult;
use Carbon\Carbon;

class MatchController extends Controller
{
  public function matchMakeAccess()
  {
    $user_id = Auth::id();
    $user = User::find($user_id);
    
    //対戦エントリーフラグが１（＝守備登録のみ）を抽出
    $diffence_users = MatchResult::where('diffence_entry',1)->get();
    
    //タームエンドポイントの更新
    TermResult::termEndPointDiffenceEntryCalculation($user_id);
    $term_result = TermResult::where('user_id', $user_id)->latest()->first();
    $term_end_point = $term_result->term_end_point;
    
    //本日の対戦数の確認
    $day_match_count = $user->day_match_count;
    
    return view('users.match_make', ['diffence_users' => $diffence_users, 'user_id' => $user_id, 
      'term_end_point' => $term_end_point, 'day_match_count' => $day_match_count]);
  }

  public function matchMakeDelete(Request $request)
  {
    //守備ユーザールームの削除（対戦エントリーフラグも同時に消失する）
    //Request->idはMatch_idがgetで送られてきている
    $diffence_info = MatchResult::find($request->id);
    $diffence_info->delete();
    
    //本日の対戦数を-1
    $user_id = Auth::id();
    $user = User::find($user_id);
    $user->day_match_count--;
    $user->save();
    
    return redirect(route('match.make'));
  }
  
  public function matchDiffenceAccess()
  {
    $user_id = Auth::id();
    list($diffence_card_point_1, $diffence_card_point_2, $diffence_card_point_3,
      $diffence_card_point_4, $diffence_card_point_5) = CardStatus::diffenceCardStatus($user_id);
    
    //登録ボタンスイッチングの呼び出しおよび初期化（ブラウザバック対策）
    $user = User::find($user_id);
    $button_switch = $user->button_switch = 0;
    $user->save();
    
    //タームエンドポイントの取得 →不要？
    $term_result = TermResult::where('user_id', $user_id)->latest()->first();
    $term_end_point = $term_result->term_end_point;
    
    return view('users.match_diffence', [
      'diffence_card_point_1' => $diffence_card_point_1,
      'diffence_card_point_2' => $diffence_card_point_2,
      'diffence_card_point_3' => $diffence_card_point_3,
      'diffence_card_point_4' => $diffence_card_point_4,
      'diffence_card_point_5' => $diffence_card_point_5,
      'button_switch' => $button_switch,
      'term_end_point' => $term_end_point
    ]);
  }
  
  public function matchDiffenceSetAccess(Request $request)
  {
    $user_id = Auth::id();
    list($diffence_card_point_1, $diffence_card_point_2, $diffence_card_point_3,
      $diffence_card_point_4, $diffence_card_point_5) = CardStatus::diffenceCardStatus($user_id);
    
    //登録ボタンスイッチングの呼び出し
    $user = User::find($user_id);
    $button_switch = $user->button_switch;
    
    //タームエンドポイントの取得→不要？
    $term_result = TermResult::where('user_id', $user_id)->latest()->first();
    $term_end_point = $term_result->term_end_point;
    
    //matchDiffenceLayoutから受けとったRequest内の各レイアウトのカードNoを取得し、Viewへ渡す
    $diffence_layout_1 = $request->diffence_layout_1;
    $diffence_layout_2 = $request->diffence_layout_2;
    $diffence_layout_3 = $request->diffence_layout_3;
    $diffence_layout_4 = $request->diffence_layout_4;
    $diffence_layout_5 = $request->diffence_layout_5;
    
    return view('users.match_diffence_set', [
      'diffence_card_point_1' => $diffence_card_point_1,
      'diffence_card_point_2' => $diffence_card_point_2,
      'diffence_card_point_3' => $diffence_card_point_3,
      'diffence_card_point_4' => $diffence_card_point_4,
      'diffence_card_point_5' => $diffence_card_point_5,
      'diffence_layout_1' => $diffence_layout_1,
      'diffence_layout_2' => $diffence_layout_2,
      'diffence_layout_3' => $diffence_layout_3,
      'diffence_layout_4' => $diffence_layout_4,
      'diffence_layout_5' => $diffence_layout_5,
      'button_switch' => $button_switch,
      'term_end_point' => $term_end_point
    ]);
  }
  
  public function matchDiffenceLayout(Request $request)
  {
    //リセットボタン押下時の処理
    if ($request->has('reset'))
    {
      //登録ボタンスイッチング→非活性
      $user_id = Auth::id();
      $user = User::find($user_id);
      $button_switch=$user->button_switch = 0;
      $user->save();
      
      return redirect(route('match.diffence', ['button_switch' => $button_switch]));
    }
    
    //セットボタン押下時の処理
    if ($request->has('set'))
    {
      //select formのエラーチェック
      $select_array = [$request->diffenceLayout1, $request->diffenceLayout2, $request->diffenceLayout3, $request->diffenceLayout4, $request->diffenceLayout5];
      $unique_array = array_unique($select_array);
      
      //選択されていないカードの有無チェック
      if (in_array(null, $unique_array, true) == true)
      {
        return redirect()->back()->withInput($request->all)->withErrors('選択されていないカードがあります');
      //重複して選択されているカードの有無チェック
      }elseif(count($unique_array) !== count($select_array)) 
      {
        return redirect()->back()->withInput($request->all)->withErrors('重複選択されているカードがあります');
      }else{
      //問題ないときの処理 
      //登録ボタンスイッチング→活性
      $user_id = Auth::id();
      $user = User::find($user_id);
      $button_switch = $user->button_switch = 1;
      $user->save();
      //Radioボタンでセットした各レイアウトのカードNoを取得（machtDiffenceSetAccessアクションの$requestに渡す）
      $diffence_layout_1 = $request->diffenceLayout1;
      $diffence_layout_2 = $request->diffenceLayout2;
      $diffence_layout_3 = $request->diffenceLayout3;
      $diffence_layout_4 = $request->diffenceLayout4;
      $diffence_layout_5 = $request->diffenceLayout5;
      
      return redirect(route('match.diffence.set', ['diffence_layout_1' => $diffence_layout_1, 
        'diffence_layout_2' => $diffence_layout_2, 'diffence_layout_3' => $diffence_layout_3, 
        'diffence_layout_4' => $diffence_layout_4, 'diffence_layout_5' => $diffence_layout_5]))
        ->withInput($request->all);
      }
    }
    
    //登録ボタン押下時の処理
    if ($request->has('entry'))
    {
      $user_id = Auth::id();
      $user = User::find($user_id);
      
      $term_result = TermResult::where('user_id', $user_id)->latest()->first();
      $term_end_point = $term_result->term_end_point;
      
      //term_end_pointが0 もしくは 一日の対戦数が10未満だった場合は守備登録しmatch_resultページへ遷移する
      if ($term_end_point == 0 || $day_match_count <10000) 
      {
        list($diffence_card_point_1, $diffence_card_point_2, $diffence_card_point_3,
        $diffence_card_point_4, $diffence_card_point_5) = CardStatus::diffenceCardStatus($user_id);
       
        //カードNoをカードポイントへ置換、オープンカードをカードナンバーへ置換（int型へ）
        $replace_before = [$request->diffenceLayout1, $request->diffenceLayout2, $request->diffenceLayout3,
          $request->diffenceLayout4, $request->diffenceLayout5, $request->openCard];
        $search = ['DNo1', 'DNo2', 'DNo3', 'DNo4', 'DNo5', 'openCard1', 'openCard2','openCard3','openCard4','openCard5',];
        $replace = [$diffence_card_point_1, $diffence_card_point_2, $diffence_card_point_3, $diffence_card_point_4, $diffence_card_point_5,
          '1', '2', '3', '4', '5'];
        $replace_after =str_replace($search, $replace, $replace_before);
        
        $diffence_entry = new MatchResult;
        $diffence_entry->user_id = $user_id;
        $diffence_entry->diffence_nickname = User::find($user_id)->nickname;
        $diffence_entry->diffence_layout_1 = $replace_after[0];
        $diffence_entry->diffence_layout_2 = $replace_after[1];
        $diffence_entry->diffence_layout_3 = $replace_after[2];
        $diffence_entry->diffence_layout_4 = $replace_after[3];
        $diffence_entry->diffence_layout_5 = $replace_after[4];
        $diffence_entry->open_card = $replace_after[5];
        $diffence_entry->diffence_entry = 1;
        $diffence_entry->save();
        
        //一日の対戦数を+1
        User::dayMatchCount($user_id);
        
        //登録ボタンスイッチング→0：新たな守備登録、対戦のための初期化
        $user_id = Auth::id();
        $user = User::find($user_id);
        $button_switch = $user->button_switch = 0;
        $user->save();
  
        return redirect(route('match.make'));
      }else{
      //term_end_pointが1もしくは2だった場合、もしくは一日の対戦数が10だった場合は守備登録せずにmatch_resultページへ遷移する
        return redirect(route('match.make')); 
      }
    }
  }
  
  public function matchOffenceAccess(Request $request)
  {
    $user_id = Auth::id();
    //ニックネームの取得
    $offence_nickname = User::find($user_id)->nickname;
    $diffence_info = MatchResult::find($request->id);
    
    //対戦ボタンスイッチング初期値（0=非活性）の呼び出し
    $button_switch = User::find($user_id)->button_switch;
    
    //攻撃カードポイントの取得
    list($offence_card_point_1, $offence_card_point_2, $offence_card_point_3,
      $offence_card_point_4, $offence_card_point_5) = CardStatus::offenceCardStatus($user_id);
    
    return view ('users.match_offence', [
      'offence_nickname' => $offence_nickname, 
      'diffence_info' => $diffence_info,
      'button_switch' => $button_switch,
      'offence_card_point_1' => $offence_card_point_1,
      'offence_card_point_2' => $offence_card_point_2,
      'offence_card_point_3' => $offence_card_point_3,
      'offence_card_point_4' => $offence_card_point_4,
      'offence_card_point_5' => $offence_card_point_5,
    ]);
  }
  
  public function matchOffenceLayout(Request $request)
  {
    //リセットボタン押下時の処理
    if ($request->has('reset'))
    {
      $id= $request->diffence_info;
      
      //登録ボタンスイッチング→非活性
      $user_id = Auth::id();
      $button_switch = User::find($user_id);
      $button_switch->button_switch = 0;
      $button_switch->save();
      
      return redirect(route('offence.access', ['id' => $id, 'button_switch' => $button_switch]));
    }

    //セットボタン押下時の処理
    if ($request->has('set'))
    {
      //select formのエラーチェック
      $select_array = [$request->offenceLayout1, $request->offenceLayout2, $request->offenceLayout3, $request->offenceLayout4, $request->offenceLayout5];
      $unique_array = array_unique($select_array);
      //選択されていないカードの有無チェック
      if (in_array(null, $unique_array, true) == true)
      {
        return redirect()->back()->withInput($request->all)->withErrors('選択されていないカードがあります');
      //重複して選択されているカードの有無チェック
      }elseif(count($unique_array) !== count($select_array)) 
      {
        return redirect()->back()->withInput($request->all)->withErrors('重複選択されているカードがあります');
      //問題ないときの処理 
      }else{
        $id= $request->diffence_info;
        
        //対戦ボタンスイッチング→活性
        $user_id = Auth::id();
        $button_switch = User::find($user_id);
        $button_switch->button_switch = 1;
        $button_switch->save();
        
        return redirect(route('offence.access', ['id' => $id, 'button_switch' => $button_switch]))->withInput($request->all);
      }
    }

    //対戦ボタン押下時の処理
    if ($request->has('entry'))
    {
      $id= $request->diffence_info; //対戦結果id (match_resultのid)
      $match_result = MatchResult::find($id);
      $offence_user_access = $match_result->offence_user_access; //オフェンスユーザーのアクセス確認（二重送信防止用）
      
      $user_id = Auth::id(); //ログインユーザーID
      $user = User::find($user_id); //ログインユーザーIDからログインユーザー情報の取得
      
      //offence_user_accessが0だった場合は対戦しmatch_resultページへ遷移する
      if ($offence_user_access == 0)
      {
        //MatchResult更新
        $match_result->offence_user_id = $user_id;
        $match_result->matched_at = Carbon::now();
        $match_result->diffence_entry = 0;
        $match_result->offence_user_access =1;
        $match_result->diffence_user_access =0; //0 → 0へ変わらず　見返しやすいよう記載
        
        //一日の対戦数を+1
        User::dayMatchCount($user_id);
        
        //CardStatusから自分のカードポイントの取得
        list($offence_card_point_1, $offence_card_point_2, $offence_card_point_3,
        $offence_card_point_4, $offence_card_point_5) = CardStatus::offenceCardStatus($user_id);
        
        //カードNoをカードポイントへ置換
        $replace_before = [$request->offenceLayout1, $request->offenceLayout2, $request->offenceLayout3,
          $request->offenceLayout4, $request->offenceLayout5];
        $search = ['ONo1', 'ONo2', 'ONo3', 'ONo4', 'ONo5'];
        $replace = [$offence_card_point_1, $offence_card_point_2, $offence_card_point_3, $offence_card_point_4, $offence_card_point_5,];
        $replace_after =str_replace($search, $replace, $replace_before);
      
        $match_result->offence_nickname = User::find($user_id)->nickname;
        $match_result->offence_layout_1 = $replace_after[0];
        $match_result->offence_layout_2 = $replace_after[1];
        $match_result->offence_layout_3 = $replace_after[2];
        $match_result->offence_layout_4 = $replace_after[3];
        $match_result->offence_layout_5 = $replace_after[4];
        $match_result->save();
        
        //勝敗の計算
        list($match_result, $win_user) = MatchResult::matchResultCalculation($match_result);
        //勝カード数を変数化(view受け渡し用）
        $win_card_count_offence = $match_result->win_card_count_offence;
        $win_card_count_diffence = $match_result->win_card_count_diffence;
        
        //TermResultへ成績結果を更新
        TermResult::termResultUpdate($match_result, $win_user);
        
        //トータル勝率をusersテーブルへ反映(Offence)
        TermResult::totalWinRateOffenceUpdate($match_result);
    
        //トータル勝率をusersテーブルへ反映(diffence)
        TermResult::totalWinRatediffenceUpdate($match_result);
        
        //オフェンスアクセスフラグの変更 0->1 (1:アクセス済)
        TermResult::offneceAccessFlag($match_result);
  
        //タームエンドポイントの計算_攻撃ユーザー（100x試合目かどうかの確認）
        TermResult::termEndPointOffenceCalculation($match_result);
  
        //タームエンドポイントの計算_守備ユーザー（100x試合目かどうかの確認）
        TermResult::termEndPointDiffenceCalculation($match_result);
        
        //レート計算
        TermResult::elorateCalculation($match_result, $win_user);
        
        //チップ計算
        TermResult::tipCalculation($match_result);
        
        //攻守ニックネームの守ユーザーIDの設定（view引き渡し向け）
        $offence_nickname=$match_result->offence_nickname;
        $diffence_nickname=$match_result->diffence_nickname;
        $diffence_user_id=$match_result->user_id;
        
        //対戦ボタンスイッチング→0：新たな守備登録および対戦のための初期化
        $button_switch = User::find($user_id);
        $button_switch->button_switch = 0;
        $button_switch->save();
        
        return redirect(route('match.result', ['id' => $id, 'win_card_count_offence' => $win_card_count_offence, 
          'win_card_count_diffence' => $win_card_count_diffence, 'win_user' => $win_user,
          'offence_user_id' => $user_id, 'diffence_user_id' => $diffence_user_id, 
          'offence_nickname' => $offence_nickname, 'diffence_nickname' => $diffence_nickname, 
          'button_switch' => $button_switch]));
      }else{
        //オフェンスユーザーアクセス履歴があれば、何も更新せずにmatch.makeへ遷移
        return redirect(route('match.make'));
      }
    }
  }
  
  public function matchResultAccess(Request $request)
  {
    return view('users.match_result', ['request' => $request]);
  }
  
  public function matchHistoryAccess()
  {
    $user_id = Auth::id(); //ログインユーザーID
    
    //対象ユーザーの対戦履歴を取得
    $target_match_results = MatchResult::where('diffence_entry', 0)
      ->where(function($query) use($user_id) {$query->where('user_id',$user_id)->orWhere('offence_user_id',$user_id);})
      ->latest()->get();
      
    //未閲覧試合ならびに試合数の確認
    list($not_accessed_results, $not_accessed_count) = MatchResult::notAccessedResult($user_id);
    
    //未閲覧試合の試合idの配列化（未アクセス数が0の場合、$not_accessed_result_id[]はダミーの0をいれる）、
    if ($not_accessed_count > 0)
    {
      foreach ($not_accessed_results as $not_accessed_result)
      {
        $not_accessed_result_id[] = $not_accessed_result->id;
      }
    }else{
      $not_accessed_result_id[] = array(0);
    }
      
    return view('users.match_history', ['target_match_results' => $target_match_results, 
      'not_accessed_result_id' => $not_accessed_result_id, 'not_accessed_count' => $not_accessed_count]);
  }
  
  public function matchPastResultAccess($id)
  {
    $match_result=MatchResult::where('id',$id)->first();
    
    //勝利ユーザーの計算（過去結果向け再計算）
    $win_user = MatchResult::winUserReCalculation($match_result);
    
    //自分の未閲覧試合を初めて見た場合の処理
    $user_id = Auth::id(); //ログインユーザーID
    if ($match_result->user_id == $user_id && $match_result->diffence_user_access == 0)
    {
      $match_result->diffence_user_access = 1;
      $match_result->save();
    }
    
    return view('users.match_past_result', ['match_result' => $match_result, 'win_user' => $win_user, 'user_id' => $user_id]);
  }
  
}
