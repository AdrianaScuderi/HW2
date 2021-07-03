@extends('layouts.basesito')

@section('script')
   <script> let user = @auth {{ Auth::user()->id }} @else null @endauth</script> 
   <link rel="stylesheet" href="{{ asset('css/mhw1.css') }}">
   <script src="{{ asset('javascript/prodotti.js') }}" defer="true"></script>
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
         <p>Siamo partnership l'Oreal! Cerca prodotti per categoria: blush, eyeliner, bronzer, eyebrow, eyeshadow, foundation, lip liner, lipstick, mascara e nailpolish!</p>
       </h1>
    </div>
    <form name ='search_content' id='search_content'>
       <div class="search-box">
          <input class="search-txt" id="barraricerca" type="text" placeholder="Cerca prodotto...">
       </div>
       <label>
          <input class="submit" type='submit'>
       </label>
    </form>
 @endsection

@section('content')
    <section id="prod">
       <div class="favorite">
         <h2> Preferiti </h2>
       </div> 
       <div class="prodotto"></div>
    </section>
@endsection

