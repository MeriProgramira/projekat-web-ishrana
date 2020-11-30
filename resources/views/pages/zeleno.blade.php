@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<div class="container">
<div id="zeleno-header" class="header">
<h2>VRTNA ZABAVA ZELENOG POVRĆA</h2>
</div>
<div class="row">
    <div id="tekst" class="col-lg-6">
    <h3 style="color:#571850">VRTNA ZABAVA ZELENOG POVRĆA</h3>
    <p> Neka vam ova lagana smoothe kombinacija postane svakodnevna vitaminska eksplozija.
    Uz sve sastojke i samo 30 sekundi blendanja osvježenje je gotovo.
    Potrebni sastojci su
    <li> 2 šoljice miješane zelene salate</li>
    <li>1/4 avokada</li>
    <li>1/2 stabljike celera</li>
    <li>1 komadić đumbira</li>	
    <li>2,5 cm krastavca</li>
    <li>2 kašike soka od limuna</li>
    <li>Voda 200ml (po želji)</li>
    <br>
    Ubacite u blender i blendajte 30 sekundi.
    SAVJET: Dodajte nekoliko kocki leda i uživajte u osvježavajućem napitku!
    
    Poslužite i uživajte!
    </p>
    </div>
    <div id="slika-zeleno" class="col-lg-6">
    <img src="https://cdn.pixabay.com/photo/2014/08/21/00/19/green-422995_960_720.jpg" width="541" height="500">
    </div>
</div>
</div>
</body>
<style>
body{
background-color:#fff2e3;
}
#zeleno-header{
background-color:#ebcba7;
color:white;
}
#tekst{
margin-top:2%;
}
</style>

@endsection