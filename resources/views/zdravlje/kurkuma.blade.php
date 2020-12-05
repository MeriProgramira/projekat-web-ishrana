@extends('layouts.app')
@section('content')

@include('partials.nav_links')

    <div class="container  mt-5 ">

        <div class="container">
            <h1>Kurkuma-ljekovit začin</h1>
            <br><br>
            <div class="row">
                <div id="kurkuma" class="col-lg-9 col-md-9 col-xs-12">
                    <img src="https://portal.terra-organica.hr/wp-content/uploads/2019/04/kurkuma-kao-lijek-e1554545813345.jpg">
                </div>
                    <div id="tekst" class="col-lg-3 col-md-3 col-xs-12">
                    <p>Kurkuma Indijski začin poznat po svojoj žarkoj boji, te pikantno-statkastom okusu, više je od zanimljivog dodatka jelima. Kurkuma se od davninau ajurvedskoj i kineskoj medicini već više tisuća godina za liječenje različitih bolesti. Osim toga, ova je biljka poznata i kao začin, a kao začin i lijek koristi se podanak kurkume – Curcuma longae rhizoma.
                    Kurkumin poboljšava djelovanje kemoterapijskog agenta gemicitabina u terapiji raka gušterače. Stanice raka vrlo često postaju otporne na djelovanje gemicitabina. Znanstvenici sa University of Texas M.D. Anderson Cancer Center utvrdili su da kurkumini sprečavaju da stanice raka postanu otporne na lijek što je potvrđeno u laboratorijskim testiranjima i u modelu sa životinjama.</p>
                </div >
            </div>
            <br><br>
                <div class="row" id="more-kurkuma">
                            <div class ="col-lg-4 col-md-4 col-xs-12">
                                <h3>Ljekovitost kurkume svakodnevno</h3>
                                <br><br>
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQu1NxAbLh6i6e9u0E_g7TcDYtUk2BKshrm_w&usqp=CAU">
                                <br><br>
                                <p>Kurkuma je jedna od najbolje istraženih biljaka na svijetu danas. Njena ljekovita svojstva i komponente (prvenstveno kurkumin) bili su predmet više od 5600 recenziranih i objavljenih biomedicinskih studija.U Ayurvedi i tradicionalnoj kineskoj medicine koristi se više od 4000 godina, prati je glas najljekovitije biljke na svijetu čije je djelovanje potvrđeno brojnim znanastvenim radovima.</p>
                                </div>

                            <div class ="col-lg-4 col-md-4 col-xs-12">
                                <h3>Antikancerogeno djelovanje kurkume</h3>
                                <br><br>
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7dDBTYsOMIcSvCqp6TtvsFZQass9evh9oqA&usqp=CAU">
                                <br><br>
                                <p>Kurkuma izaziva programiranu smrt stanica raka (apoptozu) i djeluje na smajenje broja krvnih žila preko kojih se tumor razvija i raste (anti-angiogenski učinak).Može zaustavit rast mnogih vrsta raka jer uništava matične stanice raka. Novija istraživanja smatraju da su matične stanice raka odgovorne za pokretanje i održavanje raka.Djeluje čak i na stanice raka koje su razvile otpornost na kemoterapijske lijekove izazivajući njihovu smrt i smanjujući njihovu otpornost na djelovanje kemoterapijskih lijekova.</p>

                            </div>
                            <div class ="col-lg-4 col-md-4 col-xs-12">
                                <h3>Kurkuma – sigurnost i doziranje</h3>
                                <br><br>
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRk6a589kvu2sJcCFOfKfCl0pikJldkvvu91Q&usqp=CAU">
                                <br><br>
                                <p>Kurkuma je hrana koja se bez ikakvih   negativnih nuspojava konzumira 4000 godina. U kliničkim studijama korištene   su doze strandardiziranog ekstrakta kurkume – kurkumina i do 8 g/ dnevno u periodu od 4 mjeseca i ispitanici su ih dobro podnosili.Kurkumin ima visoku sigurnost za sve osobe pa čak i za trudnice i djecu. Njegove multifunkcionalne sposobnosti čine ga gotovo svršenim dodatkom prehrani kako u prevenciji tako i u glavnoj terapiji.Naravno nismo svi isti, kod nekih su ljudi zabilježene blage gastrološke smetnje pri konzumiranju većih doza. One  se mogu minimizirati ako se kurkumin konzumira s hranom.</p>

                            </div>

                </div>


@endsection

@section('style')

    <style>


        #kurkuma img{
        height:500px;
	    width:800px;
        }

        #more-kurkuma img {
        height:300px;
        width:370px;
        }



    </style>


@endsection


