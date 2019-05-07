<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unions')->insert([
            'initials' => 'UCB',
            'slug' => Str::slug('UCB'),
            'name' => Str::random(20),
        ]);

        DB::table('unions')->insert([
            'initials' => 'ULB',
            'slug' => Str::slug('ULB'),
            'name' => Str::random(20),
        ]);

        DB::table('unions')->insert([
            'initials' => 'UCoB',
            'slug' => Str::slug('UCoB'),
            'name' => Str::random(20),
        ]);

        DB::table('unions')->insert([
            'initials' => 'UNB',
            'slug' => Str::slug('UNB'),
            'name' => Str::random(20),
        ]);

        DB::table('unions')->insert([
            'initials' => 'UNeB',
            'slug' => Str::slug('UNeB'),
            'name' => Str::random(20),
        ]);

        DB::table('unions')->insert([
            'initials' => 'UNoB',
            'slug' => Str::slug('UNoB'),
            'name' => Str::random(20),
        ]);

        DB::table('unions')->insert([
            'initials' => 'USB',
            'slug' => Str::slug('USB'),
            'name' => Str::random(20),
        ]);

        DB::table('unions')->insert([
            'initials' => 'USeB',
            'slug' => Str::slug('USeB'),
            'name' => Str::random(20),
        ]);
    }
}
