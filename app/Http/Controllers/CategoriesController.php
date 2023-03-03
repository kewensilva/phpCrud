<?php

namespace App\Http\Controllers;

use App\Models\Category as Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function __construct()
{

}
    public function index()
    {
        $cat = Category::all();
        return($cat);
    }

    public function store(Request $request)
    {

        $data = $request->all();

        $category = Category::create($data);
        return($category);
    }
    public function update(Request $request, $id){
        $category = Category::find($id);
        $category-> name; 
        $category->description;
        $dataUp = $request->all();
        $category->update($dataUp);
        return($category);

    }

    public function delete($id){
        $category= Category::find($id);
        $category->delete();
    }
}