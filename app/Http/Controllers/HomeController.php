<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index() {
        return view('home', [
            "title"         => "Spanty | Creative Real Estate Agnecy",
            "properties"    => Property::show(5)
        ]);
    }

}
