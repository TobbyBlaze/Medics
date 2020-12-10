<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Storage;

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

class MedicalController extends Controller
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
        
        $auth = Auth::user();

        $medicals = Medical::orderBy('medicals.appointment_date', 'asc')->where('medicals.user_id', $user->id)->paginate(20);

        // $medicals = Medical::orderBy('medicals.appointment_date', 'asc')->paginate(20);

        $medics = Medical::orderBy('medicals.appointment_date', 'asc')->where('medicals.user_id', $user->id)->where('medicals.isCompleted', $m)->get();

        $stMedicals = Medical::orderBy('medicals.appointment_date', 'asc')->where('medicals.medical_name', $user->department)->paginate(20);

        $stMedics = Medical::orderBy('medicals.appointment_date', 'asc')->where('medicals.medical_name', $user->department)->where('medicals.isCompleted', $m)->get();

        $stNoMedics = Medical::orderBy('medicals.appointment_date', 'asc')->where('medicals.medical_name', $user->department)->where('medicals.isCompleted', $n)->get();


        $adMedicals = Medical::orderBy('medicals.appointment_date', 'asc')->get();

        $adMedics = Medical::orderBy('medicals.appointment_date', 'asc')->where('medicals.isCompleted', $m)->get();

        $adNoMedics = Medical::orderBy('medicals.appointment_date', 'asc')->where('medicals.isCompleted', $n)->get();

        $posts = Post::orderBy('posts.created_at', 'asc')->get();
        $opost = Post::orderBy('posts.created_at', 'asc')->paginate(1);

        // $medic = Medical::where()


        // $posts = Post::orderBy('posts.updated_at', 'desc')
        // ->select('posts.*')
        // ->join('followers', 'followers.leader_id', '=', 'posts.user_id')
        // // ->where([['followers.follower_id', '=', $user->id], ['posts.user_id', '=', '1']])
        // // ->where('posts.user_id', $user->id)
        // ->where('followers.follower_id', $user->id)
        // ->orWhere('posts.user_id', $user->id)
        // ->paginate(20);

        return view('dashboard', compact('user', 'users', 'medicals', 'stMedicals', 'adMedicals', 'medics', 'stMedics', 'stNoMedics', 'adMedics', 'adNoMedics', 'student', 'staff', 'admin', 'posts', 'opost'), ['user' => $user]);

        // return view('posts.index', compact('user', 'users', 'followers' , 'followings', 'posts', 'postas', 'myposts', 'ifFollow'), ['user' => $user])->with('posts', $posts)->with('postas', $postas)->with('myposts', $myposts)->with('user', $user)->with('comments', $comments);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::find(auth::user()->id);
        $opost = Post::orderBy('posts.created_at', 'asc')->paginate(1);

        $medicals = Medical::orderBy('medicals.appointment_date', 'asc')->where('medicals.user_id', $user->id)->paginate(20);
        return view('booking', compact('user', 'medicals', 'opost'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //create appointment

        $request->validate([
            'appointment_date' => 'required',
            'medical_name' => 'required'
        ]); 

        $user = User::find(auth::user()->id);
       
        $medical = new Medical;
        $medical->appointment_date = $request->input('appointment_date');
        $medical->medical_name = $request->input('medical_name');
        
        // $medical->appointment_date = 1;
        $medical->user_id = auth()->user()->id;
        $stMedicalsCount = Medical::orderBy('medicals.appointment_date', 'asc')->where('medicals.medical_name', $medical->medical_name)->where('medicals.appointment_date', $medical->appointment_date)->get();
    
        //11 is the limitation here; means each department can receive a max of 10 bookings in a day.
        if($stMedicalsCount->count() < 11){
            $medical->save();

            return redirect('/home');
        }else{
            return redirect()->back();
        }

        // return redirect()->back()->with('success', 'Appointment created successfully');
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
        $medical = Medical::find($id);
        $opost = Post::orderBy('posts.created_at', 'asc')->paginate(1);


        $user = auth()->user()->id;

        // if(auth()->user()->id !== $medical->user_id){
        //     return redirect('/')->with('error', 'Unauthorised page');
        // }

        return view('edit-booking')->with('medical', $medical)->with('user', $user)->with('opost', $opost);
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
        //update medical

        $medical = Medical::find($id);
        $medical->appointment_date = $request->input('appointment_date');
        $medical->medical_name = $request->input('medical_name');

        $medical->user_id = auth()->user()->id;
       
        $medical->save();

        return redirect()->back()->with('success', 'Appointment updated successfully');
    }

    public function stUpdate(Request $request, $id)
    {
        //update medical

        $medical = Medical::find($id);
        $medical->appointment_date = $request->input('appointment_date');
        $medical->medical_name = $request->input('medical_name');

        $medical->isCompleted = $request->input('isCompleted');
        
        // $medical->appointment_date = 1;
        $medical->user_id = $request->input('user_id');
       
        $medical->save();

        return redirect()->back()->with('success', 'Appointment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medical = Medical::find($id);

        // if((auth()->user()->id !== $medical->user_id)||()){
        //     return redirect('/')->with('error', 'Unauthorised page');
        // }

        $medical->delete();

        return redirect()->back()->with('success', 'Appointment deleted successfully');
    }

    public function pwEdit()
    {
        
        $user = auth()->user()->id;
        $opost = Post::orderBy('posts.created_at', 'asc')->paginate(1);

        return view('changePassword')->with('user', $user)->with('opost', $opost);
    }

    public function pwUpdate(Request $request)
    {
        
        // $user = User::find(auth()->user()->id);
        $user = Auth::user();
        
        // $user->password = Hash::make($request->input('password'));
        $user->password = Hash::make($request->get('password'));
        
        $user->save();

        return redirect('/home');

    }
}
