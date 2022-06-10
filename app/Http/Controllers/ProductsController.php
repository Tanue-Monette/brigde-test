<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    // public function index()
    // {
    //     return view('products.index')->with('products', Product::orderBy('id', 'ASC')
    //     ->get())->paginate(10);
    // }

    public function index()
    {
        $products = Product::all()->where('user_id', Auth::id());
        // dd($products);
        return view('products.index',['products'=>$products]);
        // return view('products.index',compact('products'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = new Product();
        if($request->file('photo')){
            $file= $request->file('photo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('public/assets/'). $filename);
            $data['photo']= $filename;
        }
        
        $data->name = $request->name;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->user_id = Auth::id();
        // dd($data);
        $data->save();

        return view('products.create');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        // dd($product);
        return view('products.edit', compact('product'));
    }


    public function update(Request $request )
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = new Product();
        dd($data);
        if($request->file('photo')){
            $file= $request->file('photo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Images'), $filename);
            $data['photo']= $filename;
        }
        
        $data->name = $request->name;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->user_id = Auth::id();
        
        $data->update();

        return view('/')->with('success', 'product updateed successfuly');
    }

    public function destroy($id)
    {
        $course = Product::find($id);
        $course->destroy($id);
        return  redirect()->route('products-index')->with('danger', 'product deleted successfully!!!'); 
    }
}
