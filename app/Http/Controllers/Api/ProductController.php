<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Feature;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //To get all product
    public function index(){
        $products=Product::all();
        return response()->json($products);

    }

    //To get all product to special feature
    public function getProductsByFeature(Request $request){
        $featureName = $request->input('feature');
        $feature = Feature::where('name', $featureName)->first();
        if (!$feature) {
            return response()->json(['message' => 'Feature not found'], 404);
        }
        $products = Product::where('feature_id', $feature->id)->get();
        return response()->json(['message'=>$featureName,'data'=>$products],200);

    }
}
