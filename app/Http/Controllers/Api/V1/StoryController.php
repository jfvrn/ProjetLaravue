<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Story;
use Illuminate\Http\Request;
use App\Http\Requests\StoryRequest;

class StoryController extends Controller
{
    public function index()
    {
        return Story::with('passages')->get();
    }

    public function show($id)
    {
        return Story::with('passages')->findOrFail($id);
    }

    public function store(StoryRequest $request)
    {
        $story = Story::create($request->validated());
        return response()->json($story, 201);
    }

    public function update(StoryRequest $request, $id)
    {
        $story = Story::findOrFail($id);
        $story->update($request->validated());
        return response()->json($story);
    }

    public function destroy($id)
    {
        $story = Story::findOrFail($id);
        $story->delete();
        return response()->json(null, 204);
    }
}
