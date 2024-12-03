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

    public function modifyTicket($id, Request $request){
        $ticket = Ticket::find($id);
        $ticket->name = $request->name;
        $ticket->phone = $request->phone;
        $ticket->email = $request->email;
        $ticket->status = $request->status;
        $ticket->level = $request->level;
        $ticket->msg = $request->msg;
        $ticket->save();

        return redirect('/home');
    }

    //Delete
}
