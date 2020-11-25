<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Gym;
use Illuminate\Http\Request;

class PublicGymController extends Controller
{
    public function index()
    {
        $gyms = Gym::latest()->paginate(5);
        return view('gyms.public.index', compact('gyms'));
    }

}
