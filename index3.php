<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Wishlist;
use DB;
use Auth;

class WishlistController extends Controller
{
<<<<<<< HEAD
    public function AddToWishlist($id) {
        $user_id = Auth::id();
        if(Auth::check()) {
=======
    public function AddToWishlist($id)
    {
        $user_id = $id;
        $user_id = Auth::id();
        if (Auth::check()) {
>>>>>>> 2f7c5181b82858f83bf8867805b0c0614e4f0fc3
            $check = Wishlist::where('user_id', $user_id)->where('product_id', $id)->first();
            if (!$check) {
                Wishlist::insert([
                    'user_id' => $user_id,
                    'product_id' => $id
                ]);

<<<<<<< HEAD
               return response()->json([
                    'success' => 'Product Added on Wishlist'
               ]);

=======
                return response()->json([
                    'success' => 'Product Added on Wishlist'
                ]);
>>>>>>> 2f7c5181b82858f83bf8867805b0c0614e4f0fc3
            } else {
                return response()->json([
                    'error' => 'Already Added on Wishlist'
                ]);
            }
<<<<<<< HEAD

=======
>>>>>>> 2f7c5181b82858f83bf8867805b0c0614e4f0fc3
        } else {
            return response()->json([
                'error' => 'At First Login Your Account'
            ]);
        }
    }

<<<<<<< HEAD
    public function wishlist() {
=======
    public function wishlist()
    {
>>>>>>> 2f7c5181b82858f83bf8867805b0c0614e4f0fc3
        $userId = Auth::id();
        $wishlists = Wishlist::where('user_id', $userId)->get();

        return view('frontend.wishlist.view_wishlist', compact('wishlists'));
    }
}
