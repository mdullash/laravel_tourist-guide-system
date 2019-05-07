<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usercomment;
use App\User;

class UserController extends Controller
{
     /*public function index(){

    	return view('user.index');
    }*/
    public function show(){


    	return view('user.userhome');

    }
    public function profileshow(){
        $accId=session()->get('uname');
        //return view('user.userprofile');

        $acc = User::where('email',$accId)
        ->get();
        return view('user.userprofile')->with('value', $acc);

    }

    public function profile($email){

        return view('user.userprofile');

        $acc =User::find($email);
        return view('user.userprofile')->with('profiles', $acc);

    }

     public function store(Request $req){

    	$account = new Usercomment;
      $account->name =$req->session()->get('uname');
    	$account->comment = $req->comment;
    	$account->save();
        return view('user.userhome');

    }

    public function edit($accId){
         $acc = User::find($accId);
         return view('user.edit')->with('acc', $acc);
     }

    public function edited(Request $req,$accId){

    	$account = User::find($accId);
      $account->firstname = $req->fname;
    	$account->lastname = $req->lname;
    	$account->email = $req->email;
    	$account->password = $req->password;
    	$account->type =  'user';
    	$account->save();
    	return view('user.userhome');

    }
//     public function placesearch(Request $req)
//      {
// //$acc =Destination::where('name', $req->name)->get();
//   return view('tour.destination');


// }
//     public function placesearchshow(Request $req)
//      {
// $acc =Destination::where('name', $req->name)->get();
//   return view('tour.destinationn')->with('destinations', $acc);


// }


    /*

    public function flightstore(Request $req){

        $account = new flight;
        $account->ffrom = $req->from;
        $account->fto = $req->to;
        $account->fdate = $req->day;
        $account->name = $req->name;
        $account->save();
        $acc = flight::where('name',$req->name)
                        ->first();
        return view('admin.flight')->with('flights', $acc);


        //return view('admin.show');
    }
   public function edit($accId){
        $acc = AdminPanel::find($accId);
        return view('admin.edit')->with('acc', $acc);
    }

    public function update(Request $req, $accId){

        $account            = AdminPanel::find($accId);
        $account->firstname     = $req->accNo;
        $account->lastname   = $req->accName;
        $account->email   = $req->balance;
        $account->password    = $req->typeId;
        $account->save();
        return redirect()->route('admin.index', $accId);
    }
    public function delete($accId){
        $acc = AdminPanel::find($accId);
        return view('admin.delete')->with('acc', $acc);
    }

    public function destroy($accId){
        $acc = AdminPanel::destroy($accId);
        return redirect()->route('admin.index');
    }
    public function usershow(){

       // return view('admin.userlist');

        $acc =User::all();
        return view('admin.userlist')->with('Users', $acc);

    }
    public function userdelete($accId){
        $acc = User::find($accId);
        return view('admin.userdelete')->with('acc', $acc);
    }

    public function userdestroy($accId){
        $acc = User::destroy($accId);
        return redirect()->route('admin.index');
    }*/
}
