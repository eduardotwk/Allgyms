@extends('layouts.app')
@section('content')

    <section class="section">
        <div class="container">
            Crear Gimnasio
            <div>
                <form action="/action_page.php">
                    <div class="field">
                        <label class="label">Name</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Text input">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Username</label>
                        <div class="control has-icons-left has-icons-right">
                            <input class="input is-success" type="text" placeholder="Text input" value="bulma">
                            <span class="icon is-small is-left">
                            <i class="fas fa-user"></i></span>
                            <span class="icon is-small is-right">
      <i class="fas fa-check"></i>
    </span>
                        </div>
                        <p class="help is-success">This username is available</p>
                    </div>

                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control has-icons-left has-icons-right">
                            <input class="input is-danger" type="email" placeholder="Email input" value="hello@">
                            <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
                            <span class="icon is-small is-right">
      <i class="fas fa-exclamation-triangle"></i>
    </span>
                        </div>
                    <input type="submit" value="Submit"  class="button is-primary">
                </form>

            </div>


        </div>


    </section>


    <button >


    </button>

@endsection

