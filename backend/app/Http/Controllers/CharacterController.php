<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;

class CharacterController extends Controller
{
    public function index(Request $request)
    {
        $query = Character::query();

        if ($request->has('role')) {
            $query->where('role', $request->input('role'));
        }

        if ($request->has('region')) {
            $query->where('region', $request->input('region'));
        }

        $characters = $query->get();

        return view('characters.index', compact('characters'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'lore' => 'nullable|string',
            'region' => 'required|string|max:255',
        ]);

        $character = Character::create($data);
        return response()->json($character, 201);
    }

    public function show($id)
    {
        $character = Character::findOrFail($id);
        return response()->json($character);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'sometimes|string|max:255',
            'role' => 'sometimes|string|max:255',
            'lore' => 'nullable|string',
            'region' => 'sometimes|string|max:255',
        ]);

        $character = Character::findOrFail($id);
        $character->update($data);
        return response()->json($character);
    }

    public function destroy($id)
    {
        $character = Character::findOrFail($id);
        $character->delete();
        return response()->json(['message' => 'Character deleted.']);
    }
}
