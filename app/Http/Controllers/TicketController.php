<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    //Create
    public function createTicket(Request $request){
        Ticket::create($request->all());
        return redirect('/home');
    }

    //Read
    public function readAllTicket(){
        $tickets = Ticket::all();
        //dd($tickets);
        return view('home',compact("tickets"));
    }

    //Update
    public function viewTicketById($id){
        $ticket = Ticket::find($id);
        return view('edit-ticket',compact("ticket"));
    }

    //Delete
}
