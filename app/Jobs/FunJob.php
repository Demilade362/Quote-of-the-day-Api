<?php

namespace App\Jobs;

use App\Models\Quotes;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class FunJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 5;

    /**
     * Create a new job instance.
     */
    public function __construct(public array $quotes)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Quotes::create([
            'quote' => $this->quotes['quote'],
            'author' => $this->quotes['author']
        ]);
    }
}
