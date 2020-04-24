<?php

namespace App\Http\Controllers;

use App\article;
use App\blockuser;
use App\social;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','checkrole:admin']);
    }
    public function articles()
    {
        $articles=article::orderby('id','desc')->paginate('8');
        return view('admin.articles',compact('articles'));
    }
    public function social()
    {
        $social=social::first();
        if($social==null)
        {
            return view('admin.social.create');
        }
       return view('admin.social.index',compact('social'));
    }
    public function create()
    {
        $social=social::first();
        if($social==null)
        {
            return view('admin.social.create');
        }
        else
        {
            return view('admin.social.edit',compact('social'));
        }
    }
    public function store(Request $request)
    {
     $this->validate($request,[
         'facebook'=>'url|nullable',
         'twitter'=>'nullable|url',
         'youtube'=>'nullable|url',
         'whatsapp'=>'nullable|url',
         'snapchat'=>'nullable|url',
         'instagram'=>'nullable|url',
     ]);
     $social=social::first();
     if($social==null)
     {
       $social=new social();
       $social->create($request->except('_token'));
     }
     else
     {
        $social->update($request->except('_token'));
     }
     return redirect('/social');
    }
    public function createwriter()
    {
        return view('auth.register');
    }
    public function writer(Request $request)
    {
        $this->validate($request,[
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);
         User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect('/home');
    }
    public function publisharticle(Request $request)
    {
      $article=article::find($request->id);
      $article->publish=$request->publish;
      $article->save();
      return back();
    }
    public function blockuser(Request $request)
    {
        $this->validate($request,[
            'user_id'=>'required',
            'start'=>'date|required',
            'end'=>'date|required',
        ]);
        $blockuser=blockuser::where('user_id',$request->user_id)->first();
        if ($blockuser==null)
        {
           $blockuser=new blockuser();
           $blockuser->user_id=$request->user_id;
           $blockuser->start=$request->start;
           $blockuser->end=$request->end;
           $blockuser->save();
        }
        else
        {
           $blockuser->user_id=$request->user_id;
           $blockuser->start=$request->start;
           $blockuser->end=$request->end;
           $blockuser->save();
        }
        return redirect('/block');
    }
    public function block()
    {
      $blockusers=blockuser::all();
      $users=user::where('role','writer')->get();
      return view('admin.block',compact('users','blockusers'));
    }
}
