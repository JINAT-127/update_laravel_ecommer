<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Hash;
use App\Models\User;

class CreateUser extends Command
{
    
    protected $signature = 'create:user';

  
    protected $description = 'You can create an admin user';

    
    public function __construct()
    {
        parent::__construct();
    }

   
    public function handle()
    {   
        $user['roll']=$this->choice('what type of user do you want to create?',['admin','super','admin']);
        $user['name'] = $this->ask('Enter user Name');
        $user['email'] = $this->ask('Enter user Email');
        $user['password'] = Hash::make($this->secret('Enter user password'));

        
        if($this->confrim('Do you want to create the usesr?')){
            $user::create($user);
            $this->line('user has been create sucessfully');
            $this->newLine(2);
            $this->info('user has been create sucessfully');
           
        }else{
            $this->error('user has not been create'); 
        }

        User::create($user);
        $this->info('Your user has been created successfully');
    }
}
