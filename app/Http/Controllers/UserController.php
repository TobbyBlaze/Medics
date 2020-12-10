<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use App\Medical;
use App\User;
use App\Post;


use App\Notifications\newMedical;
use Auth;
use DB;

use App\Http\Requests;
use Validator;
use Redirect;
use View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit()
    {
        $user = Auth::user();
        $opost = Post::orderBy('posts.created_at', 'asc')->paginate(1);

        return view('editProfile')->with('user', $user)->with('opost', $opost);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $user = Auth::user();
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
}
