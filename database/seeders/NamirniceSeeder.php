<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Namirnice;
class NamirniceSeeder extends Seeder
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
                'title' => 'Uravnotežena prehrana' ,
                'content' => 'Pravilna, uravnotežena prehrana treba biti bogata različitim namirnicama iz svake od 5 skupina hrane. Piramida pravilne prehrane može pomoći oko određivanja potrebne količine svih 5 skupina namirnica koju bi trebali jesti tijekom dana. Ukoliko svakodnevno jedemo različite vrste namirnica iz svake od 5 skupina, ali u prilagođenim količinama s obzirom na potrebe, spol i dob, tada će naše tijelo dobiti sve hranjive tvari koje su mu potrebne za pravilno funkcioniranje.' ,
                'image' => '/uploads' ,
                'user_id' => 1,
                'created_at' => now(),
            ],
        ];

        Post::insert($posts);    

    }
}
