<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    { factory(\App\Delivery_terms::class, 10) -> create();
        factory(\App\Transports::class, 10) -> create();
        factory(\App\Payment_terms::class, 10) -> create();
        factory(\App\Bank_entity::class, 10) -> create();
        factory(\App\Discount::class, 10) -> create();
        factory(\App\Companies::class, 10) -> create();
       /**factory(\App\Families::class, 10) -> create();
        factory(\App\Article::class, 10) -> create();
        factory(\App\Products::class, 10) -> create();
        factory(\App\Orders::class, 10) -> create();
        factory(\App\Delivery_note::class, 10) -> create();
        factory(\App\Invoice::class, 10) -> create();
        factory(\App\Order_lines::class, 10) -> create();
        factory(\App\Delivery_note_lines::class, 10) -> create();
        factory(\App\Contain_art_orderline::class, 10) -> create();
        factory(\App\Contain_art_delivlines::class, 10) -> create();
        factory(\App\Invoice_lines::class, 10) -> create();
        factory(\App\Contain_art_invlines::class, 10) -> create();*/

        factory(\App\User::class, 10) -> create();
        factory(\App\User::class)->create(
            [
            'firstname' => 'Tomas',
            'secondname' => 'Mota',
            'email' => 'admin@admin.com',
            'password' => '12345678',
            'actived' => 1,
            'email_confirmed' => 1]
        );
        // $this->call(UsersTableSeeder::class);
    }
}
