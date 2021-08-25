<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class reg extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $table=new user();
        $table->name="Faizan";
        $table->email="faizanr67@yahoo.com";
        $table->password=bcrypt(123456789);
        $table->role_id=2;
        $table->save();
    }
}
