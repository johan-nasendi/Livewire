<?php

use Illuminate\Database\Seeder;
use App\Contact;
class ContactTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Contact::class, 10)->create();
    }
}
