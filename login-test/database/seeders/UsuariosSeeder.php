<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $richard = new User;
        $richard->name = "Richard";
        $richard->email = "brees@iconicamx.dev";
        $richard->password = Hash::make('Brees94.');
        $richard->save();
    }
}
