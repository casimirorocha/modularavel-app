<?php

namespace Modules\Profile\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProfileDatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");
    }
}
