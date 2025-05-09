<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\WordResource;
use App\Filters\WordFilter;
use App\Models\Word;
use Illuminate\Http\Request;


class WordController extends Controller
{
    public function index(Request $request)
    {
        $filter = new WordFilter();
        $queryItems = $filter->transform($request);
        
        $words = Word::where($queryItems); 
    
        if ('includeDefinition'){
            $words = $words->with('definition');
        }
        return new WordResource(resource: $words->paginate()->appends($request->query()));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return a view for creating a new theme (if applicable)
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Word $word)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Word $word)
    {
        // Return a view for editing the theme (if applicable)
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Word $word)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Word $word)
    {
        
    }
}
