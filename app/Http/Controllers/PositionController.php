<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;
class PositionController extends Controller
{
         //showing all data from table
         public function index(){
            return Position::all();
        }
        //adding new data to the table
        public function create(request $request){
            $poss = new Position;
            $poss->name_position = $request->name_position;
            $poss->save();
    
            return "Success adding new data !";
        }
        //updating data from the table
        public function update(request $request,$id){
            $name_position = $request->name_position;

            $poss = Position::find($id);
            $poss->name_position = $name_position;
            $poss->save();

            return "Success updating data !";
        }
        //deleting data from the database
        public function delete(request $request, $id){
            $poss = Position::find($id);
            $poss->delete();

            return "Data has been deleted !";
        }
}
