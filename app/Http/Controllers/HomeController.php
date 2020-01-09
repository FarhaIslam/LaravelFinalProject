<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
   public function index()
    {

    	
               $all_publish_product=DB::table('product')

                      ->join('tbl_category','product.category_id','=','tbl_category.category_id')
                       ->join('manufacture','product.manufacture_id','=','manufacture.manufacture_id')
                       ->select('product.*','tbl_category.category_name','manufacture.manufacture_name')
                       ->limit(9)
                       ->where('product.publication_status',1)
                      ->get();
               $manage_publish_product=view('pages.home_content')
                          -> with('all_publish_product', $all_publish_product);

                return view('layout')
                           ->with('pages.home_content', $manage_publish_product);

    	//return view('pages.home_content');
    }
    public function product_by_category($category_id){

                
                $category_by_product=DB::table('product')

                      ->join('tbl_category','product.category_id','=','tbl_category.category_id')
                      ->select('product.*','tbl_category.category_name')
                       ->where('tbl_category.category_id',$category_id)
                      ->limit(18)
                      ->get();
               $manage_category_by_product=view('pages.category_by_products')
                          -> with('category_by_product', $category_by_product);

                return view('layout')
                           ->with('pages.category_by_products', $manage_category_by_product);

    }
     public function product_by_manufacture($manufacture_id){
                      
                      $product_by_manufacture=DB::table('product')

                      ->join('tbl_category','product.category_id','=','tbl_category.category_id')
                       ->join('manufacture','product.manufacture_id','=','manufacture.manufacture_id')
                       ->select('product.*','tbl_category.category_name','manufacture.manufacture_name')
                       ->where('manufacture.manufacture_id',$manufacture_id)
                       ->where('product.publication_status',1)
                        ->limit(9)
                      ->get();
                             $manage_publish_product_by_manufacture=view('pages.manufacture_by_products')
                          -> with('product_by_manufacture',$product_by_manufacture);

                return view('layout')
                           ->with('pages.manufacture_by_products',$manage_publish_product_by_manufacture);

              
    }
      public function product_details_by_id($product_id){

                
                $product_by_details=DB::table('product')
                       ->join('tbl_category','product.category_id','=','tbl_category.category_id')
                       ->join('manufacture','product.manufacture_id','=','manufacture.manufacture_id')
                       ->select('product.*','tbl_category.category_name','manufacture.manufacture_name')
                       ->where('product.product_id',$product_id)
                       ->where('product.publication_status',1)
                       ->first();
               $manage_product_by_details=view('pages.product_details')
                          -> with('product_by_details',$product_by_details);

                return view('layout')
                           ->with('pages.product_details',$manage_product_by_details);

    }
}
