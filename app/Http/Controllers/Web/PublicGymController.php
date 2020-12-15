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


    public function BuscadorGyms(Request $request)
    {
        if($request){
            $query = trim($request->get('buscador'));
            //dd($query);

            $gimnasios = Gym::where('nombre','LIKE','%'.$query.'%')->orderBy('id','asc')->get();

            //dd($gimnasios);

            return view('public.resultados',compact('gimnasios'));
        }
        else {empty($request);
            {
                echo 'No se han encontrado resultados para : '. $request;
            }
        }
    }

}
