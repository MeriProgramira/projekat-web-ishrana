<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recept;

class ReceptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recepti = [
            [
                'title' => 'VARIVO OD SLANUTKA' ,
                'complexity' => 'lagano' ,
                'short_description' => 'Varivo za zagrijavanje izvana i iznutra sadrži sve sastojke tipičnog...' ,
                'ingredients' => '1 Fant mješavina za grah i variva 3 žlice maslinovog ulja 1 poriluk (200 g)
                                 2 češnja češnjaka ½ ljute papričice 500 g kuhanog Slanutka Podravka 100 ml Passate Podravka 120 g špinata' ,
                'preparation' => ' Sadržaj vrecice Fanta pomiješajte sa 100 ml mlake vode i ostavite stajati nekoliko minuta.
                Na maslinovom ulju popecite narezani poriluk i protisnuti češnjak. Dodajte narezanu ljutu papričicu, slanutak i prelijte vodom (oko 700 ml).
                Umiješajte pripremljeni Fant i passatu.
                Kad zavrije umiješajte narezani špinat i kuhajte 5-10 minuta.

                Posluživanje

                Poslužite toplo s popečenim kruhom.
                Savjet

                Po želji varivo možete napraviti od više vrsta mahunarki.
                Ukoliko nemate svježeg špinata zamijenite ga zamrznutim.
            ' ,
                'dish_type' => 'glavno jelo' ,
                'image' => '/uploads/slanutak.png' ,
                'user_id' => 1,
                'created_at' => now(),
            ],
            [
                'title' => 'RAZEVNI HLJEB' ,
                'complexity' => 'srednje zahtjevno' ,
                'short_description' => 'Mekan i preukusan hljeb od kombinacije psenicnog i razevnog brasna' ,
                'ingredients' => 'psenicno brasno, razevno brasno, sol, kvasac, voda, malo ulja' ,
                'preparation' => 'U veću posudu staviti brašno,kvasac,šećer,sol i sjemenke po želji.Kuhačom sve na suho lagano promiješati,pa postepeno uz miješanje dodavati vodu.
                Potrebno je da nigdje nema vidljivih tragova suhog brašna. Smjesa je jako ljepljiva i izgleda slično žgancima,ali neka vas to ne obeshrabri jer baš takva mora biti.
                Pripremite veći pleh  i obložite ga papirom za pečenje.
                Nakon što ste sve izmiješali,vlažnim rukama smjesu prebacite u tepsiju i oblikujte u štrucu..Budući je smjesa jako ljepljiva ja si za oblikovanje
                kruha pomognem žlicom. Na kraju samo nožem lagano zarežite kruh odozgora ili napravite mrežu..Po želji posipati sjemenkama.
                Pećnicu zagrijati na max.temperaturu,,oko  220,240..Dokle god se pećnica ne ugrije kruh neka se diže na sobnoj temperaturi prekriven kuh.krpom.
                U zagrijanoj pećnici pecite ga 40 do 45 minuta.Čim ga izvadite prekrijte navlaženom kuh.krpom par minuta da malo otpusti..Ostaviti ga hladiti i
                tek skroz ohladjenog rezati i servirati.' ,
                'dish_type' => 'hljeb i peciva' ,
                'image' => '/uploads/razanihljeb.jpg' ,
                'user_id' => 1,
                'created_at' => now(),
            ],
            [
                'title' => 'KREMPITA' ,
                'complexity' => 'srednje zhtjevno' ,
                'short_description' => 'divan kremasti kolac kome su jaja glavni sastojak' ,
                'ingredients' => 'jaja, secer, brasno, mlijeko, vanilin secer, lisnato tijesto' ,
                'preparation' => 'Prvo ispecite kore od lisnatog tijesta (dovoljno je 1/2 pakovanja od 500 gr). Polovicu tijesta podijeli na pola, razvaljaj  koru malo više
                od veličine pleha jer se pecenjem skupi. Pleh isplahni hladnom vodom na onoj strani na kojoj će se peći kore. Staviti koru i izbosti vilicom,
                na par mjesta. Peci   dok ne požuti  cca 5-8 min.  Prvu koru stavi na dno, a drugu ostavi  za gore i  narežite je na kocke.
                Ako želite mekaniju koru gore  posložite kocke jednu do druge na vruću kremšnitu... A ako volite hrskaviju staviti kad se ohladi  sutradan...' ,
                'dish_type' => 'deserti' ,
                'image' => '/uploads/krempita.jpg' ,
                'user_id' => 1,
                'created_at' => now(),
            ],
        ];

        Recept::insert($recepti);
    }
}
