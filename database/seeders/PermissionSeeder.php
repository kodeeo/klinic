<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::updateOrCreate([
            'name' => 'Service Details',
            'slug' => 'admin.service.details',
        ]);

        Permission::updateOrCreate([
            'name' => 'Service Edit',
            'slug' => 'admin.service.edit',
        ]);
        Permission::updateOrCreate([
            'name' => 'Service Delete',
            'slug' => 'admin.service.delete',
        ]);
    }
}
