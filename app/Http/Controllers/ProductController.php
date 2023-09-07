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

    public function create(ProductRequest $request) {
        $this->productServices->setModel(Product::class);
        return response(['return' => true, 'message' => 'success', 'data' => $this->productServices->insert($request->all())]);
    }

    public function get(Request $request) {
    return response(['return' => true, 'message' => 'success','data' => Product::get()], 200);
    }
    public function update(Request $request, int $id) {

    }
    public function delete(Request $request, int $id) {

    }
}
