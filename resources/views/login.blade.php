@extends('layouts.basesito')

<!-- Ricordati del titolo -->

@section('script')
<link rel='stylesheet' href="{{ asset('css/accesso.css') }}"> 
@endsection


@section('content')
<main class="login">
    <section class="main_left">
        <h1>Accedi</h1>
        <span> @error('Errore') {{$message}} @enderror </span> 
        <form name='login' method='post' action="{{ route('login') }}">
        @csrf <!-- serve per prendere il token ogni volta che invio i dati -->
            <div class="username">
                <div><label for='email'>Email</label></div>
                <div><input type='text' name='email' ></div>
            </div>
            <div class="password">
                <div><label for='password'>Password</label></div>
                <div><input type='password' name='password'></div>
            </div>
            <div>
                <input type='submit' value="Accedi">
            </div>
        </form>
        <div class="signup">Non hai un account? <a href="{{ route('registrazione') }}">Iscriviti</a></div>
    </section>
    <section class="main_right"></section>
</main>
@endsection