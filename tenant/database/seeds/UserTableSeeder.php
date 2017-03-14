
<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
  public function run()
  {
    DB::table('users')->delete();
    
    User::create(array(
    	'name'     => 'vidhya',
        'email'    => 'vidhya@gmail.com',
        'password' => Hash::make('vidhya'),
    ));
  }
}