<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    //Create

    //Read
    public function readAllTicket(){
        $tickets = Ticket::all();
        //dd($tickets);
        return view('home',compact("tickets"));
    }

    //Update

    //Delete
}
