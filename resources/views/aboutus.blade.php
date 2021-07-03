@extends('layouts.basesito')


@section('script')
<link rel='stylesheet' href="{{ asset('css/aboutus.css') }}">
<script src="{{ asset('javascript/carico_dipendenti.js') }}" defer='true'></script>
@endsection

@section('tastoEntraEsci')
   @Auth
   <a class='button' href="{{ route('logout') }}"> Esci </a>
   @else <a class='button' href="{{ route('login') }}">Accedi alla community</a>
   @endAuth
@endsection

@section('intro')
<div id="incipitdipendenti">
    <h1> Vieni a conoscere il nostro team! </h1>
    <p> Vi presentiamo tutti i dipendenti del Centro di Bellezza, i quali si prenderanno cura di voi quando verrete a trovarci</p>
</div>
@endsection

@section('content')
<section id="dip">
    <div class="dipendente"></div>
</section>
@endsection

