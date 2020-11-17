<?php

namespace App\Http\Controllers\Web;

use App\Models\gym;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;

class GymController extends Controller
{
    //


    public function index()
    {$gyms = Gym::latest()->paginate(5);
        return view('gyms.index', compact('gyms'));


    }


    public function create()
    {


        return view('gyms.create');
    }

//|image|mimes:png,jpg,jpeg//

    public function store(Request $request)
    {
        $params = $this->validate($request, [
        'nombre'     => 'required',
        'ubicacion'     => 'required',
        'telefono'     => 'sometimes',
        'detalles'   => 'sometimes'
        ]);

        //upload image
        //$image = $request->file('image');
        // $image->storeAs('public/blogs', $image->hashName());

          $gym = new Gym();
          $gym->fill($params);
          $gym->tenant_id = 1;
          $gym->save();


        //$gym = Gym::create([
           // 'image'     => $image->hashName(),
          //  'nombre'     => $request->name,
          //  'ubicacion'     => $request->ubicacion,
           // 'telefono'     => $request->telefono,
           // 'detalles'   => $request->detalles
       // ]);

        if($gym){
            //redirect dengan pesan sukses
            return redirect()->route('gyms.index')->with(['success' => 'tema creado correctamente']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('gyms.index')->with(['error' => 'error datos erroneos']);
        }
    }



}
