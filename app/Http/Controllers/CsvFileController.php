<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Exports\CsvExport;
use App\Imports\CsvImport;
use Maatwebsite\Excel\Facades\Excel;
use Auth;
use App\User;
use App\Post;
  
class CsvFileController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
        $opost = Post::orderBy('posts.created_at', 'desc')->paginate(1);
       return view('import', compact('opost'));
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new CsvExport, 'users.csv');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        $opost = Post::orderBy('posts.created_at', 'desc')->paginate(1);
        $user = User::find(auth::user()->id);
        if($user->status == "admin"){
            Excel::import(new CsvImport,request()->file('file'));
            return back();
        }else{
            return redirect('/home');
        }
    }
}
