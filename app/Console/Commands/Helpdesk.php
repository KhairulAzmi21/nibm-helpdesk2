<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Helpdesk extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'helpdesk:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sets up the database as required for running Ticketit. Run this only once, before making any modifications to project files.';

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
    public function handle(){
        $this->welcome();
        // $this->createDatabase();
        // $this->migrate();
        // $this->registerAdmin();
        // $this->enableTicketit();
        // $this->setupTicketit();
        // $this->installPresets();
        // $this->setUpMail();
        // $this->removeInstaller();

    }
     private function welcome(){
        $this->line("Welcome to Nibm Helpdesk!\n");
        $this->line("You can use Ctrl+C to exit the installer any time.\n");
    }
}
