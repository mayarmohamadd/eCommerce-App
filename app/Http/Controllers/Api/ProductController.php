<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Feature;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    // Get product details by name
    public function getProductByName(Request $request){
        $productName = $request->input('name');
        $product = Product::where('name', $productName)->first();
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);}
        return response()->json($product);
    }

    // Add product to cart
    public function addToCart(Request $request){
        $productName = $request->input('name');
        $quantity = $request->input('quantity', 1);
        $product = Product::where('name', $productName)->first();
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);}
        $cart = Cart::create([
            'user_id' => Auth::id(),
            'product_id' => $product->id,
            'quantity' => $quantity,]);
        return response()->json(['message' => 'Product added to cart successfully', 'cart' => $cart]);
    }

    public function checkout(){
        $cartItems = Cart::with('product')->where('user_id', Auth::id())->get();
        if ($cartItems->isEmpty()) {
            return response()->json(['message' => 'Your cart is empty'], 404);}
        $total = 0;
        $cartDetails = [];
        foreach ($cartItems as $item) {
            $cartDetails[] = [
                'product_name' => $item->product->name,
                'product_description' => $item->product->description,
                'price' => $item->product->price,
                'quantity' => $item->quantity,
                'total_price' => $item->product->price * $item->quantity,
                'image' => $item->product->image,];
            $total += $item->product->price * $item->quantity;}
        return response()->json([
            'cart_items' => $cartDetails,
            'total' => $total,]);
    }
}
