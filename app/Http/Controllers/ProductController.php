<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Http\Controllers\Controller;
use App\Services\ProductServices;
use Illuminate\Validation\Validator;

class ProductController extends Controller
{
    private ProductServices $productServices;

    public function __contruct() {
        $this->productServices = new ProductServices();
    }

    public function create(ProductRequest $request)
    {
        if($this->productServices->insert($request->all()))
        {
            return response(['return' => false, 'message' => 'has a problem to insert this product'], 400);
        }

        return response(['return' => true, 'message' => 'success'], 200);
    }

    public function get(Request $request)
    {
    return response(['return' => true, 'message' => 'success','data' => $this->productServices->get()], 200);
    }

    public function update(Request $request, int $id)
    {
        if($this->productServices->update($request->all(), ['id' => $id]))
        {
            return response(['return' => false, 'message' => 'has a problem to update this product'], 400);
        }

        return response(['return' => true, 'message' => 'success'], 200);
    }

    public function delete(Request $request, int $id)
    {
        if($this->productServices->delete($id))
        {
            return response(['return' => false, 'message' => 'has a problem to delete this product'], 400);
        }

        return response(['return' => true, 'message' => 'success'], 200);
    }
}
