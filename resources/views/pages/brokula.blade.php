@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<div class="container">
<div id="brokula-header" class="header">
<h2>Krem supa od brokule</h2>
</div>
<div class="row">
    <div id="tekst" class="col-lg-6">
    <h3 style="color:#571850">Krem juha od brokule</h3>
    <p> Ova ukusna, bogata supa pružit će vam zdravlje i sreću - bez dodatnih mliječnih i zasićenih masti
    - i  nećete moći vjerovati koliko je divna i kremasta. Poslužite je kao brzi ručak ili nezaboravnu toplu večeru za porodicu.<br>
    
    Za pripremu ove supe vam je potrebno	
    <li>1/3 narezanog luka</li>
    <li>1 mali pečeni krompir </li>
    <li>kuhani cvjetovi brokule</li>
    <li>2 šoljiče čistog nezaslađenog bademovog mlijeka</li>
    <li>1/2 kašikice himalajske soli</li>
    <li>biber po želji</li>
    <br>
    Na pari kuhajte brokulu i luk, otprilike 5 minuta. Krompir skuhajte u vodi, na pari ili ga ispecite. Ogulite koru.
    Do kraja ohladite namirnice. Kada su ohlađene, stavite sve sastojke u blender i blendajte. 
    Servirajte i uživajte!
    
    </p>
    </div>
    <div id="slika-brokula" class="col-lg-6">
    <img src="https://cdn.pixabay.com/photo/2017/10/28/17/39/soup-2897649_960_720.jpg" width="541" height="500">
    </div>
</div>
</div>
</body>
<style>
body{
		background-color:#fff2e3;
	}
	#brokula-header{
		background-color:#ebcba7;
		color:white;
	}
	#tekst{
		margin-top:2%;
	}
	</style>
@endsection