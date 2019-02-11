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
                    <th scope="col">Item</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Description</th>
                    <th scope="col">Edit</th>
                  </tr>
                </thead>
                <tbody>
               
                @foreach($details as $index => $detail )
  
                    <tr>
                        <td scope="col">{{$index +1}}</td>
                        <td scope="col">{{$detail->name_item}}</td>
                        <td scope="col">{{$detail->qty_item}}</td>                       
                        <td scope="col">{{$detail->description}}</td>
                        <td scope="col"><a data-toggle="modal" data-target="#edit{{$detail->id}}" class="btn btn-danger">Edit</td>
                    </tr> 
                    @endforeach

                </tbody>
              </table>
        </div>
      </div>
@stop