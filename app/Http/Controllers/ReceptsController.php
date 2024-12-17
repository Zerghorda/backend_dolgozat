<?php

namespace App\Http\Controllers;

use App\Models\Recepts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class ReceptsController extends Controller
{
    function show(String $id)
    {
        return Recepts::find($id);
    }
    function showAll()
    {
        return Recepts::all();
    }
    function store(Request $request)
    {
        $user = new Recepts();
        $user->name = $request->name;
        $user->category_id = $request->category_id;
        $user->img_route = $request->img_route;
        $user->description = $request->description;
        $user->save();
    }
    function update(Request $request, String $id)
    {
        $osztaly = Recepts::find($id);
        $osztaly->name = $request->name;
        $osztaly->category_id = $request->category_id;
        $osztaly->img_route = $request->img_route;
        $osztaly->description = $request->description;
    }
    function destroy(String $id)
    {
        Recepts::find($id)->delete();
    }
}
