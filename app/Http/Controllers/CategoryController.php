<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{


    public function __construct(){

        $this->middleware("auth:api");
    }
   
    public function index()
    {
        return Category::all();
    }

    
   

    
    public function store(Request $request)
    {   

        $validator =  Validator::make($request->all(),[

            'cat_title' =>'required',
        ]);

        if($validator->fails()){

            return "insert something went wrong";
        }

        $validate = $validator->validated();
        Category::create($validated);
        return "insert successfully";
    }

    
    public function show(Category $category)
    {
        return response()->json($category,200);
    }

   
  

    
    public function update(Request $request, Category $category)
    {
        //
    }

    
    public function destroy(Category $category)
    {
        //
    }
}
