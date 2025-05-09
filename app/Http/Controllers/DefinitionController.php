<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\DefinitionResource;
use App\Models\Definition;
use Illuminate\Http\Request;
use App\Filters\DefinitionFilter;

class DefinitionController extends Controller
{
    public function index(Request $request)
    {
        // Return all themes as a JSON response
        $filter = new DefinitionFilter();
        $queryItems = $filter->transform($request);

        $definitions = Definition::where($queryItems);

        return new DefinitionResource(
            $definitions->paginate()->appends($request->query())
        );
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
    public function show(Definition $definition)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Definition $definition)
    {
        // Return a view for editing the theme (if applicable)
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Definition $definition)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Definition $definition)
    {
        
    }
}
