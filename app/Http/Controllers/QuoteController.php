<?php

namespace App\Http\Controllers;

use App\Http\Resources\QuoteResource;
use App\Models\Quotes;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuoteController extends Controller
{
    /**
     * Get Random Quotes
     *
     * This Route Get a Random Quote from the Api and will return a status code of 200 if the quote is found
     *
     * Otherwise, the request will fail with a 404 error,and not quotes is found
     *
     * @responseField Returns It get's you a random quote.
     */
    public function index()
    {
        $id = Quotes::all()->pluck('id');
        $quotes = rand(1, count($id));
        try {
            return new QuoteResource(Quotes::findorFail($quotes));
        } catch (\Exception $e) {
            return response(
                [
                    "message" => "No Quote Retrieved"
                ],
                404
            );
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
    /**
     * Search Quotes with Author Names
     *
     * This Route Search for a Quote from the Api using author names this will return a status code of 200 if the quote with the author name is found
     *
     * Otherwise, the request will fail with a 404 error,and not quotes is found
     *
     * @urlParam quotes_author The Author Name Example: Demilade
     * @responseField Returns Get you a quote from the api based on the search input.
     */
    public function search(string $author)
    {
        return QuoteResource::collection(Quotes::author($author));
    }

    /**
     * Get Quotes Based On an ID
     *
     * This Route Get a Quote from the Api based on the ID given and will return a status code of 200 if the quote is found
     *
     * Otherwise, the request will fail with a 404 error, because no quote with that ID is found
     * @responseField Returns It get's you a random quote by an ID.
     */
    public function show(Quotes $quotes)
    {
        return new QuoteResource($quotes);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quotes $quotes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quotes $quotes)
    {
        //
    }
}
