<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicePrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = Service::all();
        foreach ($services as $key => $service) {
            if ($service->id == '5') {
                $service->update(['priority' => 1]);
            } else {
                $service->update(['priority' => $key+2]);
            }
        }
    }
}
