<?php

namespace App\Http\Controllers\Web;

use App\Models\Comuna;
use App\Models\gym;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;

class GymController extends BaseWebController
{
    //

    public function index()
    {
        $currentTenant = DB::table(‘user_preferences’)->where(‘user_id’, auth()->user()->id)->first();

        $gyms = Gym::where(‘tenant_id’, $currentTenant->current_tenant)>orderby()->get();
        return view('gyms.index', compact('gyms'));
    }


    public function mygyms()
    {
        $currentTenant = DB::table('user_preferences')->where('user_id', auth()->user()->id)->first();

        $gyms = Gym::where('tenant_id', $currentTenant->current_tenant)->Orderby('nombre')->get();

        return view('gyms.mygyms', compact('gyms'));
    }

    public function create()
    {
        $comunas = Comuna::query()->get();

        return view('gyms.create')->with(['comunas' => $comunas]);
    }

    public function BuscadorGyms(Request $request)
    {
        if($request){
            $query = trim($request->get('buscador'));
            //dd($query);

            $gimnasios = Gym::where('nombre','LIKE','%'.$query.'%')->orderBy('id','asc')->get();

            //dd($gimnasios);

            return view('gyms.resultados',compact('gimnasios'));
        }
        else {empty($request);
            {
                echo 'No se han encontrado resultados para : '. $request;
            }
        }
    }



    public function store(Request $request)
    {
        //ddd($request->all());
        $params = $this->validate($request, [
        'nombre'     => 'required',
        'ubicacion'     => 'required',
        'comuna_id'     => 'required',
        'telefono'     => 'sometimes',
        'detalles'   => 'sometimes'
        ]);


          $gym = new Gym();
          $gym->fill($params);
          $gym->tenant_id = $this->currentTenant()->id;


        $gym->save();


        //$gym = Gym::create([
           // 'image'     => $image->hashName(),
          //  'nombre'     => $request->name,
          //  'ubicacion'     => $request->ubicacion,
           // 'telefono'     => $request->telefono,
           // 'detalles'   => $request->detalles
       // ]);

        if($gym->save()){
            //redirect dengan pesan sukses
            return redirect()->route('gyms.mygyms')->with(['success' => 'tema creado correctamente']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('gyms.create')->with(['error' => 'error datos erroneos']);
        }
    }






}
