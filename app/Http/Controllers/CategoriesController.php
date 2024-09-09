<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        $all_categories = Categories::paginate(15);
        return view('admin.categories.index', compact('all_categories'));
    }
    public function create(){

    }

    public function store(Request $request){

    }
    public function show(Categories $category){
        $all_categories = Categories::find($category);
        return view('admin.categories.index', compact('all_categories'));
    }
}
