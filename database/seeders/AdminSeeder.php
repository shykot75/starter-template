<?php

namespace Database\Seeders;

use App\Models\Admin\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\Admin\AdminEnum;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            AdminEnum::FIRST_NAME => 'Super',
            AdminEnum::LAST_NAME => 'Admin',
            AdminEnum::NAME => 'Super Admin',
            AdminEnum::USERNAME => 'super_admin',
            AdminEnum::EMAIL => 'super@admin.com',
            AdminEnum::PASSWORD => Hash::make('12345678'),
            AdminEnum::PHONE_NO => '1234567890',
            AdminEnum::STATUS => 1,
            AdminEnum::ROLE_ID => 1,
        ]);
    }
}
