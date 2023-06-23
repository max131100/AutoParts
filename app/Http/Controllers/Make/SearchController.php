<?php

namespace App\Http\Controllers\Make;
use App\Http\Controllers\Controller;
use App\Http\Requests\Make\SearchRequest;
use App\Models\CarMake;
use Illuminate\Http\Request;


class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $term = $request->input('q');

        $makes = CarMake::where('name', 'LIKE', '%'.$term.'%')->get();

        $results = [];

        foreach ($makes as $make) {
            $results[] = [
                'id' => $make->id,
                'text' => $make->name
            ];
        }

        return response()->json($results);
    }
}
