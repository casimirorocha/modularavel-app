<?php

namespace Modules\UserMedia\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserMediaDatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");
    }
}
