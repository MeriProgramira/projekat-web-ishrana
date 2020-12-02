<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title' => '3 velika razloga zašto biste trebali jesti tamnu čokoladu' ,
                'content' => 'Za razliku od komercijalno dostupne čokolade koja je krcata šećerima i siromašna antioksidansima, tamna je čokolada pravi rudnik antioksidansa. Možda i
                ptice na grani znaju da ima nešto u tim tamnim čokoladama no jeste li spremni upoznati ju pravom svjetlu i svaki dan pojesti barem kockicu, ako ne i red čokolade?
                Oko 45 grama smatra se jednom porcijom čokolade.
                Tamna čokolada sadrži poprilične količine flavonoida blagotvornih za naše zdravlje. Tih antioksidansa također ima u crnome vinu i mnogim vrstama voća i povrća.
                Čini se ipak kako upravo tamna čokolada ima više flavonoida od bilo koje druge namirnice. Istraživanja pokazuju da antioksidansi iz čokolade mogu poboljšati krvni tlak,
                spriječiti nastanak krvnih ugrušaka, usporiti oksidaciju LDL kolesterola te smanjiti upalne procese. Neka istraživanja ukazuju na to da 45 grama tamne čokolade na dan može
                 smanjiti rizik od srčanog udara za 10%. Konzumiranje tamne čokolade također može smanjiti inzulinsku rezistenciju, glavni problem koji stoji iza dijabetesa.
                Mnoge se osobe samostalno deklariraju kao ovisnici o čokoladi ili «čokoholičari», iako se ne može sa sigurnošću tvrditi da čokolada može stvoriti ovisnost.Naime, razina
                kofeina je premala da bi izazvala ovisnost, ali ipak neka istraživanja ukazuju na blago opojne učinke čokolade – smanjenje stresa i osjećaj blage, bezopasne euforije.' ,
                'image' => '/uploads/cokolada.jpg' ,
                'user_id' => 1,
                'created_at' => now(),
            ],
            [
                'title' => 'Maslinovo ulje' ,
                'content' => 'Jeste li se ikada zapitali zašto vaša baka svako jutro popije žlicu maslinovog ulja? Njezin odgovor sigurno bi uključivao pojmove zdravlje, dugovječnost ili samo stvar navike. Otkrijmo zajedno koji su blagotvorni učinci ove navike, te postoji li možda i koji negativni aspekt cijele priče.
                Brojni su blagotvorni učinci maslinova ulja
                Maslinovo ulje može se pohvaliti snažnim zaleđem znanstvenih istraživanja. Cijeli niz studija potvrdio je njegovo blagotvorno djelovanje na organizam, poput protuupalnog i antioksidativnog djelovanja, te zaštitne uloge od razvoja različitih kroničnih bolesti. Isto tako, maslinovo ulje bogato je prirodnim antioksidansima, ponajprije zelenim klorofilom i žutim beta karotenom. U prirodne antioksidanse maslinova ulja ulaze i
                tzv. tokoferoli s najvažnijim predstavnikom alfa tokoferolom, odnosno vitaminom E koji također djeluje antioksidativno, te sudjeluje u održavanju zdravlja imunosnog sustava.' ,
                'image' => '/uploads/maslinovoulje.jpg' ,
                'user_id' => 1,
                'created_at' => now(),
            ],
            [
                'title' => 'Kako napraviti učinkoviti popis za kupovinu?' ,
                'content' => 'Kupovina namirnica može biti težak zadatak, čak i za osobe koje su vrlo organizirane. Mnogo je primamljivih namirnica u nepreglednim redovima supermarketa,
                 koje vas mame da prekršite svoje uobičajene prehrambene navike. Stoga je popis za kupovinu zgodan alat koji vam može pomoći da se nastavite pridržavati svojih uobičajenih
                 prehrambenih navika, a osim toga može vam pomoći u smanjenju impulzivnih kupnji te samim time i u štednji novca.
                Još jedna prednost korištenja popisa za kupovinu je štednja vremena jer omogućuje pravilan odabir namirnica, a samim time i pravilan odabir sastojaka za obroke
                tijekom cijelog tjedna.           Pozitivne učinke popisa za kupovinu potvrdile su i znanstvena istraživanja. Jedno od njih pokazalo je kako korištenje popisa
                za kupovinu pomaže u održavanju pravilnih prehrambenih navika, pa čak i u gubitku suvišnih kilograma. tava.' ,
                'image' => '/uploads/kupovina.png' ,
                'user_id' => 1,
                'created_at' => now(),
            ],
        ];

        Post::insert($posts);
    }
}
