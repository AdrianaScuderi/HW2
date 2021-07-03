<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">

     <title>Centro Bellezza Venere</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">

     <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=ABeeZee&family=Pangolin&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Lora:400,400i|Open+Sans:400,700" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Sniglet&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&display=swap" rel="stylesheet">
     @routes
     <script src="{{ asset('javascript/mobile.js') }}" defer='true'></script>
     <link rel='stylesheet' href="{{ asset('css/mobile.css') }}">
     @yield('script')
     

  </head>
  <body>
      <header>
            <nav>
              <div id="logo">
                 <img src="img/lotusicona.png"/>
                   <div>
                     <h3>Centro Bellezza</h3>
                     <h1>Venere</h1>
                   </div>
              </div> 
              <div  id="menuLaterale" class="pannelloLaterale comandi links">
                 <a href="javascript:void(0)"class="close">&times;</a>
                 <a href="{{ route('homepage') }}">Home</a>
                 <a href="{{ route('aboutus') }}">About us</a>
                 <a href="{{ route('trattamenti') }}">Servizi</a>
                 @auth <a href="{{ route('prodotti') }}">Prodotti</a> @endauth
                 @yield('tastoEntraEsci')
              </div>
		          <div id="menu">
                <button class="open"> &#9776; </button>
              </div>
            </nav>
            @yield('intro')
       </header>

       @yield('content')

       <footer>
         <p>developed by Adriana Scuderi - O46002027</p>
       </footer>
  </body>
</html>