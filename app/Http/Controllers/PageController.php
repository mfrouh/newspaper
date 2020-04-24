<?php

namespace App\Http\Controllers;

use App\article;
use App\articleview;
use App\tag;
use App\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
      $articles=article::orderby('id','desc')->where('publish','yes')->take(5)->get();
      return view('pages.home',compact('articles'));
    }
    public function addviewarticle(Request $request)
    {
        $articleview=articleview::where('article_id',$request->articleid)->where('ip',\Request::getClientIp())->count();
       if(!$articleview)
       {
        $articleview=new articleview();
        $articleview->ip=\Request::getClientIp();
        $articleview->article_id=$request->articleid;
        $articleview->save();
       }
       return response()->json('200');
    }
    public function addsaved($id)
    {
        if(isset($_COOKIE["Saved"]))
        {
         $cookie_data = stripslashes($_COOKIE['Saved']);
         $Saved_data = json_decode($cookie_data, true);
        }
        else
        {
         $Saved_data = array();
        }
        $id_list = array_column($Saved_data, 'id');
        if(in_array($id, $id_list))
        {
            foreach($Saved_data as $keys => $values)
            {
                if($Saved_data[$keys]['id'] == $id)
                {
                 unset($Saved_data[$keys]);
                 $item_data = json_encode($Saved_data,JSON_UNESCAPED_UNICODE);
                 setcookie("Saved", $item_data, time() + (86400 * 30),'/');
                }
            }
        }
        else{
              $item_array = array(
               'id'   => $id,
              );
             $Saved_data[] = $item_array;
             $item_data = json_encode($Saved_data,JSON_UNESCAPED_UNICODE);
             setcookie('Saved', $item_data, time() + (86400 * 30),'/');
        }
          $product=array();
          foreach (json_decode($_COOKIE['Saved']) as $key => $value)
          {
            $product[]=$value->id;
          }
       return response()->json(['data'=>$product]);
    }

    public function tag($name)
    {
        $tags=tag::where('name',str_replace('_',' ',$name))->pluck('article_id');
        $articles=article::whereIn('id',$tags)->where('publish','yes')->orderby('id','desc')->paginate(12);
        return view('pages.tag',compact('articles','name'));
    }
    public function date($date)
    {
        $articles=article::whereDate('created_at','=',$date)->where('publish','yes')->orderby('id','desc')->paginate(12);
        return view('pages.date',compact('articles','date'));
    }
    public function writers()
    {
        $users=User::get();
        return view('pages.writers',compact('users'));
    }
    public function writer($id)
    {
        $user=User::findorfail($id);
        $articles=article::where('user_id',$id)->orderby('id','desc')->where('publish','yes')->paginate(12);
        return view('pages.writer',compact('user','articles'));
    }

    public function search(Request $request)
    {
        $tags=tag::where('name','like',"%$request->searchquery%")->orderby('id','desc')->take(8)->get();
        $articles=article::where('title','like',"%$request->searchquery%")->where('publish','yes')->orderby('id','desc')->take(8)->get();
        $writers=User::where('name','like',"%$request->searchquery%")->orderby('id','desc')->take(8)->get();
        $name=$request->searchquery;
        return view('pages.search',compact('articles','name','writers','tags'));
    }
}
