<?php

use App\Models\Quotes;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

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
})->purpose('Display an inspiring quote');

Artisan::command('create:quote ', function () {
    $authors = [];
    $quotes = $this->withProgressBar(Quotes::all(), function (Quotes $quote) {
        $authors[] = $quote->author;
    });

    $this->table(
        ['Quote', 'Author'],
        Quotes::all(['quote', 'author'])->toArray()
    );
    $name = $this->choice(
        'What is your name?',
        ['Taylor', 'Dayle'],
        0,
        $maxAttempt = 2
    );
    $quote = $this->ask('Write you Quote');
    $author = $this->ask('Your author name please');

    if (isset($quote) && isset($author)) {
        if ($this->confirm('Do you Want to add to the Database?', true)) {
            Quotes::create([
                'quote' => $quote,
                'author' => $author
            ]);
            $this->info('SuccessFully add to the database');
        } else {
            $this->warn('Not Added to the Database');
        }
    } else {
        $this->warn('Provide the data Please');
    }
})->purpose('To Quickly Create a Quote');
