@extends('layouts.app')
@section('content')
    

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	
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
			 <div id="dvaa" class="col-lg-6">
			  <div class="row">
                <div id="korner" class="col-md-6">
                    <a href="{{route('zeleno')}}" id="recept1"><h4>VRTNA ZABAVA ZELENOG POVRĆA</h4></a>
                Neka vam ova lagana smoothe kombinacija postane svakodnevna vitaminska eksplozija.
                </div>
                <div id="korner" class="col-md-6">
                    <a href="{{route('sladoled')}}" id="recept1"> <h5>Sladoled od banane i kikiriki putera</h5></a>
                BRZO I JEDNOSTAVNO!
				Ukusni neodoljivi zdravi sladoled.
                </div>
				</div>
				<div class="row">
                <div id="korner" class="col-md-6">
                    <a href="{{route('obrok')}}" id="recept1"><h4>Mediteranski Obrok</h4></a>
                Unikatno, ukusno i mediteransko!
                </div>
				</div>
             </div>
			   
                </div>
				</div>
				
	
				</section>
	
</body>
<style>
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
	
	#recepti1 a:hover {
		background-color:red;
	}
	#dvaa{
		margin-top:7%;
	}
	</style>
@endsection