<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Http;

class QuoteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

    public function getPhoto($url)
    {
        $reponse = Http::get($url);
        return $reponse['results'][0]['picture'];
    }


    public function toArray(Request $request): array
    {
        return [
            "quote" =>  $this->quote,
            "author" => $this->author,
            "authorPhoto" => $this->getPhoto('https://randomuser.me/api/')
        ];
    }
}
