<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Counter;
use App\Models\Products;
use App\Models\Invoice;
use App\Models\InviceItem;




// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //  Counter::factory(1)->create();
        // Products::factory(5)->create();
        // Invoice::factory(5)->create();
        InviceItem::factory(5)->create();


        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
