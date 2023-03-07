<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AddPermissionToDerectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $viewAttestationPerm = Permission::create(['name' => 'view attestation', 'guard_name' => 'web']);
        $viewMedicalPerm = Permission::create(['name' => 'view medical', 'guard_name' => 'web']);
        $viewInventoryPerm = Permission::create(['name' => 'view inventory', 'guard_name' => 'web']);

        $leaderRole = Role::create(['name' => 'leader']);
        $leaderRole->givePermissionTo($viewAttestationPerm);
        $leaderRole->givePermissionTo($viewMedicalPerm);
        $leaderRole->givePermissionTo($viewInventoryPerm);

        $director = User::where("email", "info@gsbm-group.ru")->first();
        if (!$director) {
            $director = User::create([
                "surname" => "Лопатин",
                "name" => "Роман",
                "middle_name" => "Викторович",
                "email" => "info@gsbm-group.ru",
                "email_verified_at" => Carbon::now(),
                "password" => Hash::make("zr8df59dXH"),
                "is_staff" => 1,
            ]);
        }

        $director->assignRole('leader');
    }
}
