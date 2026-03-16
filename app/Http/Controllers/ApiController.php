<?php

namespace App\Http\Controllers;

use App\Actions\StoreProductAction;
use App\Http\Requests\StoreProductRequest;

class ApiController extends Controller
{
    public function storeProduct(StoreProductRequest $request, StoreProductAction $action)
    {
        $product = $action->execute($request->toData());
        return response()->json([
            'message' => 'Product created successfully'
        ], 201);
    }

}
