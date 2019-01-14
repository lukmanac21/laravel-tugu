<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roles;
class RolesController extends Controller
{
    //showing all database from table
    public function index(){
        return Roles::all();
    }
    //insert new data to the table
    public function create(request $request){
        $roles = new Roles;
        $roles->name_role = $request->name_role;
        $roles->save();

        return "Success adding data !";
    }
    //updating data from the table
    public function update(request $request, $id){
        $name_role = $request->name_role;

        $roles = Roles::find($id);
        $roles->name_role = $name_role;
        $roles->save();

        return "Success updating data !";
    }
    //deleting data from database
    public function delete(request $request,$id){

        $roles = Roles::find($id);
        $roles->delete();

        return "Data has been deteled !";
    }

}
