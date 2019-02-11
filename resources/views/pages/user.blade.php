@extends('layouts.default')
@section('content')
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">User Tables</h3>
              <br>
              <button class="btn btn-primary" data-toggle="modal" data-target="#addUser">Add New User</button>
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
              <div class="modal fade" id="addUser">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">New User</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                            <div class="modal-body">
                            <form action="{{ route('user.store') }}" method="post">
                            {{ csrf_field() }}
                                    <div class="form-group">
                                    <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                    <label for="id_roles">Role</label>
                                        <select class="form-control" id="id_roles" name="id_roles">
                                        @foreach($roles as $role)
                                        <option value=" {{$role->id}}" >{{$role->name_role}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                    <label for="id_position">Position</label>
                                        <select class="form-control" id="id_position" name="id_position">
                                        @foreach($poss as $pos)
                                        <option value=" {{$pos->id}}" >{{$pos->name_position}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                    <label for="address">Address</label>
                                        <input type="text" name="address" class="form-control" id="address" placeholder="Address">
                                    </div>
                                    <div class="form-group">
                                    <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                    <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                    </div> 
                                    <div class="modal-footer">
                                        <div class="form-group pull-right">
                                            <button type="submit" class="btn btn-primary">Add New User</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
            </div>
        </div>
      </div>
@stop