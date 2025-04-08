<?php

namespace Database\Seeders;

use Carbon\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Entry;
use App\Models\User;
use Database\Factories\EntryFactory;

class EntriesTableSeeder extends Seeder
{
	use hasFactory;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		$users = User::all();
		$users->each(function($user){
			EntryFactory::new()->count(10)->create([
				'user_id' => $user->id
			]);
		});
	}
}
