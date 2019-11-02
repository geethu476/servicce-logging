<?php

namespace App\Console\Commands;

use App\User;
use App\Admin;
use Illuminate\Console\Command;

class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $header = ['Email', 'Password'];

        $admin = User::where('userable_type', 'admin')->first();

        if ($admin) {
            $this->error('Admin already exists!');
            
            $body = [[$admin->email, '******']];
        } else {
            $admin = Admin::create([
                'first_name' => 'Scrap',
                'middle_name' => 'ERP',
                'last_name' => 'Admin',
                'blood_group' => 'AB',
                'gender' => 1,
                'primary_phone' => '9876543210',
                'secondary_phone' => '9876543210',
                'address' => 'Test',
                'city' => 'Trivandrum',
                'state' => 'kerala',
                'country' => 'India',
            ]);

            User::create([
                'userable_id' => $admin->id,
                'userable_type' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
            ]);

            $body = [['admin@admin.com', 'password']];
        }

        $this->table($header, $body);
    }
}
