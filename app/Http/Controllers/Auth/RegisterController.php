<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // return User::create([
        //     'name' => $data['name'],
        //     'lname' => $data['lname'],
        //     'gender' => $data['gender'],
        //     'phone' => $data['phone'],
        //     'reg_number' => $data['reg_number'],
        //     'hall' => $data['hall'],
        //     'program' => $data['program'],
        //     'department' => $data['department'],
        //     'employee_number' => $data['employee_number'],
        //     'dp' => $data['dp'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        // ]);

        $file = $data['file'];

        $fileD = fopen($file,"r");
        $column=fgetcsv($fileD);
        while(!feof($fileD)){
         $rowData[]=fgetcsv($fileD);
        }
        foreach ($rowData as $key => $value) {
            
            $inserted_data=array('name'=>$value[0],
                                 'lname'=>$value[1],
                                 'status'=>$value[2],
                                 'gender'=>$value[3],
                                 'phone'=>$value[4],
                                 'id_number'=>$value[5],
                                 'hall'=>$value[6],
                                 'program'=>$value[7],
                                 'department'=>$value[8],
                                 'dp'=>$value[9],
                                 'email'=>$value[10],
                                 'password'=>$value[12]
                            );
            
             User::create($inserted_data);
             
        }
        // print_r($rowData);
    }

    // public function reg(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'lname' => $data['lname'],
    //         'gender' => $data['gender'],
    //         'phone' => $data['phone'],
    //         'reg_number' => $data['reg_number'],
    //         'hall' => $data['hall'],
    //         'program' => $data['program'],
    //         'department' => $data['department'],
    //         'employee_number' => $data['employee_number'],
    //         'dp' => $data['dp'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }
}
