<section id="recepti">
    <div class="container ">
        <div class="row">
        <div id="jedan" class="col-lg-6">
        <div class="header">
        <h1>Omiljeni recepti</h1>
        </div>

        <div class="row">
        <div id="korner" class="col-md-6">
        <a href="{{ route('humus') }}" id="recept1" target="_blank"><h4>HUMUS</h4></a>
        Humus je dokaz da zdrava hrana može biti jednostavna za pripremu.
        </div>

        <div id="korner" class="col-md-6">
        <a href="{{ route('tikva') }}" class="recept" target="_blank"><h5>Krem juha od tikve</h5></a>

            Boja bundeve ukazuje da je ova namirnica bogat izvor beta karotena.
        </div>

        <div id="korner" class="col-md-6">
        <a href="{{ route('obrok') }}" class="recept" target="_blank"><h5>Mediteranski Obrok</h5></a>

        Užitak u spremanju brzog i jednostavnog obroka će vam olakšati dan.
        </div>

        <div id="korner" class="col-md-6">
        <a href="{{ route('salata') }}" class="recept" target="_blank"><h5>Ukusan citrus dressing za salatu</h5></a>

        Mladi luk dodaje okus i boju ovom dresingu, ali može dati i malo poleta vašem napitku.
        </div>

        </div>

        <div class="row">

        <div id="korner" class="col-md-6">
        <a href="{{ route('grasak') }}" class="recept" target="_blank"><h5>Osvježavajuća i kremasta supa od graška</h5></a>

        Grašak sadrži dvostruko više proteina u odnosu na ostalo povrće.
        </div>

        <div id="korner" class="col-md-6">
        <a href="{{ route('brokula') }}" class="recept" target="_blank"><h5>Krem supa od brokule</h5>></a>

         Ova ukusna, bogata supa pružit će vam zdravlje i sreću - bez dodatnih mliječnih i zasićenih masti
        - i  nećete moći vjerovati koliko je divna i kremasta.
        </div>

        </div>

        </div>

        <div id="jedan" class="col-lg-6">
        <img src="https://images.unsplash.com/photo-1506458961255-571f40df5aad?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=334&q=80" height="530" width="600">
        </div>
        </div>
        <a href="{{ route('recepti') }}" id="dugmic" class="btn ">SVI RECEPTI</a>

    </div>
</section>

<style>
    #recepti {
                background-color:#f5edf1;
                padding: 5% 0;

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
		margin: 18px 0;
        cursor: pointer;
        background-color:#f5edf1;
	}
	#recepti1 a:hover {
		background-color:red;
    }

    .recept {
        color: black;
    }

    a:hover {
        text-decoration: none;
    }
</style>
