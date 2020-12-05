@extends('layouts.app')
@section('content')

@include('partials.nav_links')

    <div class="container  mt-5 ">

        <div class="jumbotron p-4 p-md-5 text-white rounded ">
            <div class="col-md-6 px-0">
              <h1 class="display-4 font-italic">Trendovi u savremenoj ishrani</h1>
              <p class="lead my-3">Po ko zna koji put možemo reći da je zdrava hrana definitivno došla da ostane. Kada kažemo zdrava hrana,
                  mislimo na sve veću popularnost kvalitetnih, nutritivno bogatih namirnica u skladnoj i promišljenoj ishrani. </p>
              <p class="lead mb-0"><a href="{{ route('recepti') }}" class="text-white font-weight-bold">Pogledajte naše recepte za zdravu ishranu...</a></p>
            </div>
          </div>


    <main role="main" class="container">
    <div class="row">

        <h3 class="pb-4 my-3 font-italic border-bottom">
            Trendovi u zdravoj ishrani koji nas očekuju u 2021. godini
        </h3>

        <div class="blog-post my-2">
          <h2 class="blog-post-title my-2">Neka 2021 bude prekretnica</h2>
          <p class="blog-post-meta text-muted">04. decembar, 2020 , Meri Nutricionista</p>

          <p>Mlijeko od banane i pistaća, proizvodi sa leblebijama umjesto brašna, pesto od kelja, kafa sa proteinom, pogledajte kakve nam još trendove donosi 2021. godina.</p>
          <hr>
          <p class="main-text my-3">Po ko zna koji put možemo reći da je zdrava hrana definitivno došla da ostane. Kada kažemo zdrava hrana, mislimo na sve veću popularnost kvalitetnih,
               nutritivno bogatih namirnica u skladnoj i promišljenoj ishrani. <span>U 2021. godini</span>  neće biti mnogo razlike u odnosu na 2020. kada su u pitanju trendovi u ishrani. Ipak,
                ističu popularni nutricionisti, fokus na određene tipove ishrane i namirnica će znatno porasti. <b> Personalizovana ishrana, intuitivna ishrana, detoksikacija hranom i
                 keto ishrana </b> kao i održivi sistemi u ishrani obilježiće i <b>2021. godinu.</b>  </p>
            <img src="/uploads/trend1.jpeg" alt="" class="trend-photo">

          <p class="my-4 main-text">Kada su u pitanju namirnice, najveći svjetski sajmovi hrane poput World Food sajmova i Biofach sajma potvrdili su ove trendove.
               Na sajmovima veliku pažnju su privukli visokokvalitetni organski mlječni proizvodi, biljna mlijeka, te mlijeka sa omega masnim kiselinama i probioticima.
             </em> Značajnu pažnju dobilo je i inovativno korišćenje žitarica celog zrna u konditorskoj industriji, a najviše u testenimama poput hleba i kora za picu.
              Opet sve u korist pojačanog unosa vlakana i ishrane gde šećer neće dominirati.</p>
          <h5 class="my-4"> <b> Evo šta će sve biti popularno u 2021. godini kada su namirnice u pitanju. </b></h5>

          <h3 class="my-4">#1 Povrće umejsto šećera i zgušnjivača u dodacima za kuhanje</h3>
          <p class="main-text">Iako će vam mnogi stručnjaci reći kako je prirodno povrće najbolje i kako sve što dolazi u kutiji treba izbjegavati, trendovi u proizvodnji namirnica to možda
              ipak mogu da promene. Tehnologija se razvija i povrće ipak može stići do vas u pogodnoj varijanti. <br>
            Prijmera radi, pojedini proizvođači kečapa će od sada umjesto šećera i zgušnjivača u kečap uključivati čitavu paletu povrća,
            uključujuči mrkvu, papriku, batat, tikvu, luk i cveklu. Cilj uključivanja ovakvog povrća osim nutritivne vrijednosti jeste izbjegavanje vještačkih aroma i emulgatora.
            <br>  Štaviše, prema anketama koje su sproveli <i> International Food Information Council Foundation’s 2019 Food i Health Survey </i> utvrđeno je da se potrošači okreću više ka
            proizvodima u kojima mogu da prepoznaju sve sastojke. Sa druge strane, <span> batat i cvekla </span>će se sve više sretati u sastojcima za soseve, kao krekeri ili čips ili
            jednostavno dodatak jelu kao superhrana. Nemojte se iznenaditi ni ako naiđete na pesto od kelja, ili karfiola u Alfredo sosu. Era dominacije povrća je čini se došla
            i mesto pronalazi baš u svakom jelu.</p>

            <h3 class="my-4">#2 Era karfiola i leblebija</h3>
            <p class="main-text">Stidljivi karfiol koji se kuhao samo u čorbama i paprikašima, sada je ponosni sastojak pica i mrvica za pohovanje mesa. </p>
            <img src="/uploads/karfiol.jpeg" alt="" class="trend-photo">
            <p class="main-text my-3">Kore za picu od karfiola će biti sve popularnije. <span> Mljeveni karfiol </span>uveliko zamjenjuje hljebne mrvice pa čak i brašno, a može se naći
                 i kao zdravija verzija krutona uz kinou ili neke druge zdravije dodatke. Za one koji su na keto ishrani, ili smanjuju unos ugljenih hidrata,
                 ovo je definitivno odlična i ukusna ideja koja može i kod kuće da se realizuje. <br>
                Kada su u pitanju <span>leblebije </span>, brašno od ove namirnice se polako popularizuje i u Bosni i u ponudi su čak i organske leblebije.  </p>

            <h3 class="my-4">#3 Hrana sa pojačanim unosom vitamina D</h3>
            <p class="main-text">Manjak vitamina D nije rjetka pojava kod ljudi zbog čega nije ni čudo su se proizvođači hrane dosjetili da ovaj nedostatak isprave hranom.

                Musli, razne kombinacije žitarica za doručak nerjetko imaju dodat vitamin D. Sada je to prisutno više nego ikad i takve kombinacije će biti sve češće.</p>

        </div><!-- /.blog-post -->
      </div><!-- /.blog-main -->
     </main>
 </div>

 <div class="footer-full">
    @include('partials.footer_links')
 </div>

@endsection

@section('style')

    <style>

        .jumbotron {
            background-color: #3bc0ae;
        }

        .trend-photo {
            max-width: 100%;
        }

        .main-text {
            line-height: 1.8;
        }

        span {
            color:  #3bc0ae;
        }

        .jumbotron a:hover {
            color:red;
        }



    </style>


@endsection

<script>

</script>
