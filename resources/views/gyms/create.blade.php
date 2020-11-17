<!DOCTYPE html>

<div class="field">
    <div class="control">
        <label class="label">Detalles</label>
        <textarea class="textarea is-primary" placeholder=""></textarea>
    </div>
</div>
<html>
     <head>
         <meta charset="utf-8" />
         <meta http-equiv="X-UA-Compatible" content="IE=edge" />
         <meta name="viewport" content="width=device-width, initial-scale=1.0" />
         <meta name="author" content="Aldi Duzha" />
         <meta name="description" content="Free Bulma Login Template, part of Awesome Bulma Templates" />
         <meta name="keywords" content="bulma, login, page, website, template, free, awesome" />
         <link rel="canonical" href="https://aldi.github.io/bulma-login-template/" />
         <title>AllGyms</title>
         <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet" />
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css" />
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-social@1/bin/bulma-social.min.css" />
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.0/css/all.min.css" />
         <link rel="stylesheet" href="css/styles.css" />
     </head>

     <body>
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


                     <div class="field">

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

                     <div class="file">
                         <div>
                          <label class="control">
                             <input class="file-input" type="file" name="resume">
                             <span class="file-cta"><span class="file-icon">
                             <i class="fas fa-upload"></i></span>
                             <span class="control">Subir fotos…</span></span>
                          </label>
                         </div>
                     </div>

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
     </body>

