<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product_dashboard(){

        $products = DB::table('products')->get();
        return view('pages.product_dashboard', compact('products'));
    }

    public function create(){
        
        return view('pages.product_create');
    }

    public function store(Request $request){

      //  dd($request)->all();
       
        // $this->validate($request,[
        //     'name' => 'require|string|max:50',
        //     'quantity' => 'require|int|max:25',
        //     'price' => 'require|int|max:25'
        // ]);


        DB::table('products')->insert([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);



          return redirect()->back();
        //   ->with('success', 'product created successfully');
    }


    public function edit(Request $request, $id){

        $product_data = DB::table('products')
        ->where('id', $id)
        ->get();

        if($request->submit == "Submit"){

            DB::table('products')
            ->where('id', $id)
            ->update([
                'name' => $request->name,
                'quantity' => $request->quantity,
                'price' => $request->price,
            ]);

        }   
        
        
        return view('pages.product_edit', compact('product_data'));
        
    }

    public function destroy(Request $request, $id){

        // $product = DB::table('products')->where('id', $id)->first();
        // return redirect()->back();


        DB::table('products')
            ->where('id', $id)
            ->delete();

        return redirect()->back();

        // $product = Product::find($id);
        // $product->delete();



    }

}
