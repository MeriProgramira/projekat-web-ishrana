@extends('layouts.app')
@section('content')



    <div class="hero">

    </div>
    <div class="container-fluid">
        <section class="row" id="aboutUs">
            <div class="col-md-5" id="aboutUs-photo">

            </div>
            <div class="col-md-7" id="aboutUs-text">
                <h1 class="py-4">Zdrava ishrana</h1>
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
        </section>

        <section class="container-fluid " id="bitno-hrana">
            <h1>Bitne činjenice o hrani</h1>
            <div class="row bitno-hrana text-uppercase  ">

                <div id="jedanA" class="col-lg-3 col-md-3 col-xs-12 d-flex align-items-center justify-content-center">
                    <a href="#1" >NAJZDRAVIJE POVRĆE</a>
                </div>

                <div id="dvaA" class="col-lg-3 col-md-3 col-xs-12 d-flex align-items-center justify-content-center">
                    <a href="#2">NAJZDRAVIJE VOĆE</a>
                </div>

                <div id="triA" class="col-lg-3 col-md-3 col-xs-12 d-flex align-items-center justify-content-center">
                    <a href="#3">VITAMINI U HRANI</a>
                </div>

                <div id="cetiriA" class="col-lg-3 col-md-3 col-xs-12 d-flex align-items-center justify-content-center">
                    <a href="{{ route('drinks') }}">NAPITCI ZDRAVI A UKUSNI</a>
                </div>
            </div>
        </section>
</div>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	
		<div class="container">
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

    <div class="footer-full">
        @include('partials.footer')
    </div>

@endsection

@section('style')

    <style>
        #aboutUs {
            height: 100vh;
            padding: 11% 9% 8% 9%;
        }

        #aboutUs-photo {
            background-image: url(https://media-public.canva.com/MADGv1Rh6hk/6/screen_2x.jpg);
            background-repeat: no-repeat;
            background-size: cover;

        }

        #aboutUs-text {
            padding: 40px 70px ;
        }

        #aboutUs-text h1 {
            font-weight: 600;
            font-size: 36px;
        }

        #aboutUs-text p {
            color: #767578;
            line-height: 1.6;
            font-size: 18px;
        }

        #bitno-hrana {
            height: 100vh;
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

        #bitno-hrana a{
            color: white;
            font-size: 20px;
            font-weight: 700;

        }

        #bitno-hrana a:hover{
            color: rgb(250, 197, 24);
            text-decoration: none;
        }

            #jedanA
            {background-image:url("https://images.unsplash.com/photo-1518843875459-f738682238a6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=726&q=80");
            background-size:cover;
            background-repeat: no-repeat;
            background-position: calc(100% - 50px) center;

            }
    #dvaA
            {background-image:url("https://images.unsplash.com/photo-1577069861033-55d04cec4ef5?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8cmFzcGJlcnJ5fGVufDB8fDB8&auto=format&fit=crop&w=500&q=60");
            background-size:cover;
            background-repeat: no-repeat;
            background-position: calc(100% - 50px) center;

            }
    #triA
            {background-image:url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFPZe38O4I_fpdJL2D0qNMsizj1ZiNlfS0hp4xDzD0AhoyhPJx-xyVB3sJHnW8zO0qhFOHv2oZDwYidI9I7Ns04Gz_KVERgGU&usqp=CAU&ec=45732304");
            background-position: calc(100% - 50px) center;
            background-repeat: no-repeat;
            background-size:cover;


            }
    #cetiriA
            {background-image:url("https://images.lifealth.com/uploads/2018/10/best-thing-to-drink-on-an-empty-stomach-every-morning-600x460.jpg");
            background-size:cover;
            background-repeat: no-repeat;
            background-position: calc(100% - 50px) center;

            }
            body{
		background-color:#f5edf1;
	}
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
		margin: 4px 2px;
		cursor: pointer;
	}
	#recepti1 a:hover {
		background-color:red;
	}
    </style>

@endsection





