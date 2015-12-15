<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {
        $people =[];
        $people = [
            'Cayla', 'Caleb', 'Zach'
        ];

        return view('pages.about', compact('people'));
    }
    public function home()
    {
        $first = 'Cayla';
        $middle = 'Elizabeth';
        $last = 'Schnider';

        return view('pages.home', compact('first', 'middle', 'last'));
    }
    public function contact()
    {
        return view('pages.contact');
    }
    //
}
