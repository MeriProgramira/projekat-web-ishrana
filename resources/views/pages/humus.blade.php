@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<div class="container">
		<div id="humus-header" class="header">
		<h2>Humus</h2>
		</div>
		<div class="row">
			<div id="tekst" class="col-lg-6">
			<h3 style="color:#571850">Humus</h3>
			<p> Priprema jednostavnog i brzog obroka.
			Potrebni sastojci su:
			<li>420g slanutka, kuhanog, ispranog i iscijeđenog</li>
			<li>3 kašike tahina</li>
			<li> režanj bijelog lukaa</li>
			<li>1 1/2 kašika soka od limuna</li>
			<li>1 kašika maslinovog ulja</li>
			<li>1/4 kašike morske soli</li>
			<li>1/4 kašike kima</li>
			<li>1 kašika vode</li>
			<br>
			Sve sastojke dodajte u blender i blendajte 30 sekundi.
			SAVJET: Poslužite sa svježim povrćem ili krekerima i uživajte u bogatstvu okusa.
			</p>
			</div>
			<div id="slika-humus" class="col-lg-6">
			<img src="https://cdn.pixabay.com/photo/2017/04/25/07/41/humus-2258810_960_720.jpg" width="541" height="500">
			</div>
		</div>
		</div>
	</body>
	<style>
	body{
		background-color:#fff2e3;
	}
	#humus-header{
		background-color:#ebcba7;
		color:white;
	}
	#tekst{
		margin-top:2%;
	}
	</style>
    
@endsection