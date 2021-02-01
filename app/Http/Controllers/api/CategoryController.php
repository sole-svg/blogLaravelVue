<?php

namespace App\Http\Controllers\api;

use App\category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends ApiResponseController
{
    public function all(){
        return $this->successResponse(category::all());
    }

    public function index(){
        return $this->successResponse(category::paginate(10));
    }
}
