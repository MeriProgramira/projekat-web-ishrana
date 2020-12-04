<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producer;

class ProducerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $producers = [
            [
                'title' => 'Poljoprivredno gazdinstvo Grgić' ,
                'location' => 'Vitez, Bosna' ,
                'products' => 'jaja, pilce meso' ,
                'about' => 'Tek mu je 18 godina, no Nikica Grgić iz Šantića kod Viteza već je u poljoprivredno-poduzetničkim vodama!

                Osnovao je farmu s 200 koka domaće pasmine Bosanska kokoš koja, kaže, nosi najkvalitetnija domaća jaja na prostoru Srednje Bosne, ali i šire.
                Proizvodnja domaćih jaja je organska u sklopu Poljoprivrednog gazdinstva Grgić.
                "Završio sam srednju kuharsku školu i nisam mogao naći posao u svojoj struci. Mnogi su mladi otišli, a nakon godine dana traženja posla sinula
                mi je ideja. Pošto živimo u okolici Viteza mjesto Šantići - to je jedno malo selo s puno pašnjaka i kvalitetne zemlje, želio sam nešto drugačije,
                nešto da proizvodim, a da to ne bude paprika i plastenici jer to dosta naroda ima u BiH. Ima i domaćih jaja ali nema pravu farmu sa 200 koka domaće
                 pasmine Bosanska kokoš koja nosi najkvalitetnija domaća jaja", objašnjava Nikicu ideju.' ,
                'image' => '/uploads/koka.jpg' ,
                'user_id' => 1,
                'created_at' => now(),
            ],
            [
                'title' => ' "Aronija" - vocnaci i prerada' ,
                'location' => 'Dokanj, Tuzla Bosna' ,
                'products' => 'aronija, susena i prirodni 100% sok od aronije' ,
                'about' => 'Iza firme "Aronija", stoji mladi poduzetnik kojim koji već sedam godina ima uspješnu softversku tvrtku, a poučen svojim poduzetničkim iskustvom,
                 razmišljao je svojom glavom kad se odlučio upustiti  u poljoprivrednu avanturu i umjesto maline posadio - aroniju. Ističe da aronija, iako je prijek lijek za
                 zdravlje, mnogi smatraju da svježe bobice imaju trpak okus koji skuplja usta. "Na sreću, tu je sok od aronije koji je odličan način konzumiranja ovog dara prirode.
                 Većinu prošlogodišnjeg soka smo prodali. Ostavili smo određenu količinu soka za osobne potrebe. Planiramo praviti džem, čaj i vino od aronije, ali naša proizvodnja
                 bit će bazirana na proizvodnji soka od aronije kao i jabuke, šljive i kruške kad proširimo proizvodnju."' ,
                'image' => '/uploads/aronija.jpg' ,
                'user_id' => 1,
                'created_at' => now(),
            ],
            [
                'title' => ' Farma koza "Bjelkica"' ,
                'location' => 'Lukavac, Bosna' ,
                'products' => 'kozije mlijeko, mladi i tvrdi koziji sir, sirutka' ,
                'about' => 'Na imanju od 25 hektara nalazi se oko 100 grla alpskih koza koje su 2014. uvezene iz Švicarske. Farma ima zaokruženi tijek proizvodnje,
                 gdje se na istoj lokaciji obavlja uzgoj vlastitog podmlatka, od jarića, jarčeva za rasplod, koza koje proizvode mlijeko pa sve do proizvodnje sira.
                 Na ovaj način organizira se vlastiti remont stada. Izvršena je dogradnja farme zbog povećanja kapaciteta stada, čime su se stekli uvjeti za visoku i
                 kvalitetnu proizvodnju mlijeka i sira. Trenutno je na farmi 50 koza u mužnji uz dnevnu proizvodnju od 100 litara mlijeka visoke kvalitete.' ,
                'image' => '/uploads/goat.jpg' ,
                'user_id' => 1,
                'created_at' => now(),
            ],
        ];

        Producer::insert($producers);
    }
}
