<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index() {

        $heroBanner = [
            "mainheading"   => "Creative Real Estate Agency",
            "description"   => "Spanty is an international estate company that offers services like propery appraisal as well as the sale, purchase, and investment of real estate.",
            "service"       => [
                [
                    "icon"  => "eva:pricetags-outline",
                    "text"  => "The price we offer accordance with the quality we provide"
                ],
                [
                    "icon"  => "ph:gift",
                    "text"  => "Official legality in the relevant government"
                ],
            ]
        ];
        
        $mSearchForm = [
            [
                "icon"  => "mingcute:location-2-line",
                "title" => "Location",
                "value" => "California, US"
            ],
            [
                "icon"  => "mingcute:currency-dollar-line",
                "title" => "Price",
                "value" => "$1500-$2500"
            ],
            [
                "icon"  => "bx:layer",
                "title" => "Type of Property",
                "value" => "Apartment"
            ],
        ];

        $partnerListData = ['homey', 'border', 'product', 'luminous', 'umbrella'];

        $statsData = [
            [
                "top"   => "9",
                "text"  => "Years experience in real estate"
            ],
            [
                "top"   => "$23K",
                "text"  => "Total Net Profit Every Month"
            ],
            [
                "top"   => "17",
                "text"  => "Every month a new happy customer"
            ],
            [
                "top"   => "$4K-7K",
                "text"  => "Approximate Profit In 20 Business Days"
            ]
        ];

        return view('home', [
            "title"             => "Spanty | Creative Real Estate Agency",
            "heroBanner"        => $heroBanner,
            "mSearchForm"       => $mSearchForm,
            "partnerListData"   => $partnerListData,
            "statsData"         => $statsData,
            "properties"        => Property::show(5)
        ]);
    }
}
