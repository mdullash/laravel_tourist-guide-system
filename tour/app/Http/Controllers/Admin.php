<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
use App\AdminPanel;
use App\flight;
use App\User;
use App\Usercomment;
use App\Contactmodel;
use App\About;
use App\Package;
use App\Ticket;
use App\Transaction;
use App\Destination;
use App\Businfo;
use DB;
use Validator;

class Admin extends Controller
{
    //
    public function index(){

    	return view('admin.index');
    }
    public function show(){


    	$acc = AdminPanel::all();

    	return view('admin.index')->with('admins', $acc);

    }
    public function livesearch(){

      return view('admin.livesearch');

    }
    function livesearchaction(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('usercomments')
         ->where('comment', 'like', '%'.$query.'%')
         ->get();

      }
      else
      {
       $data = DB::table('usercomments')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->comment.'</td>
        </tr>
        ';
       }

     }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }

      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }


    public function allpackage(){

        //return view('admin.flight');

        $acc =Package::all();


        return view('admin.packageshow')->with('packages', $acc);

    }

    public function flight(){

        //return view('admin.flight');

        $acc =flight::all();
        return view('admin.flight')->with('flights', $acc);

    }
      public function usercomment(){

       // return view('admin.usercomment');

        $acc =Usercomment::all();
        return view('admin.usercomment')->with('usercomments', $acc);

    }
    public function create(){
    	return view('admin.create');
    }
     public function contactform(){
        return view('admin.contact');
    }
     public function contactstore(Request $req){

        $account = new Contactmodel;
      $account->address = $req->address;
        $account->mobile = $req->mobile;
        $account->email = $req->email;
        $account->save();

        return view('admin.contact');
        //return view('admin.show');
    }
     public function aboutform(){

        return view('admin.about');
    }
    public function destinationshow(){

        return view('admin.destination');
    }
     public function aboutstore(Request $req){

        $account = new About;
       $account->details = $req->details;
        $account->save();

        return view('admin.about');
        //return view('admin.show');
    }
    public function packageshow(){

        return view('admin.package');
    }


        public function packagestore(Request $req){

          $account = new Package;
          $account->pname = $req->pname;
          $account->packageone = $req->pone;
          $account->packagetwo= $req->ptwo;
          $account->packagethree = $req->pthree;
          $account->save();
        	return view('admin.package');

        }

        public function store(Request $req){

            $this->validate($req, [
                'fname' => 'required',
                'lname' => 'required',
                'email' => 'required',
                'password' => 'required'
            ]);
    	$account = new AdminPanel;
      $account->firstname = $req->fname;
    	$account->lastname = $req->lname;
    	$account->email = $req->email;
    	$account->password = $req->password;
    	$account->type =  'admin';
    	$account->save();
    	$acc = AdminPanel::where('email',$req->email)
    					->first();
    	return view('admin.index')->with('admins', $acc);
    	//return view('admin.show');
    }
    public function flightstore(Request $req){

        $account = new flight;
        $account->fromm = $req->from;
        $account->wheree = $req->where;
        $account->checkin = $req->checkin;
        $account->checkout = $req->checkout;
        $account->travellers = $req->travellers;
        $account->cost = $req->cost;
        $account->save();

        return view('admin.flight');


        //return view('admin.show');
    }
    public function destinationstore(Request $req){

        $account = new Destination;
        $account->name = $req->name;
        $account->details = $req->details;
        
        $account->save();

        return view('admin.destination');


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
    }
    public function tshow(){

       // return view('admin.userlist');

        $acc =Ticket::all();
        return view('admin.ticket')->with('Users', $acc);

    }
    public function pay(){

       // return view('admin.userlist');

        $acc =Transaction::all();
        return view('admin.pay')->with('Users', $acc);

    }
    public function ticketdelete($accId){
        $acc = Ticket::find($accId);
        return view('admin.tdelete')->with('acc', $acc);
    }

    public function tdestroy($accId){
        $acc = Ticket::destroy($accId);
        return redirect()->route('admin.ticket');
    }
    public function paydelete($accId){
        $acc = Transaction::find($accId);
        return view('admin.pdelete')->with('acc', $acc);
    }

    public function pdestroy($accId){
        $acc = Transaction::destroy($accId);
        return redirect()->route('admin.pay');
    }
     public function busshow(){

        return view('admin.busticket');
    }
    public function busstore(Request $req){

        $account = new Businfo;
        $account->fromm = $req->from;
        $account->wheree = $req->where;
        $account->checkin = $req->checkin;
        $account->person = $req->travellers;
        $account->bname = $req->bname;
        $account->cost = $req->cost;
        $account->save();

        return view('admin.busticket');


        //return view('admin.show');
    }

}
