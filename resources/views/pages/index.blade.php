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
    </style>

@endsection





