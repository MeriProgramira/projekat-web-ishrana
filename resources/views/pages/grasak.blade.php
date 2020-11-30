@extends('layouts.app')
@section('content')
 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<div class="container">
<div id="grasak-header" class="header">
<h2>Osvježavajuća i kremasta supa od graška</h2>
</div>
<div class="row">
    <div id="tekst" class="col-lg-6">
    <h3 style="color:#571850">Osvježavajuća i kremasta supa od graška</h3>
    <p> Grašak sadrži dvostruko više proteina u odnosu na ostalo povrće. Vlakna graška pomažu u održavanju zdravlja crijeva i smanjuju 
    razinu kolesterola u krvi. Željezo i vitamin C u grašku pomažu u održavanju imuniteta. Zato, prestanite ga prebacivati u tanjir svojoj
    sestrici ili bratu i pojedite ga!<br>
    
    Za pripremu ove supe je potrebno
    <li>2 kašikice maslinovog ulja</li>
    <li>2 tanko narezane ljutike</li>
    <li>3 šoljice graška </li>
    <li>1/2 šoljice grčkog jogurta</li>
    <li>2 1/2 šoljice povrtnog temeljca</li>
    <li>Biber i so po želji</li>
    <li>Estragon</li>
    <br>
    Sve sastojke dodajte u blender i blendajte 30 sekundi. Zatim ih prelijte u lonac i kuhajte 10-15 minuta.
    Možete osraviti da se hladi u hladnjaku ili poslužiti toplo, odmah iz lonca.
    Uživajte!
    
    </p>
    </div>
    <div id="slika-grasak" class="col-lg-6">
    <img src="https://media.istockphoto.com/photos/green-peas-picture-id692622154" width="550" height="500">
    </div>
</div>
</div>
</body>
<style>
body{
background-color:#fff2e3;
}
#grasak-header{
background-color:#ebcba7;
color:white;
}
#tekst{
margin-top:2%;
}
</style>

@endsection