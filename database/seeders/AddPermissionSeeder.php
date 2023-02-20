<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class AddPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('permissions')->insert([
//            ['name' => 'manage attestation','guard_name' => 'web'],
//            ['name' => 'manage medical','guard_name' => 'web'],
//            ['name' => 'manage inventory','guard_name' => 'web']
//        ]);

        $superUser = User::where("email", "evd.work@yandex.ru")->first();
        $attestationAdmin = User::where("email", "averholanceva@gsbm-group.ru")->first();
        $attestationAdmin2 = User::where("email", "Aleksa-Pazdnikova@yandex.ru")->first();
        $med = User::where("email", "k.zhdahina@gsbm-group.ru")->first();

        if ($superUser) {
            $superUser->givePermissionTo([
                'manage service', 'manage course', 'manage attestation', 'manage medical', 'manage inventory'
            ]);
        }

        if ($attestationAdmin) {
            $attestationAdmin->update(["is_staff" => 1]);
            if (! $attestationAdmin->hasRole('admin')) {
                $attestationAdmin->assignRole('admin');
            }
            $attestationAdmin->givePermissionTo([
                'manage service', 'manage course', 'manage attestation'
            ]);
        }

        if ($attestationAdmin2) {
            $attestationAdmin2->update(["is_staff" => 1]);
            if (! $attestationAdmin2->hasRole('admin')) {
                $attestationAdmin2->assignRole('admin');
            }
            $attestationAdmin2->givePermissionTo([
                'manage service', 'manage course', 'manage attestation'
            ]);
        }

        if ($med) {
            $med->update(["is_staff" => 1]);
            if (! $med->hasRole('admin')) {
                $med->assignRole('admin');
            }
            $med->givePermissionTo('manage attestation');
        }
    }
}
