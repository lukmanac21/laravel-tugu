@extends('layouts.default')
@section('content')
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">Item Tables</h3>
              <br>
              <button class="btn btn-primary" data-toggle="modal" data-target="#addItem">Add New Item</button>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                  <th scope="col">No</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Stock item</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>

                  </tr>
                </thead>
                <tbody>
                @foreach($items as $index => $item)
                    <tr>
                        <td scope="col">{{$index +1}}</td>
                        <td scope="col">{{$item->name_item}}</td>
                        <td scope="col">{{$item->stock_item}}</td>
                        <td scope="col"><a data-toggle="modal" data-target="#edit{{$item->id}}" class="btn btn-info">Edit</td>
                        <td scope="col"><a data-toggle="modal" data-target="#delete{{$item->id}}" class="btn btn-danger">Delete</td>
                    </tr> 
                    @endforeach
                </tbody>
              </table>
              {{$items->links()}}

              <div class="modal fade" id="addItem">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">New Item</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                            <div class="modal-body">
                            <form action="{{ route('item.store') }}" method="post">
                            {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="text" name="name_item" class="form-control" id="name_item" placeholder="Item Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="stock_item" class="form-control" id="stock_item" placeholder="Stock Item">
                                    </div>            
                                    <div class="modal-footer">
                                        <div class="form-group pull-right">
                                            <button type="submit" class="btn btn-primary">Add New Item</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
            </div>
            @foreach($items as $index => $item)
            <div class="modal fade" id="edit{{$item->id}}">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Item</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                            <div class="modal-body">
                            <form action="{{ route('item.update',$item['id']) }}" method="post">
                            <input type="hidden" name="_method" value="PUT">
                            {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="{{$item->id}}">
                                        <input type="text" name="name_item" class="form-control" id="name" placeholder="Item Name" value="{{$item->name_item}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="stock_item" class="form-control" id="stock" placeholder="Stock Item" value="{{$item->stock_item}}">
                                    </div>           
                                    <div class="modal-footer">
                                        <div class="form-group pull-right">
                                            <button type="submit" class="btn btn-primary">Update Item</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
            </div>
            <div class="modal fade" id="delete{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure want to delete this item ?
                </div>
                <div class="modal-footer">
                <form action="{{ route('item.destroy',$item['id']) }}" method="post">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="hidden" name="id" value="{{$item->id}}">
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