<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;
class PositionController extends Controller
{
         //showing all data from table
         public function index(){
            $position = Position::all();
            return view('pages/position', compact('position'));
        }
        //adding new data to the table
        public function store(request $request){
            $poss = new Position;
            $poss->name_position = $request->name_position;
            $poss->save();
    
            return redirect('position')->with('message','success adding data');
        }
        //updating data from the table
        public function update(request $request,$id){
            $poss = Position::find($id);
            $poss->name_position = $request->name_position;
            $poss->save();

            return redirect('position')->with('message','success updating data');
        }
        //deleting data from the database
        public function destroy(request $request, $id){
            $poss = Position::find($id);
            $poss->delete();

            return redirect('position')->with('message','success deleting data');
        }
}
