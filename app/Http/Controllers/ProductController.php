<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Restaurent;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('admin')){
            $products = Product::join('restaurents','restaurents.id','=','products.restaurant_id')
            ->select('products.*','restaurents.name AS restaurant_name')
            ->get();   
            return view('admin.product')->with('products',$products);
        }
        if(Auth::user()->hasRole('seller')){
            $products = Product::join('restaurents','restaurents.id','=','products.restaurant_id')
            ->where('products.restaurant_id','=',Auth::user()->restaurant_id)
            ->select('products.*','restaurents.name AS restaurant_name')
            ->get();   
            return view('seller.product')->with('products',$products);
        }
        abort(404);
    
    }
    public function create(Request $request)
    {
        if(Auth::user()->hasRole('admin')){
            $restaurants = Restaurent::all();
            $category = Category::all();
            return view('admin.add_product')->with('restaurants',$restaurants)->with('categories',$category);
        }else
            abort(404);
    
    }
    public function store(Request $request)
    {
        if(Auth::user()->hasRole('admin')){

            if($request->restaurant_id == 0){
                return redirect()->back()->with('warn', 'Restaurant is not selected...!'); 
            }else{
                $product = new Product();
                $product->category_id = $request->input('category_id');
                $product->name = $request->input('name');
                $product->restaurant_id = $request->input('restaurant_id');
                
                $image=$request->file('image');
                $image_name=hexdec(uniqid());
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='img/products/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);

                $product->image = $image_url;
                $product->ratings = $request->input('ratings');
                $product->price = $request->input('price');
                if($request->offer ==""){
                    $product->offer = 0;
                }else{
                    $product->offer = $request->input('offer');
                }
                $product->disable = false;
                $product->save();
              
                return redirect()->route('products')->with('message', 'Product is added successfully...!');
            }
            return $request;
        }else
            abort(404);
    
    }

    public function edit($id)
    {
        if(Auth::user()->hasRole('admin')){
            $product = Product::find($id);
            return view('admin.edit_product')->with('product',$product);
        }else
            abort(404);
    
    }
    public function update(Request $request)
    {
        if(Auth::user()->hasRole('admin')){
            Product::where('id', $request->id)
            ->update([
                'name' => $request->name,
                'price' =>$request->price,
                'offer' =>$request->offer,
                'ratings' =>$request->ratings
             ]);
             return redirect()->route('products')->with('message', 'Product Updated...!!!');

        }else
            abort(404);
    
    }
    public function delete($id)
    {
        if(Auth::user()->hasRole('admin')){
            $product = Product::find($id);
            $product->delete();
            return redirect()->back()->with('message', 'product deleted...!'); 
        }else
            abort(404);
    
    }
    public function disable_product($id)
    {
        if(Auth::user()->hasRole('seller')){
            $status =  Product::where('id', $id)->first();
            if($status->disable){
                Product::where('id', $id)
                ->update([
                    'disable' => false,
                ]);
            }else{
                Product::where('id', $id)
                ->update([
                    'disable' => true,
                ]);
            }
            return redirect()->back();
        }else
            abort(404);
    
    }
}
