@extends('layouts.app')
@section('content')

    @include('partials.nav_main')

    <div class="hero">

    </div>
    <div class="container-fluid">

<<<<<<< HEAD
        @include('partials.aboutUs')
=======
        {{-- About us section --}}
        <section id="aboutUs" >
            <h1>O nama</h1>
            <div class="row m-3" id="aboutUs-content">
                <div class="col-lg-6 col-md-12 col-sm-12 px-4" >
                <img src="{{ asset("storage/img/aboutUs-photo.jpg") }}" alt="food image">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 px-5">
                    <h2 >Zdrava ishrana</h2>
                    <p>Portal "Zdrava ishrana" je projekat zaljubljenika u hranu, i nastojimo pokazati da zdrava hrana
                        moze bit jako ukusna. Svoje znanje koje je rezultat dugogodisnjeg istrazivanja, isprobavanja....
                        podjeti cemo sa vama. Šta mislite, da li su pravilna ishrana i zdravlje povezani? Da li je
                        pravilna ishrana bitna? Naravno! Vašem tijelu je potrebna prava hrana i
                        redovne aktivnosti, kako fizičke, tako i mentalne da bi ostvarilo svoj
                        puni potencijal. Ništa nije toliko bitno kao zdrava ishrana.
                        Ako želite popraviti svijet, popravite prvo sebe. Pođite od ishrane.
                        Nutritivno vrijedna hrana u pravo vrijeme u pravoj količini je suština. Na
                        sajtu ima puno tekstova o tome šta jesti, a ako vam je potrebna pomoć,
                        javite se tu smo za vas.</p>
                </div>
            </div>
        </section>

        <section class="container-fluid my-2" id="bitno-hrana">
            <h1>Bitne činjenice o hrani</h1>
            <div class="row bitno-hrana text-uppercase  ">

                <div id="jedanA" class="col-lg-3 col-md-6 col-xs-12 d-flex align-items-center justify-content-center food">
                    <a href="{{ route('vegetable') }}" >NAJZDRAVIJE POVRĆE</a>
                </div>

                <div id="dvaA" class="col-lg-3 col-md-6 col-xs-12 d-flex align-items-center justify-content-center food">
                    <a href="{{ route('fruits') }}">NAJZDRAVIJE VOĆE</a>
                </div>

                <div id="triA" class="col-lg-3 col-md-6 col-xs-12 d-flex align-items-center justify-content-center food">
                    <a href="{{ route('vitamins') }}">VITAMINI U HRANI</a>
                </div>

                <div id="cetiriA" class="col-lg-3 col-md-6 col-xs-12 d-flex align-items-center justify-content-center food">
                    <a href="{{ route('drinks') }}">NAPITCI ZDRAVI A UKUSNI</a>
                </div>
            </div>
        </section>

        <section id="recepti">
            <div class="container ">
                <div class="row">
                <div id="jedan" class="col-lg-6">
                <div class="header">
                <h1>Omiljeni recepti</h1>
                </div>

                <div class="row">
                <div id="korner" class="col-md-6">
                <a href="{{route('humus')}}" id="recept1"><h4>Humus</h4></a>
                Humus je dokaz da zdrava hrana može biti jednostavna za pripremu.
                </div>
                <div id="korner" class="col-md-6">
                    <a href="{{route('tikva')}}" id="recept1"> <h5>Krem juha od tikve</h5></a>
                Boja bundeve ukazuje da je ova namirnica bogat izvor beta karotena.

                </div>
                <div id="korner" class="col-md-6">
                    <a href="{{route('persun')}}" id="recept1"><h4>Napitak za energiju od bobica i peršuna</h4></a>
                Užitak u spremanju brzog i jednostavnog obroka će vam olakšati dan.
                </div>
                <div id="korner" class="col-md-6">
                    <a href="{{route('salata')}}" id="recept1"><h4>Ukusan citrus dressing za salatu</h4></a>
                Mladi luk dodaje okus i boju ovom dresingu, ali može dati i malo poleta vašem napitku.
                </div>
                </div>
                <div class="row">
                <div id="korner" class="col-md-6">
                    <a href="{{route('grasak')}}" id="recept1"><h4>Osvježavajuća i kremasta supa od graška</h4></a>
                Grašak sadrži dvostruko više proteina u odnosu na ostalo povrće.
                </div>
                <div id="korner" class="col-md-6">
                    <a href="{{route('brokula')}}" id="recept1"> <h5>Krem supa od brokule</h5></a>
                 Ova ukusna, bogata supa pružit će vam zdravlje i sreću - bez dodatnih mliječnih i zasićenih masti
                - i  nećete moći vjerovati koliko je divna i kremasta.
                </div>

                </div>

                </div>

                <div id="jedan" class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1506458961255-571f40df5aad?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=334&q=80" height="530" width="600">
                </div>
                </div>
            <a href="{{route('omiljeni')}}" id="dugmic">SVI RECEPTI</a>
            </div>
        </section>

        <section class="container-fluid" id="zdravlje">

                <div class="my-auto">
                    <h1> Prehrana, zdravlje, ljepota...</h1>
                    <h2>Now that your eyes are open, make the sun jealous with your burning passion to start the day. Make sun jealous or stay in bed. </h2>
                    <h3>MALEK EL HALABI</h3>
                </div>
                <br> <br>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="item-health m-2 p-3">
                            <h6 class="p-2">Kurkuma-ljekovit začin</h6>
                            <div class="row m-2">
                                <div id="slika1" class="col-md-6">


                                </div>
                                    <div id="text1" class="col-md-6 text-item">
                                    Kurkuma Indijski začin poznat po svojoj žarkoj boji, te pikantno-statkastom okusu, više je od zanimljivog dodatka jelima. Kurkuma se od
                                    <p class="readmore"><a href="#">...readmore</a></p>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <div class="item-health m-2 p-3">
                            <h6 class="p-2">Aromaterapija eteričnim uljima</h6>
                            <div class="row m-2">
                                <div id="slika2" class="col-md-6">
>>>>>>> c81938903aab075b51f037d6899394ec34128359

        @include('partials.food')

        @include('partials.recipes')

        @include('partials.health')

    </div>


    <div class="footer-full">
        @include('partials.footer')
    </div>

@endsection

@section('style')

    <style>

    </style>

@endsection





