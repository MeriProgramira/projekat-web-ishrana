@extends('layouts.app')
@section('content')



    <div class="hero">

    </div>
    <div class="container-fluid">

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
                <a href="humus" id="recept1" target="_blank"><h4>HUMUS</h4></a>
                Humus je dokaz da zdrava hrana može biti jednostavna za pripremu.
                </div>
                <div id="korner" class="col-md-6">
                <h5>Krem juha od tikve</h5>
                Boja bundeve ukazuje da je ova namirnica bogat izvor beta karotena.

                </div>
                <div id="korner" class="col-md-6">
                <h5>Mediteranski Obrok</h5>
                Užitak u spremanju brzog i jednostavnog obroka će vam olakšati dan.
                </div>
                <div id="korner" class="col-md-6">
                <h5>Ukusan citrus dressing za salatu</h5>
                Mladi luk dodaje okus i boju ovom dresingu, ali može dati i malo poleta vašem napitku.
                </div>
                </div>
                <div class="row">
                <div id="korner" class="col-md-6">
                <h5>Osvježavajuća i kremasta supa od graška</h5>
                Grašak sadrži dvostruko više proteina u odnosu na ostalo povrće.
                </div>
                <div id="korner" class="col-md-6">
                <h5>Krem supa od brokule</h5>
                 Ova ukusna, bogata supa pružit će vam zdravlje i sreću - bez dodatnih mliječnih i zasićenih masti
                - i  nećete moći vjerovati koliko je divna i kremasta.
                </div>

                </div>

                </div>

                <div id="jedan" class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1506458961255-571f40df5aad?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=334&q=80" height="530" width="600">
                </div>
                </div>
                <button id="dugmic">SVI RECEPTI</button>
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



                                </div>
                                    <div id="text1" class="col-md-6 text-item">
                                        Aromaterapija eteričnim uljima jedan je od dva načina primjene eteričnih ulja. Aromaterapija je unošenje supstanci eteričnih ulja u tijelo
                                    <p class="readmore"><a href="#">...readmore</a></p>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <div class="item-health m-2 p-3">
                            <h6 class="p-2">Prednosti jabučnog octa</h6>
                            <div class="row m-2">
                                <div id="slika3" class="col-md-6">


                                </div>
                                    <div  class="col-md-6 text-item">
                                        Jabučni ocat dobiva se fermentacijom prešanog jabučnog soka. Fermentacija je proces u kojem se šećer iz voća pretvara u ocat. Jabučni ocat je
                                    <p class="readmore"><a href="#">...readmore</a></p>
                                </div>
                                </div>
                            </div>
                        </div>






                    </div>
                </div>


        </section>


</div>

    <div class="footer-full">
        @include('partials.footer')
    </div>

@endsection

