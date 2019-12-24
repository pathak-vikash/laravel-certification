<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');


Artisan::command('demo', function () {
    //dd($this->arguments());

    $name = $this->ask('What is your name?');
    $password = $this->secret('What is the password?');

    $this->info("Name: ". $name);
    $this->info("Password: ". $password);

    # asking for confirmation
    if ($this->confirm('Do you wish to continue?')) {
        $this->line("You have selected Yes");
    }else{
        $this->error("You have selected no");
    }

    # Auto -completion
    $name = $this->anticipate('What is your name?', ['Taylor', 'Dayle']);

    # Multiple Choices
    $name = $this->choice('What is your name?', ['Taylor', 'Dayle'], 1);
})->describe('Display an inspiring quote');


