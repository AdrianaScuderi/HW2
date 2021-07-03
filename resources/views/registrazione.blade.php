@extends('layouts.basesito')

<!-- Ricordati del titolo -->

@section('script')
<link rel='stylesheet' href="{{ asset('css/registrazione.css') }}"> 
<script src="{{ asset('javascript/registrazione.js') }}" defer="true"></script> 
@endsection


@section('content')
<main>
   <section class="main_left">
        <h1>Registrati</h1>
        <form name='signup' method='post' enctype="multipart/form-data" autocomplete="off">
        @csrf
           <div class="name">
               <div><label for='name'>Nome</label></div>
               <!-- Se il submit non va a buon fine, il server reindirizza su questa stessa pagina, quindi va ricaricata con 
                i valori precedentemente inseriti -->
                <div> <input type='text' name='name' > </div>
            </div>
            <div class="surname">
                <div><label for='surname'>Cognome</label></div>
                <div><input type='text' name='surname' ></div>
            </div>
            <div class="email"> 
                <div><label for='email'>Email</label></div>
                <div><input type='text' name='email'></div>
                <span> </span> 
            </div> 
            <div class="password">
                <div><label for='password'>Password</label></div>
                <div><input type='password' name='password'></div>
                <span> </span>
            </div>
            <div class="confirm_password">
                <div><label for='confirm_password'>Conferma Password</label></div>
                <div><input type='password' name='confirm_password'></div>
                <span> </span>
            </div>
            <div class="allow"> 
                <div><input type='checkbox' name='allow' value="1" ></div>
                <div><label for='allow'>Acconsento al trattamento dei dati personali</label></div>
            </div>
            <div class="submit">
                <input id='submit' type='submit' value="Registrati" disabled>
            </div>
        </form>
        <div class="signup">Hai un account? <a href="{{ route('login') }}">Accedi</a>
    </section>
    <section class='main_right'></section>
</main>
@endsection