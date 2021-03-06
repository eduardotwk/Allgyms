@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="author" content="Aldi Duzha">
    <meta name="description" content="Search houses and apartments for rent anywhere within the US. View floorplans, pricing, images and more. Find your perfect rental.">
    <meta name="keywords" content="bulma, rent, template, apartments, page, website, free, awesome">
    <link rel="canonical" href="https://aldi.github.io/bulma-rent-template/index.html"/>
    <title>AllGyms</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body>
    <h6>
          <div class="notification is-primary is-light">
            Los resultados encontrados
          </div>
     </h6>
    <div class="hero-body  p-b-30 ">
        <div class="container">


            <div class="field has-addons has-shadow-field">
                <table class="table is-bordered is-striped is-fullwidth">
                    <thead>
                    <tr class="is-selected ">
                        <th >Nombre</th>
                        <th >Ubicacion</th>
                        <th >Telefono</th>
                        <th >Detalles</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($gimnasios as $gims)
                        <tr class="text-center">
                            <td>{{ $gims->nombre }}</td>
                            <td>{{ $gims->ubicacion }}</td>
                            <td>{!! $gims->telefono !!}</td>
                            <td>{!! $gims->detalles !!}</td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</body>
@endsection
