<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\Flight;
use App\Transaction;

class TicketController extends Controller
{
  public function show($accId){
       $acc = Flight::find($accId);
       return view('tour.ticketinfo')->with('acc', $acc);
   }
   public function verify(){

        return view('tour.verify');
    }
    public function verifystore(Request $req){

        $account            = new Transaction;
        $account->tid     = $req->tid;

        $account->save();
        return redirect()->route('tour.index');
    }
   public function ticketstore(Request $req){

       $account            = new Ticket;
       $account->fromm     = $req->fromm;
       $account->wheree   = $req->wheree;
       $account->cdate   = $req->cdate;
       $account->travellers   = $req->travellers;
       $account->name   = $req->name;
        $account->email   = $req->email;
         $account->phone   = $req->phone;
         $account->ticketno   = $req->ticketno;
        $account->cost   = $req->cost;

       $account->save();
       return redirect()->route('tour.verify');
   }
  



}
