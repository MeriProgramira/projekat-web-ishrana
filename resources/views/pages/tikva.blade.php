@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<div class="container">
<div id="tikva-header" class="header">
<h2>Krem juha od tikve</h2>
</div>
<div class="row">
    <div id="tekst" class="col-lg-6">
    <h3 style="color:#571850">Krem juha od tikve</h3>
    <p>Boja bundeve ukazuje da je ova namirnica bogat izvor beta karotena.
    Beta karoten je snažan antioksidans koji štiti organizam od utjecaja slobodnih radikala, 
    jača imunitet i sprečava razvoj malignih tumora.
    Uz njega tu su i vitamini C, E, K, B1, B2, B3, B6, folna kiselina i mineralni sastojci kalij, fosfor, kalcij i željezo.<br>
    
    Potrebni sastojci:
    
    <li>1 režanj bijelog luka</li>
    <li>5 listića kadulje</li>
    <li>1 Butternut tikva</li>
    <li>1/4 šoljice indijskih oraščića</li>
    <li> 1 kašikica morske soli</li>
    <li>Šoljica vode</li>
    <br>
    Pecite tikvu. Prerežite je na pola, odstranite sjemenke, namažite je s 1 kašikicom maslinovog ulja i pecite na 200 °C - 55 minuta ili
    dok viljuška s lakoćom ne prolazi kroz tikvu.<br>
    Ostavite da se ohladi do sobne temperature i izblendajte u blenderu.
    Uživajte!
    
    </p>
    </div>
    <div id="slika-tikva" class="col-lg-6">
    <img src="https://cdn.pixabay.com/photo/2016/03/28/15/13/cream-1285948_960_720.jpg" width="541" height="500">
    </div>
</div>
</div>
</body>
<style>
body{
background-color:#fff2e3;
}
#tikva-header{
background-color:#ebcba7;
color:white;
}
#tekst{
margin-top:2%;
}
</style>    
@endsection