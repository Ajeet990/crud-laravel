<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MyController extends Controller
{
    //
    function insert(Request $req)
    {
        $u = new User();
        $u->name = $req->name;
        $u->pass = $req->pass;
        $u->save();
        $data = User::all();
        return view('list',['members'=>$data]);
    }
    function getData()
    {
        // echo 'hello from controller';
        $data = User::all();
        return view('list',['members'=>$data]);
        

    }
    function delete($id){
        $data = User::find($id);
        $data->delete($id);
       
        return redirect('list?del=true');

    }
    function showData($id){
        $data = User::find($id);
        return view('edit',['data'=>$data]);
    }
    function update(Request $req){
        // echo "upadate function";
        $data = User::find($req->id);
        $data->name = $req->name;
        $data->pass = $req->pass;
        $data->save();
        return redirect('list');
    }
}
