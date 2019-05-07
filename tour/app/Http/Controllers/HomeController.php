<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Usercomment;
use App\Contactmodel;
use App\flight;
use App\Ticket;
use App\Happycust;
use App\Destination;
use App\Businfo;
use App\Busticket;
use DB;
use Illuminate\Support\Facades\Input;
class HomeController extends Controller
{

    public function index(Request $request)
    {
      $accc =Contactmodel::all();
      $ac =Usercomment::all();
      $acc =Happycust::all();

        return view('tour.index')->with('acc', $acc)->with('contacts', $accc)
        ->with('comments',$ac);
    //	return view('tour.index');
    }
    public function about(Request $red)
    {
    	return view('tour.about');
    }
    public function actionn(Request $request)
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
        echo "no data to show";
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
    public function contact(Request $red)
    {
    	return view('tour.contact');
    }
    public function place(Request $red)
    {
    	return view('tour.places');
    }
    public function placeshow(Request $red)
    {
      return view('tour.showplace');
    }
    public function hotel(Request $red)
    {
    	return view('tour.hotel');
    }
    public function cox(Request $red)
    {
        return view('tour.coxbazar');
    }
    public function kuakata(Request $red)
    {
        return view('tour.kuakata');
    }
    public function sundorban(Request $red)
    {
        return view('tour.sundorban');
    }
    public function sajek(Request $red)
    {
        return view('tour.Sajek');
    }
    public function flight(Request $req)
    {
      $flight =flight::Where('fromm', 'like',Input::get('search_term') . '%' )
              //->where('wheree','like','%' . Input::get('search_termm') . '%')
      //     ->where('wheree', $req->where)
      //     ->where('travellers', $req->travellers)
      //     ->where('checkin', $req->checkin)
      //     ->where('checkout', $req->checkout)
          ->get();

    if($flight){

        return view('tour.flight')->with('flights', $flight);
    }else{

      return view('tour.index');

     }
    }
    public function pticketshow(){

         return view('tour.ticketprint');
     }
     public function printt(){

          return view('tour.print');
      }
     public function printticket(Request $req)
     {
       $flight =Ticket::where('phone', $req->mobile)

           ->get();

     if($flight){

         return view('tour.print')->with('flights', $flight);
     }else{

       return view('tour.ticketprint');

      }
     }

public function aboutshow(){

  //return view('admin.flight');
// return view('tour.about');

  $acc =About::all();
  return view('tour.about')->with('abouts', $acc);

}

public function placesearch(Request $req)
     {
 $acc =Destination::where('name', $req->name)->get();
   return view('tour.destination')->with('destinations', $acc);


 }
 public function buslist(){

       // return view('admin.usercomment');

        $acc =Businfo::all();
        return view('tour.busticketshow')->with('buss', $acc);

    }
    public function businfoshow($accId){
       $acc = Businfo::find($accId);
       return view('tour.busticketinfo')->with('acc', $acc);
   }
    public function busticketstore(Request $req){

       $account            = new Busticket;
       $account->fromm     = $req->fromm;
       $account->wheree   = $req->wheree;
       $account->cdate   = $req->cdate;
       $account->person   = $req->travellers;
       $account->name   = $req->name;
        $account->email   = $req->email;
         $account->mobile   = $req->phone;
          $account->bname   = $req->bname;
         $account->tno   = $req->ticketno;
        $account->cost   = $req->cost;

       $account->save();
       return redirect()->route('tour.verify');
   }
   public function buspticketshow(){

        return view('tour.ticketprint');
    }
    // public function printt(){
    //
    //      return view('tour.print');
    //  }
    public function busprintticket(Request $req)
    {
      $flight =Busticket::where('mobile', $req->mobile)

          ->get();

    if($flight){

        return view('tour.busprint')->with('flights', $flight);
    }else{

      return view('tour.ticketprint');

     }
    }



}
