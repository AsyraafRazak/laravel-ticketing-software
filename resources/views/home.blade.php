@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">

                        {{ session('status') }}
                    </div>
                    @endif
                    <a href="/create-ticket" class="btn btn-success float-right mb-2" style="float: right;">Create Ticket</a>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Level</th>
                                <th scope="col">Status</th>
                                <th scope="col">Msg</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Updated At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tickets as $ticket)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$ticket->name}}</td>
                                <td>{{$ticket->email}}</td>
                                <td>{{$ticket->phone}}</td>
                                <td>{{$ticket->level}}</td>
                                <td>{{$ticket->status}}</td>
                                <td>{{$ticket->msg}}</td>
                                <td>{{$ticket->created_at}}</td>
                                <td>{{$ticket->updated_at}}</td>
                                <td>
                                    <a class="btn btn-info text-white btn-block" href="/edit-ticket/{{$ticket->id}}">Edit</a>
                                    <a class="btn btn-danger text-white btn-block" href="/delete-ticket/{{$ticket->id}}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection