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


    public function store(Request $request)
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

    public function index()
    {
        $categories = Category::paginate(9);
        return view('admin.category.index',compact('categories'));
    }

    public function show($slug)
    {
        $category = Category::where('category_slug',$slug)->first();
        return view('admin.category.show',compact('category'));
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('Admin.All.Categories')->with('success','Category deleted successfully!');
    }

    public function edit($slug)
    {
        $category = Category::where('category_slug',$slug)->first();
        return view('admin.category.edit',compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        if ($request->category_img) {
            $image = $request['category_img'];
            $imageName = rand(111111, 999999) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $category->category_img = $imageName;
        }

        $category->category_name = $request->category_name;
        $category->category_slug = str::slug($request->category_slug);
        $category->category_des = $request->category_des;
        $category->save();
        return redirect()->back()->with('success','Category saved successfully');
    }

}
