<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class ProductController extends Controller
{
     public function Adminauthcheck(){

       $admin_id = Session::get('admin_id');
         if ($admin_id) {
                return;
          }else{
               return Redirect::to('/admin')->send();
         }


}
 public function index(){
 $this-> Adminauthcheck();
 	return view('admin.add_product');
 }


public function  all_product(){

                $this-> Adminauthcheck();
               $all_product_info=DB::table('product')

                      ->join('tbl_category','product.category_id','=','tbl_category.category_id')
                       ->join('manufacture','product.manufacture_id','=','manufacture.manufacture_id')
                       ->select('product.*','tbl_category.category_name','manufacture.manufacture_name')
                      ->get();
               $manage_product=view('admin.all_product')
                          -> with('all_product_info',$all_product_info);

                return view('admin.admin_layout')
                           ->with('admin.all_product', $manage_product);



    	//return view('admin.all_category');
    }








public function  save_product(Request $request){
           
           $data=array();
           
            $data['product_name']=$request->product_name;
            $data['category_id']=$request->category_id;
            $data['manufacture_id']=$request->manufacture_id;
            $data['product_short_description']=$request->product_short_description;
            $data['product_long_description']=$request->product_long_description;
            $data['product_price']=$request->product_price;
            $data['product_size']=$request->product_size;
            $data['product_color']=$request->product_color;
            $data['publication_status']=$request->publication_status;


            $image=$request->file('product_image');
            if($image){
            	$image_name =str::random(20); 
            	$ext=strtolower($image->getClientOriginalExtension());
            	$image_full_name=$image_name.'.'.$ext;
            	$upload_path='image/';
            	$image_url=$upload_path.$image_full_name;
            	$success=$image->move($upload_path,$image_full_name);

                if($success){
                	$data['product_image']=$image_url;

                	DB::table('product')->insert($data);
             Session::put('message','Product added successfully');
             return Redirect::to('/add-product');
               
                    }

               }
               $data['product_image']='';

             DB::table('product')->insert($data);
             Session::put('message','product added successfully without image');
             return Redirect::to('/add-product');

    }
    public function unactive_product($product_id){

    DB::table('product')
         ->where('product_id',$product_id)
          ->update(['publication_status'=>0]);
            Session::put('message','product unactive successfully');
           return Redirect::to('/all-product');




}
public function active_product($product_id){

    DB::table('product')
         ->where('product_id',$product_id)
          ->update(['publication_status'=>1]);
            Session::put('message','product active successfully');
           return Redirect::to('/all-product');




}

public function edit_product($product_id){
 
 $this-> Adminauthcheck();

$product_info=DB::table('product')
   ->where('product_id',$product_id)
   ->first();





$product_info=view('admin.edit_product')
        -> with('product_info',$product_info);

       return view('admin.admin_layout')
                  ->with('admin.edit_product', $product_info);
}



public function delete_product($product_id){

DB::table('product')
         ->where('product_id',$product_id)
         ->delete();


  Session::get('message','product deleted successfully');

return Redirect::to('/all-product');
//Session::put('')


}

public function update_product(Request $request ,$product_id){

$data =array();
           
       $data['product_name']=$request->product_name;
            $data['category_id']=$request->category_id;
            $data['manufacture_id']=$request->manufacture_id;
            $data['product_short_description']=$request->product_short_description;
            $data['product_long_description']=$request->product_long_description;
            $data['product_price']=$request->product_price;
            $data['product_size']=$request->product_size;
            $data['product_color']=$request->product_color;
            $data['publication_status']=$request->publication_status;
              $image=$request->file('product_image');
            if($image){
            	$image_name =str::random(20); 
            	$ext=strtolower($image->getClientOriginalExtension());
            	$image_full_name=$image_name.'.'.$ext;
            	$upload_path='image/';
            	$image_url=$upload_path.$image_full_name;
            	$success=$image->move($upload_path,$image_full_name);

                if($success){
                	$data['product_image']=$image_url;

                	DB::table('product')->insert($data);
             Session::put('message','Product added successfully');
             return Redirect::to('/add-product');
               
                    }

               }
               $data['product_image']='';

             DB::table('product')->insert($data);
             Session::put('message','product added successfully without image');
             return Redirect::to('/add-product');


        DB::table('product')
         ->where('product_id',$product_id)
          ->update($data);

  Session::get('message','category update successfully');
  return Redirect::to('/all-product');

}


}
