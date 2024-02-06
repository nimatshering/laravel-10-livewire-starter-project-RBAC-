<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  /*------------------------------------------------------------------------
|   Show productApi
|   --------------------------------------------------------------------------*/
  public function productApi($id)
  {
    $product = Product::find($id);

    // if (is_null($product)) {
    //   return $this->sendError('Product not found.');
    // }
    

    return response()->json([
      "data" => $product
    ]);
  }
}
