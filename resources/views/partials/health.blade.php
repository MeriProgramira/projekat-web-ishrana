<section class="container-fluid" id="zdravlje">

    <div class="my-auto">
        <h1> Prehrana, zdravlje, ljepota...</h1>
        <h2>Now that your eyes are open, make the sun jealous with your burning passion to start the day. Make sun jealous or stay in bed. </h2>
        <h3>MALEK EL HALABI</h3>
    </div>
    <br> <br>
    <div class="container">
        <div class="row">
            <div class="card mx-3" style="width: 20rem;">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdp8gigH_zhlJllETD_LGEBRXaqyRSfCQOWA&usqp=CAU" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Kurkuma-ljekovit začin</h5>
                  <p class="card-text">Kurkuma Indijski začin poznat po svojoj žarkoj boji, te pikantno-statkastom okusu, više je od zanimljivog dodatka jelima.
                      Kurkuma se od....</p>
                  <a href="{{ route('kurkuma') }}" class="stretched-link"> više o kurkumi</a>
                </div>
              </div>

              <div class="card mx-3" style="width: 20rem;">
                <img src="https://www.adiva.hr/wp-content/uploads/2019/12/blagdanska-aromaterapija-i-etericna-ulja.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Aromaterapija </h5>
                  <p class="card-text">Aromaterapija eteričnim uljima jedan je od dva načina primjene eteričnih ulja. Aromaterapija je unošenje
                      supstanci eteričnih ulja u tijelo....</p>
                  <a href="{{ route('etericna-ulja') }}" class="stretched-link">više o eteričnim uljima</a>
                </div>
              </div>

              <div class="card mx-3" style="width: 20rem;">
                <img src="https://gastro.24sata.hr/media/img/b3/36/89451f470858f3d645a7.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Prednosti jabučnog octa</h5>
                  <p class="card-text">Jabučni ocat dobiva se fermentacijom prešanog jabučnog soka. Fermentacija je proces u kojem se šećer iz voća
                      pretvara u ocat. Jabučni ocat je...</p>
                  <a href="{{ route('ocat') }}" class="stretched-link">više o jabučnom octu</a>
                </div>
              </div>

        </div>


</section>

<style>

            #zdravlje {
                margin: 7%  1% 10% 1%;
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



            img {
                max-width: 100%;
            }


            .stretched-link {
               color: #e6837c;
            }

            .stretched-link:hover{
               color:#cc1306;
            }

</style>
