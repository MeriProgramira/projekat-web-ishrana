@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<div class="container">
<div id="obrok-header" class="header">
<h2>Mediteranski Obrok</h2>
</div>
<div class="row">
    <div id="tekst" class="col-lg-6">
    <h3 style="color:#571850">Mediteranski Obrok</h3>
    <p> Priprema ove mediteranske senzacije je veoma jednostavna, pokušajte.<br>
    
    Za pripremu ovog obroka vam je potrebno	
    <li>1 šoljica listova svježeg bosiljka</li>
    <li>1 režanj bijelog luka</li>
    <li>2 kašikice punjola</li>
    <li>1/3 šoljice maslinovog ulja</li>
    <li>1/4 šoljice parmezana</li>
    <li>So i biber po želji</li>
    <li>file ribe</li>
    <li>1 šoljica Cherry paradajza</li>
    <li>1/2 kašikice sušenog bosiljka</li>
    <br>
    Zagrijte rernu na 190° C. Namastite pekač uljem.
    U malu zdjelicu stavite narezane cherry rajčice, maslinovo ulje i sušeni bosiljak. Ostavite sa strane. 
    U blender ubacite bosiljak, bijeli luk, pinjole, maslinovo ulje i parmezan.
    Blendajte dok ne dobijete gusti pesto a zatim začinite sa soli i biberom.
    Isperite i filetirajte ribu, osušite je papirom i prebacite u pekač.
    Stavite pesto na ribu i na to posložite cherry rajčice.
    Pecite otprilike 10 minuta dok riba ne postane neprozirna.
    
    </p>
    </div>
    <div id="slika-obrok" class="col-lg-6">
    <img src="https://cdn.pixabay.com/photo/2020/09/27/11/48/cherry-tomatoes-5606443_960_720.jpg" width="541" height="500">
    </div>
</div>
</div>
</body>
<style>
body{
background-color:#fff2e3;
}
#obrok-header{
background-color:#ebcba7;
color:white;
}
#tekst{
margin-top:2%;
}
</style>   
@endsection