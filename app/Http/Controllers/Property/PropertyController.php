<?php

namespace App\Http\Controllers\Property;

use App\Http\Controllers\Controller;
use App\Models\ProductProperty;

class PropertyController extends Controller
{
    //вывод всех опций по запросу /properties
    public function index()
    {
        return ProductProperty::all();

    }
}
