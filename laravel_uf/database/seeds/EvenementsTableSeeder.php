<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Evenement;

class EvenementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::role('Inscrit')->get();
        foreach ($users as $user){
            $user->evenements()->saveMany(factory(Evenement::class, 3)->make());
        }
    }
}
