@extends('layouts.basesito')

<!-- Ricordati del titolo -->

@section('script')
<link rel='stylesheet' href="{{ asset('css/mhw1.css') }}">
<script src="{{ asset('javascript/articoli.js') }}" defer='true'></script>
@endsection

@section('tastoEntraEsci')
   @Auth
   <a class='button' href="{{ route('logout') }}"> Esci </a>
   @else <a class='button' href="{{ route('login') }}">Accedi alla community</a>
   @endAuth
@endsection

@section('intro')
<div id="slogan">
    <h1>
       <strong>Vieni a trovarci</strong><br/>
       <p>Concedersi del tempo per prendersi cura di se stessi è il vero segreto della bellezza</p>
    </h1>
</div>
@endsection

@section('content')
<section id="sezione1"> 
    <div id="saldi" class="c1">
        <div> 
            <h1> Tante promozioni solo per te! </h1>
        </div>
        <div>
            <img src="img/rag.png"/>
        </div>
        <div>
            <p>Iscriviti al sito, avrai la possibilità di vedere in anteprima tutti i prodotti disponibili nello shop. Cosa aspetti? </p>
        </div>
    </div>
</section>
<section>
    <div id="promo" class="c1">
        <div>
           <img src="img/leaves.png"/>
        </div>
        <div>
           <img src="img/snowman.png"/>
        </div>
        <div>
           <img src="img/sakura.png"/>
        </div>
        <div>
           <img src="img/parasol.png"/>
        </div>
    </div>
</section>
<section id="sezione2">
    <div id="main">
        <h1> Trova ciò di cui hai bisogno </h1>
        <p>Abbiamo tanti trattamenti adatti alle tue esigenze, scegli quello giusto per te</p>
    </div>
    <div id="details">
        <div>
            <img src="img/p3.jpg"/>
            <h1>PARRUCCHIERE</h1>
                <p>
		           Con il nostro personale qualificato sei in mani fidate: color stylist, acconciature, tagli alla moda e molto altro!
		        </p>
        </div>
        <div>
            <img src="img/e2.jpeg" />
            <h1>ESTETICA</h1>
            <p>
                Variando dalla tecnica del microblading al mondo onicotecnico, il nostro staff è pronto a prendersi cura di te in ogni momento. 
            </p>
        </div>
        <div>
            <img src="img/m5.jpg" />
            <h1>MASSAGGI</h1>
            <p>
		        Lasciati coccolare dalle mani dei nostri operatori, offriamo diverse tecniche di massaggi che variano dallo shiatsu alla rilassante hot stone.
		    </p>
        </div>
    </div>
</section>
<section id="sezione3">
    <div id="intronews">
        <h1> Le ultime news  </h1>
        <p> In seguito ecco una lista di articoli da consultare per essere sempre al passo con le novità, conoscere il tuo corpo e curarlo al meglio</p>
    </div>
    <div id="elencoarticoli">
    </div>
</section>
@endsection



