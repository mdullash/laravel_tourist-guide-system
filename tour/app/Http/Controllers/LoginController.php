<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RegistrationRequest;
use App\Http\Requests\LoginRequest;
use App\User;
use App\AdminPanel;
use Validator;


class LoginController extends Controller
{
    public function index(){

    	return view('login.index');
    }
    public function userhome(Request $req){

        $user =User::where('email', $req->uname)
            ->where('password', $req->psw)
            ->first();

      if($user){
            $req->session()->put('uname',$req->uname );
            //$req->session()->put('pssword', $req->psw);
            //$req->session()->all();
        	return redirect()->route('user.userhome');
      }else{

        return redirect('/userlogin');

       }
     }


    public function show(){


      $acc = User::all();

      return view('admin.index')->with('admins', $acc);

    }

    public function verify(LoginRequest $req){

         /* $this->validate($req, [
            'uname' => 'required',
            'psw' => 'required'

        ]);*/
        $validator = Validator::make($req->all(), [
        'uname' => 'required',
        'psw' => 'required',
      ])->validate();

       $user = AdminPanel::where('email', $req->uname)
            ->where('password', $req->psw)
            ->first();

    	if($user){
            $req->session()->put('uname', $req->uname);
    		return redirect()->route('admin.index');
    	}else{

    		return redirect('/login');

    	 }
     }
       public function regform(Request $req){

         	return view('login.regform');

    }
    public function store(RegistrationRequest $req){

      $this->validate($req, [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

      $account = new User;
    	$account->firstname = $req->fname;
    	$account->lastname = $req->lname;
    	$account->email = $req->email;
    	$account->password = $req->password;
    	$account->type =  'user';
    	$account->save();
      return redirect('/login');

 }
}
