<?php

// Location : database/seeder/

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds that :
     * Create 50 clients using the client factory
     * Then for each clients, create 3 related project, using the project factory and overiding the default client_id by the current user_id
     *
     * @return void
     */
    public function run()
    {

        $clients = factory(App\Client::class, 50)
            ->create()
            ->each(function ($client) {
                $client->projects()->saveMany(factory(App\Project::class, 3)
                ->make());
            });

    }
}
