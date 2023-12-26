<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TicketController extends Controller
{

    public function ticket_dashboard(){

        $tickets = DB::table('tickets')->get();
        return view('pages.ticket_dashboard', compact('tickets'));
    }

    public function purchase(){
        
        return view('pages.ticket_purchase');
    }

    public function store(Request $request){

        //  dd($request)->all();
         
          
  
  
          DB::table('tickets')->insert([
              'name' => $request->name,
              'journey_date' => $request->journey_date,
              'destination' => $request->destination,
              'phone_number' => $request->phone_number,
          ]);
  
           return redirect()->back();
          //   ->with('success', 'product created successfully');
      }
  




}
