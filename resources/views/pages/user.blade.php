@extends('layouts.default')
@section('content')
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">User Tables</h3>
              <br>
              <button class="btn btn-primary" data-toggle="modal" data-target="#addItem">Add New User</button>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                  <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Email</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>

                  </tr>
                </thead>
                <tbody>
                @foreach($users as $index => $user)
                    <tr>
                        <td scope="col">{{$index +1}}</td>
                        <td scope="col">{{$user->name}}</td>
                        <td scope="col">{{$user->position->name_position}}</td>
                        <td scope="col">{{$user->email}}</td>
                        
                        <td scope="col"><a data-toggle="modal" data-target="#edit{{$user->id}}" class="btn btn-info">Edit</td>
                        <td scope="col"><a data-toggle="modal" data-target="#delete{{$user->id}}" class="btn btn-danger">Delete</td>
                    </tr> 
                    @endforeach
                </tbody>
              </table>
        </div>
      </div>
@stop