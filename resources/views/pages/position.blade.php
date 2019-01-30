@extends('layouts.default')
@section('content')
<div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">Position Tables</h3>
              <br>
              <button class="btn btn-primary" data-toggle="modal" data-target="#addPos">Add New Item</button>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                  <th scope="col">No</th>
                    <th scope="col">Position</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>

                  </tr>
                </thead>
                <tbody>
                @foreach($position as $index => $pos)
                    <tr>
                        <td scope="col">{{$index +1}}</td>
                        <td scope="col">{{$pos->name_position}}</td>
                        <td scope="col"><a data-toggle="modal" data-target="#edit{{$pos->id}}" class="btn btn-info">Edit</td>
                        <td scope="col"><a data-toggle="modal" data-target="#delete{{$pos->id}}" class="btn btn-danger">Delete</td>
                    </tr> 
                    @endforeach
                </tbody>
              </table>
              <div class="modal fade" id="addPos">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">New Position</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                            <div class="modal-body">
                            <form action="{{ route('position.store') }}" method="post">
                            {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="text" name="name_position" class="form-control" id="name_position" placeholder="Position Name">
                                    </div>       
                                    <div class="modal-footer">
                                        <div class="form-group pull-right">
                                            <button type="submit" class="btn btn-primary">Add New Position</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
            </div>
            @foreach($position as $index => $pos)
            <div class="modal fade" id="edit{{$pos->id}}">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Item</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                            <div class="modal-body">
                            <form action="{{ route('position.update',$pos['id']) }}" method="post">
                            <input type="hidden" name="_method" value="PUT">
                            {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="{{$pos->id}}">
                                        <input type="text" name="name_position" class="form-control" id="name" placeholder="Position Name" value="{{$pos->name_position}}">
                                    </div>        
                                    <div class="modal-footer">
                                        <div class="form-group pull-right">
                                            <button type="submit" class="btn btn-primary">Update Position</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
            </div>
            <div class="modal fade" id="delete{{$pos->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Position</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure want to delete this position ?
                </div>
                <div class="modal-footer">
                <form action="{{ route('position.destroy',$pos['id']) }}" method="post">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="hidden" name="id" value="{{$pos->id}}">
                    <button type="submit" class="btn btn-primary">Delete</button>
                </form>
                </div>
                </div>
            </div>
            </div>
            @endforeach
        </div>
      </div>
@stop