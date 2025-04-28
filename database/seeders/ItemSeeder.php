<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Warehouse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $warehouse = Warehouse::first();
        Item::create([
            'name' => 'Sepatu Niki 2025',
            'warehouse_id' => $warehouse->id,
             'stock' => 12,
            'type' => 'Pakaian',
            'status' => 'in',
            'code' => '2025GG20',
            'grade' => 'b'
        ]);
    }
}
