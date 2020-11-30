@extends('layouts.app')
@section('content')
 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<div class="container">
		<div id="persun-header" class="header">
		<h2>Napitak za energiju od bobica i peršuna</h2>
		</div>
		<div class="row">
			<div id="tekst" class="col-lg-6">
			<h3 style="color:#571850">Smoothie od bobica i peršuna</h3>
			<p> Peršun je mediteranska biljka koja je stara više od 2000 godina. Prekrasnog je mirisa i blagog okusa, vrlo popularna u
			kulinarstvu. Sadrži nevjerovatno mnogo medicinski povoljnih tvari. Peršun ne sadrži holesterol i bogat je antioksidansima, vitaminima i
			vlaknima. Istraživanja su pokazala kako u malim dnevnim dozama pomaže u regulaciji krvnog pritiska i olakšava bol.
			Sastojci za smoothie:
			<li>1/2 šoljice peršuna</li>
			<li>1 šaka kelja</li>
			<li>1 banana</li>
			<li>1 šolja žumskog voća</li>
			<li>1 kašikica sjemenki lana</li>
			<li>1 šaka kocki leda</li>
			<li>Voda 200ml (po želji)</li> 
			<br>
			Sve sastojke dodajte u blender i blendajte 30 sekundi.
			
			</p>
			</div>
			<div id="slika-persun" class="col-lg-6">
			<img src="https://cdn.pixabay.com/photo/2018/09/23/09/01/smoothie-3696942_960_720.jpg" width="541" height="500">
			</div>
		</div>
		</div>
	</body>
	<style>
	body{
		background-color:#fff2e3;
	}
	#persun-header{
		background-color:#ebcba7;
		color:white;
	}
	#tekst{
		margin-top:2%;
	}
	</style>

@endsection