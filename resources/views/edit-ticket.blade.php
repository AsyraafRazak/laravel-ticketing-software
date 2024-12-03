@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Ticket</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="container mt-5">
                        <h2 class="mb-4">Input Form</h2>
                        <form method="post" action="/save-modified/{{$ticket->id}}">
                            @csrf
                            <!-- First Row -->
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{$ticket->name}}" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{$ticket->email}}" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" value="{{$ticket->phone}}"required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="level">Level</label> :
                                    <label for="currentlvl">{{$ticket->level}}</label>
                                    <select class="form-control" id="level" name="level" required>
                                        <option value="Low">Low</option>
                                        <option value="Medium">Medium</option>
                                        <option value="High">High</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Second Row -->
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="status">Status</label>
                                    <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="{{$ticket->status}}">
                                </div>
                            </div>

                            <!-- Third Row -->
                            <div class="form-group">
                                <label for="msg">Message</label>
                                <textarea class="form-control" name="msg" id="msg" rows="5" placeholder="Enter your message" value="{{$ticket->msg}}" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
