<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class tableController extends Controller
{
    public function productView(){
        $product = Product::all();

        return view("table.product",[
            'product'=>$product,
        ]);
    }

    public function finalView(Request $request){

       $request->validate(
        [
            'product_title' => 'required',
            'price' => 'required',
            'product_type' => 'required',
        ]
       );
       $table = new Product();
       $table->product_title = $request->get('product_title');
       $table->price = $request->get('price');
       $table->product_type = $request->get('product_type');
       $table->save();

       return redirect()->back();
    }

    public function DeleteData($id){

       $data = Product::find($id);
     $data->delete();
     return redirect()->back();

    }

    public function EditView($id){
        $data = Product::find($id);
        return view('table.ProductEdit', [
            "edit" => $data
        ]);
    }

    public function TableUpdate(Request $request, $id){
        $request->validate(
            [
                'product_title' => 'required',
                'price' => 'required',
                'product_type' => 'required',
            ]);
            $product = Product::find($id);
            $product->product_title = $request->get('product_title');
            $product->price = $request->get('price');
            $product->product_type = $request->get('product_type');

            $product->save();
            return redirect()->route('productView');
    }


}



