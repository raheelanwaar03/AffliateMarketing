<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function add()
    {
        return view('admin.category.add');
    }


    public function stores(Request $request)
    {
        $validated = $request->validate([
            'category_name' => 'required',
            'category_slug' => 'required',
            'category_des' => 'required',
            'category_img' => 'required',
        ]);


        $image = $validated['category_img'];
        $imageName = rand(111111, 999999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        $category = new Category();
        $category->category_name = $validated['category_name'];
        $category->category_slug = str::slug($validated['category_slug']);
        $category->category_des = $validated['category_des'];
        $category->category_img = $imageName;
        $category->save();
        return redirect()->back()->with('success','Category saved successfully');
    }



}
