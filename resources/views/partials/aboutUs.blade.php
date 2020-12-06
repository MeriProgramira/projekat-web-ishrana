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

<style>
    #aboutUs {
            margin: 5%  0%;
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
</style>
