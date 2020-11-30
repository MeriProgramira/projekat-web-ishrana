@extends('layouts.app')
@section('content')
 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<div class="container">
<div id="sladoled-header" class="header">
<h2>Sladoled od banane i kikiriki putera</h2>
</div>
<div class="row">
    <div id="tekst" class="col-lg-6">
    <h3 style="color:#571850">Sladoled od banane i kikiriki putera</h3>
    <p> Ukusni neodoljivi zdravi sladoled.
    Narežite banane na komadiće veličine zalogaja. Sastavite banane i kikiriki puter u blender i blendajte dok smjesa ne postane
    kremasta i glatka. Poslužite odmah ili zamrznite čvršći strukturu. Na gotovi sladoled dodajte vaš omiljeni preljev,
    badeem ili komadiće čokolade.
    Količina sastojaka je dovoljna za dvije šalice sladoleda.
    SASTOJCI:
    <li>2 zaleđene banane</li>
    <li>2 kašike kikiriki putera</li>
    <br>
    Ubacite u blender i blendajte 30 sekundi.
    
    Poslužite i uživajte!
    </p>
    </div>
    <div id="slika-sladoled" class="col-lg-6">
    <img src="https://cdn.pixabay.com/photo/2018/03/20/21/09/sweet-3244685_960_720.jpg" width="541" height="500">
    </div>
</div>
</div>
</body>
<style>
body{
background-color:#fff2e3;
}
#sladoled-header{
background-color:#ebcba7;
color:white;
}
#tekst{
margin-top:2%;
}
</style>

@endsection