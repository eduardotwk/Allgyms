<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GymController extends Controller
{
    //


    public function index()
    {
        return view('gyms.index');

    }


    public function create()
    {
        return view('gyms.create');
    }


    public function store()
    {
        return view('gyms.create');
    }


}
