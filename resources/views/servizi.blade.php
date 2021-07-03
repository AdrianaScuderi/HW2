@extends('layouts.basesito')

@section('script')
   <script> let user = @auth {{ Auth::user()->id }} @else null @endauth</script> 
   <link rel="stylesheet" href="{{ asset('css/mhw1.css') }}">
   <script src="{{ asset('javascript/carico_trattamenti.js') }}" defer="true"></script>
@endsection

@section('tastoEntraEsci')
   @Auth
   <a class='button' href="{{ route('logout') }}"> Esci </a>
   @else <a class='button' href="{{ route('login') }}">Accedi alla community</a>
   @endAuth
@endsection

@section('intro')
<div id="incipitservizi">
    <h1>
        <strong> Ecco i nostri trattamenti</strong>
        <p>Scegli il tuo preferito e vieni a provarlo nei nostri centri!</p>
    </h1>
</div>
<div class="search-box">
   <input class="search-txt" type="text" placeholder="Cerca trattamento...">
</div>
@endsection

@section('content')
<section id="tratt">
    <div class="favorite">
        <h2> Preferiti </h2>
    </div> 
    <div class="trattamento"></div>
</section>
@endsection