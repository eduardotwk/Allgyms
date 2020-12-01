@extends('layouts.app')

@section('content')


     <section class="section">
         <div class="container">
             <h1 class="title">Publicar gimnasio</h1>
             <div>
                 <form method="POST" action="{{ route('gyms.store') }}">
                     @csrf

                     <div class="field ">
                         <label id= "name" name="name" class="label">Nombre Gimnasio</label>

                             <div class="control">
                                 <input class="input is-primary" id= "nombre" name="nombre" type="text" placeholder="">
                             </div>
                     </div>


                     <br class="field">

                     <div class="field">
                         <label class="label">Telefono</label>
                         <div class="control">
                             <input class="input is-primary" id= "telefono" name="telefono" type="text" placeholder="">
                         </div>
                     </div>

                     <div class="field">
                         <label class="label">Ubicacion</label>
                         <div class="control">
                             <input class="input is-primary" id= "ubicacion" name="ubicacion" type="text" placeholder="">
                         </div>
                     </div>

                         <div class="field">
                             <label class="label">Detalles</label>
                             <div class="control">
                                 <input class="input is-primary" id= "detalles" name="detalles" type="textarea" placeholder="">
                             </div>
                         </div>

                     <label class="label">Comuna</label>
                     <div class="select option">

                             <select name="comuna_id">

                                 @foreach($comunas as $comuna)

                                     <option value={{ $comuna->id  }}> {{ $comuna->nombre }} </option>
                                 @endforeach

                             </select>
                         </div>
                         <br>
                     <br>
                     <br>

                     <div class="field is-grouped">
                         <div class="control">
                             <button type="submit" class="button is-primary is-outlined">Publicar gimnasio</button>
                         </div>

                         <div class="control">
                             <button class="button is-primary is-outlined">Volver</button>
                         </div>



                     </div></div>
                 </form>
             </div>
         </div>
     </section>
    @endsection

