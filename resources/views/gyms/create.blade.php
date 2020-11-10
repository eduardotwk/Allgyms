@extends('layouts.app')
@section('content')

    <section class="section">
            <div class="container">
            Publicar  Gimnasio
            <div>
                <form action="/action_page.php">
                    <div class="field">
                        <label class="label">Nombre Gym</label>
                        <div class="control">
                            <input class="input" type="text" name="nombre" placeholder="">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Descripcion</label>
                        <div class="control">
                            <textarea class="textarea" placeholder=""></textarea>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Direccion</label>
                        <div class="control">
                            <input class="input" type="text" name="direccion" placeholder="">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Mensualidad</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="$">
                        </div>
                    </div>

                    <div class="field">
                        <div class="control">
                            <label class="checkbox">
                                <input type="checkbox">
                                I agree to the <a href="#">terms and conditions</a>
                            </label>
                        </div>
                    </div>

                    <div class="field">
                        <div class="control">
                            <label class="radio">
                                <input type="radio" name="question">
                                Yes
                            </label>
                            <label class="radio">
                                <input type="radio" name="question">
                                No
                            </label>
                        </div>
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link">Publicar Gimnasio</button>
                        </div>
                        <div class="control">
                            <button class="button is-link is-light">Cancelar</button>
                        </div>
                    </div>


                </form>

            </div>
            </div>


    </section>


    <button >


    </button>

@endsection

