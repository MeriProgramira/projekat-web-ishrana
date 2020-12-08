<section class="container-fluid my-2 mx-0" id="bitno-hrana">
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

<style>


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

            @media (min-width: 990px) and (max-width: 1300px) {
                #jedanA,  #dvaA,  #triA,  #cetiriA {
                    background-position: calc(100% - 20px) center;
                }

                #bitno-hrana a{
                    padding-left: 0px;
                    font-size: 14px;

        }
             }

</style>