@section('style')

    <style>
        /* Indira */
        #aboutUs {
            margin: 5%  2%;
            padding: 3% 2%;
        }

        #aboutUs h1 {
            font-weight: 600;
            font-size: 40px;
            margin:30px 0px 80px 40px;
        }

        #aboutUs-content img{
            max-width: 100%;
            text-align: center
        }

        #aboutUs-content h2 {
            font-weight: 600;
            font-size: 34px;
            text-align: left;
            color: #31e063;
            padding-bottom: 20px;
        }

        #aboutUs-content p {
            color: #767578;
            line-height: 1.6;
            font-size: 18px;
        }

        #bitno-hrana {
            height: 70vh;
        }

        #bitno-hrana h1 {
            font-weight: 600;
            font-size: 40px;
            margin:30px 0px 80px 40px;
        }

        .row.bitno-hrana {
            margin: 30px 0px 30px 50px;
            height: 55%;
        }

        .food {
            margin-bottom: 20px;
        }

        #bitno-hrana a{
            color: white;
            font-weight: 700;

        }

        #bitno-hrana a:hover{
            color: rgb(250, 197, 24);
            text-decoration: none;
        }

        #jedanA {
            background-image:url("https://images.unsplash.com/photo-1518843875459-f738682238a6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=726&q=80");
            background-size:cover;
            background-repeat: no-repeat;
            background-position: calc(100% - 50px) center;
        }

        #dvaA {
            background-image:url("https://images.unsplash.com/photo-1577069861033-55d04cec4ef5?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8cmFzcGJlcnJ5fGVufDB8fDB8&auto=format&fit=crop&w=500&q=60");
            background-size:cover;
            background-repeat: no-repeat;
            background-position: calc(100% - 50px) center;
            }
        #triA {
            background-image:url("https://www.unlockfood.ca/EatRightOntario/media/Website-images-resized/Vitamin-E-resized.jpg");
            background-position: calc(100% - 50px) center;
            background-repeat: no-repeat;
            background-size:cover;
            }

        #cetiriA {background-image:url("https://images.lifealth.com/uploads/2018/10/best-thing-to-drink-on-an-empty-stomach-every-morning-600x460.jpg");
            background-size:cover;
            background-repeat: no-repeat;
            background-position: calc(100% - 50px) center;
            }

            /* atalija */

            .item-health {
                background-color: transparent;
                background-image: linear-gradient(to bottom, rgba(30, 87, 153, 0.2) 0%, rgba(125, 185, 232, 0) 100%);
                background-repeat: repeat;
                border-radius:3px;

            }
            #zdravlje {
                margin: 5%  1%;
        ````}

             #zdravlje h1 {
                font-weight: 600;
                font-size: 40px;
                margin:30px 0px 80px 40px;
                }

            #zdravlje h2 {
                color: rgb(119, 119, 128);
                font-size:25px;
                text-align:center;
                margin:0 10%;
                font-family:arial;
                }

            #zdravlje h3 {
                color: rgb(141, 141, 148);
                font-size:20px;
                text-align:center;
                margin-top:3%;
            }

            .item-health img {
                width: 100%;
            }

            .item-health .text-item {
               color:#6f7a8c;
            }

            #slika1 {
            background-image:url("https://media.luftika.rs/2018/09/kurkuma.jpg");
            background-size:cover;
            background-repeat: no-repeat;
            background-position: calc(100% - 20px) center;
            }

            #slika2 {
            background-image:url("https://www.adiva.hr/wp-content/uploads/2019/12/blagdanska-aromaterapija-i-etericna-ulja.jpg");
            background-size:cover;
            background-repeat: no-repeat;
            background-position: calc(100% - 20px) center;
            }

            #slika3 {
            background-image:url("https://gastro.24sata.hr/media/img/b3/36/89451f470858f3d645a7.jpeg");
            background-size:cover;
            background-repeat: no-repeat;
            background-position: calc(100% - 20px) center;
            }

           /* /*  #prvi_dio{
            border:3px solid silver;
            border-radius:10px;
            padding:15px;
            background-color:silver;
            margin-top:3%;} */

            /* #slika1 img {
            height:250px;
            width:180px;} */

            /* #drugi_dio{
            border:3px solid silver;
            border-radius:10px;
            padding:15px;
            background-color:silver;
            margin-top:3%;} */

            /* #slika2 img{
            height:250px;
            width:180px;}

            #treci_dio{
            border:3px solid silver;
            border-radius:10px;
            padding:15px;
            background-color:silver;
            margin-top:3%;}

            #slika3 img {
            height:250px;
            width:180px;}  */

            /* Almedina */

            #recepti {
                background-color:#f5edf1;
                padding: 5% 0;

            }
<<<<<<< HEAD


            .header{
		font-style:bold;
		color:#635e52;
	}
	#korner{
		margin-top:7%;
		background-size:5%;
		font-size:15px;


	}
	#recepti div.recepti{
		display: block;
		float: right;
		width: 475px;
		margin: 5;
		padding: 3;
	}
	#jedan{
		margin-top:3%;
	}
	#dugmic{

		color: violet;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 18px 0;
		cursor: pointer;
	}
	#recepti1 a:hover {
		background-color:red;
	}
 </style>
=======
    h2{
        top-margin:30px;
    }
    </style>
>>>>>>> ecf6105b29257ae4026c53dd0830af4973ffd554

@endsection





