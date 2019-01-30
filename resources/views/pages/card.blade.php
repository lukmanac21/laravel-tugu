@extends('layouts.default')
@section('content')
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">Card</h3>
              <br>
              <button class="btn btn-primary" data-toggle="modal" data-target="#addItem">Add New Card</button>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                  <th scope="col">No</th>
                    <th scope="col">Date</th>
                    <th scope="col">By</th>
                    <th scope="col">Item</th>
                    <th scope="col">Edit</th>
                  </tr>
                </thead>
                <tbody>
               
                @foreach($cards as $index => $card )
  
                    <tr>
                        <td scope="col">{{$index +1}}</td>
                        <td scope="col">{{$card->date}}</td>
                        <td scope="col">{{$card->user->name}}</td>                       
                        <td scope="col"><a data-toggle="modal" data-target="#detail{{$card->id}}" class="btn btn-warning">Detail</td>
                        <td scope="col"><a data-toggle="modal" data-target="#edit{{$card->id}}" class="btn btn-danger">Edit</td>
                    </tr> 
                    @endforeach

                </tbody>
              </table>
              @foreach($details as $index => $detail)              
              <div class="modal fade" id="detail{{$detail->id}}">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Detail</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                            <div class="modal-body">
                            <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                              <thead class="thead-light">
                                <tr>
                                <th scope="col">No</th>
                                  <th scope="col">Item</th>
                                  <th scope="col">Quantity</th>
                                  <th scope="col">Desc</th>
                                </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td scope="col">{{$index +1}}</td>
                                      <td scope="col">{{$detail->name_item}}</td>
                                      <td scope="col">{{$detail->qty_item}}</td>
                                      <td scope="col">{{$detail->description}}</td>                       
                                  </tr> 

                              </tbody>
                            </table>
                            </div>
                        </div>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
      </div>
@stop