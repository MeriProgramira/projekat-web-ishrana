<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Namirnica;

class NamirnicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $namirnice = [
            [
                'title' => 'Jabuka - kraljica voća' ,
                'type' => 'voce' ,
                'content' => 'Hiljadama godina su mnoge kulture visoko vrednovale jabuku i njena lekovita svojstva. Danas moderna istraživanja samo potvrđuju ono što su naši
                    preci znali i bez labaratorijskih ispitivanja i analiza. Postoje stotine objavljenih studija i radova koji pokazuju zašto je jabuka jedan od najzdravijih voćnih
                    proizvoda.

                    Istraživači navode pet glavnih razloga za jednu ili dve jabuke u dnevnoj ishrani:

                    1. Najbolja prirodna užina – jabuka u proseku sadrži 115 kalorija i 5 grama punjenih vlakana. Ona je dobar izvor vitamina C i ne sadrži masti, natrijum ni
                    holesterol. Bez obzira na vrstu, jabuke su izvor antioksidanata na biljnoj bazi i sve se preporučuju za unapređenje zdravlja. Ne savetuje se ljuštenje jabuka,
                    jer se dve trećine vlakana i antioksidanata nalazi u kori jabuke. Mogu se jesti i kao predjelo u vidu soseva i za desert, i to u skoro svako doba godine.

                    2. Smanjuje rizik od raka – istraživanje pokazuje da jabuka može da smanji rizik od raka i obezbedi zaštitu od određenih vrsta raka poputraka jednjaka, vrata, pluća,
                    debelog creva, dojke, jajnika i prostate.

                    3. Bolje su od dijeta – jabuke sadrže rastvorljiva vlakna i kiselinu, a to je u stvari prirodan preparat za sagorevanje masti. Ranija istraživanja pokazala su
                    da dve od tri jabuke dnevno mogu uticati na smanjenje od 2 kilograma za 10 nedelja, što je više nego što obećavaju dijete koje ne sadrže jabuke u ishrani.' ,
                'content1' => 'Jabuka neće zamijeniti četkicu i pastu za zube, no konzumacija jabuke će zube svakako ojačati.

                    Polaganim žvakanjem jabuke čiste se zubi i uništavaju štetne bakterije u usnoj šupljini.

                    Jabuka sadrži fosfor, kalcij i fluor koji pomažu pri sprečavaju razvoj karijesa.

                    Vjerovali ili ne, pranjem zubiju uništavamo 60 posto bakterija u ustima, a jedenjem jabuke čak 90 posto.' ,

                'image' => '/uploads/Jabuke.jpg' ,
                'user_id' => 1,
                'created_at' => now(),
            ],


        ];

        Namirnica::insert($namirnice);
    }
}
