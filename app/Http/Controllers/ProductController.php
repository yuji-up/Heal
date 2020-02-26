<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $product = Product::all();
        // return view('index',['product'=>$product]);
        // $product = DB::table('products')->paginate(2);
        // return view('index', ['products' => $product]);
        $products = Product::latest()->paginate(2);
        return view('index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        //input method is used to get the value of input with its
        //name specified
        $request->validate ([
            'name' => 'required|string|max:20',
            'gender' => 'required',
            'file'  => 'required|image|mimes:doc,docx,pdf,txt,jpg,jpeg,png,gif|max:2048',
        ]);

        $product->name = $request->input('name');
        $product->tittle = $request->input('tittle');
        $product->gender = $request->input('gender');
        $product->description = $request->input('description');
        $product->country = $request->input('country');
        $product->city = $request->input('city');
        $product->address = $request->input('address');
        
        // $file = Input::file('file');
        // $img = Image::make($file);
        // Response::make($img->encode('jpg'));
        // $request->file = $img;
        // $product->save();
        // $imageName = time().'.'.request()->image->getClientOriginalExtension();
        // request()->image->move(public_path('file'), $imageName);
        if($request->hasFile('file'))
        {
            $file = $request->file('file');
            $extension=$file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('assets/img/',$filename);
            $product->file=$filename;
        }else{
            return $request;
            $product->file='';
        }
        $product->save();
        //insert data to the database
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('show',['product'=> $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('edit',['product'=> $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $product = Product::find($request->input('id'));
        $product->name = $request->input('name');
        $product->tittle = $request->input('tittle');
        $product->gender = $request->input('gender');
        $product->description = $request->input('description');
        $product->country = $request->input('country');
        $product->city = $request->input('city');
        $product->address = $request->input('address');
        $product->file = $request->input('file');
        $product->save(); //persist the data
        return redirect()->route('index')->with('info','Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        //delete
        $product->delete();
        return redirect()->route('index');
    }
}
