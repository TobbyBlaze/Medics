<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Input;

use App\Post;

use Auth;
use DB;

use App\Http\Requests;
use Validator;
use Redirect;
use View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(auth::user()->id);
        // $users = User::where('users.status', '!=', auth()->user()->status)->where('users.department', '=', auth()->user()->department)->orWhere('users.school', '=', auth()->user()->school)->orWhere('users.college', '=', auth()->user()->college)->orderBy('users.created_at', 'desc')->paginate(10);

        $users = User::get();
        $student = "student";
        $staff = "staff";
        $admin = "admin";
        $m = 1; //true
        $n = 0; //false
        $opost = Post::orderBy('posts.created_at', 'asc')->paginate(1);
        
        $auth = Auth::user();

        return view('dashboard', compact('user', 'users', 'student', 'staff', 'admin', 'opost'), ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Post::orderBy('posts.created_at', 'desc')->paginate(1);
        $opost = Post::orderBy('posts.created_at', 'asc')->paginate(1);
        return view('dashboard', compact('user', 'users', 'posts', 'opost', 'medicals', 'stMedicals', 'medics', 'stMedics', 'stNoMedics', 'student', 'staff', 'admin'), ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //create medical posts

        if($request->hasFile('file')){
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('file')->getClientOriginalExtension();
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            //$path = $request->file('file')->storeAs('public/files/documents', $filenameToStore);
            
            if($extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension == "gif"){
                $path = $request->file('file')->storeAs('public/files/images', $filenameToStore);
            }

            $post = new Post;
            $post->about = $request->input('about');
            $post->mission = $request->input('mission');
            $post->vision = $request->input('vision');
            $post->plan = $request->input('plan');
            $post->noticeTitle = $request->input('noticeTitle');
            $post->notice = $request->input('notice');
            $post->phone = $request->input('phone');
            $post->email = $request->input('email');
            
            $post->user_id = auth()->user()->id;
           
            if($extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension == "gif"){
                $post->image = $filenameToStore;
            }
            
            $post->save();

            return redirect('/home');

            // return redirect()->back()->with('success', 'Post created successfully');
            
            
        }else{
            $filenameToStore = 'NoFile';

            $post = new Post;
            $post->about = $request->input('about');
            $post->mission = $request->input('mission');
            $post->vision = $request->input('vision');
            $post->plan = $request->input('plan');
            $post->noticeTitle = $request->input('noticeTitle');
            $post->notice = $request->input('notice');
            $post->phone = $request->input('phone');
            $post->email = $request->input('email');
            
            $post->user_id = auth()->user()->id;
        
            $post->save();

            return redirect('/home');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $opost = Post::orderBy('posts.created_at', 'asc')->paginate(1);

        $user = auth()->user()->id;

        return view('viewAssets.editPost')->with('post', $post)->with('opost', $opost)->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        if($request->hasFile('file')){
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('file')->getClientOriginalExtension();
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            //$path = $request->file('file')->storeAs('public/files/documents', $filenameToStore);
            
            if($extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension == "gif"){
                $path = $request->file('file')->storeAs('public/files/images', $filenameToStore);
            }

            //create post

            $post = Post::find($id);
            $post->about = $request->input('about');
            $post->mission = $request->input('mission');
            $post->vision = $request->input('vision');
            $post->plan = $request->input('plan');
            $post->noticeTitle = $request->input('noticeTitle');
            $post->notice = $request->input('notice');
            $post->phone = $request->input('phone');
            $post->email = $request->input('email');
            
            $post->user_id = auth()->user()->id;
           
            if($extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension == "gif"){
                $post->image = $filenameToStore;
            }
            
            $post->save();


            return redirect()->back()->with('success', 'Post created successfully');
            
            
        }else{
            $filenameToStore = 'NoFile';

            //update post

            $post = Post::find($id);
            $post->about = $request->input('about');
            $post->mission = $request->input('mission');
            $post->vision = $request->input('vision');
            $post->plan = $request->input('plan');
            $post->noticeTitle = $request->input('noticeTitle');
            $post->notice = $request->input('notice');
            $post->phone = $request->input('phone');
            $post->email = $request->input('email');
            
            $post->user_id = auth()->user()->id;
        
            $post->save();

            return redirect()->back()->with('success', 'Post updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function updateUser(Request $request)
    {

        $id = $request->input('id');
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->lname = $request->input('lname');
        $user->status = $request->input('status');
        $user->gender = $request->input('gender');
        $user->phone = $request->input('phone');
        $user->id_number = $request->input('id_number');
        $user->hall = $request->input('hall');
        $user->program = $request->input('program');
        $user->department = $request->input('department');
        $user->dp = $request->input('dp');
        $user->email = $request->input('email');
        
        $user->save();

        return redirect()->back()->with('success', 'successfully');

    }
}
