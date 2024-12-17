<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function show(String $id)
    {
        return Category::find($id);
    }
    function showAll()
    {
        return Category::all();
    }
    function store(Request $request)
    {
        $user = new Category();
        $user->name = $request->name;
        $user->save();
    }
    function update(Request $request, String $id)
    {
        $osztaly = Category::find($id);
        $osztaly->name = $request->name;
    }
    function destroy(String $id)
    {
        Category::find($id)->delete();
    }
}
