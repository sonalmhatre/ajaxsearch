<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pujavidhi;
use App\Models\Category;
class MainController extends Controller
{
    public function index(Request $request){
        $viewdata['data'] = Pujavidhi::with('categories')->orderby('id','asc')->paginate(10);
        $viewdata['categories'] = Category::with('items')->get();
        return view('pujavidhi',$viewdata);
    }
    public function categoryvidhi(Request $request,$id){
       
        $data = Pujavidhi::where('category',$id)->get();
        return Response::json($data);
    }
    public function search(Request $request)
    {
        if($request->ajax()) {
            $output = '';
            $products = Pujavidhi::with('categories')->where('title', 'LIKE', '%'.$request->search.'%')
                            ->orWhere('category', 'LIKE', '%'.$request->search.'%')
                            ->orWhere('price', 'LIKE', '%'.$request->search.'%')
                            ->get();
                           
                if($products) {
                    foreach($products as $product) {
                        $output .=
                        '<div class="col-md-3">
                    <div class="product-card">
                        <div class="product-card-img">
                            
                            <img src="uploads/'.$product->image.'"  alt="Laptop">
                        </div>
                        <div class="product-card-body">
                           
                            <h5 class="product-name">
                               <a href="">
                               '.$product->title.'
                               </a>
                            </h5>
                            <div>
                                <span class="selling-price">'.$product->price.'</span>
                                
                            </div>
                            <div class="mt-2">
                                <a href="" class="btn btn1">'.$product->categories->category_name.'</a>
                               
                            </div>
                        </div>
                    </div>
                </div>';

                }

                return response()->json($output);

            }

        }
        
    }

}
