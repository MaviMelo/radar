<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar os dados recebidos da Request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'device_token' => 'sometimes|string',
            'user_id' => 'required|integer|exists:users,id'
        ]);

        // Criar um novo dispositivo no banco de dados usando o Model Device
        $device = Device::create($validatedData);

        // Retornar uma resposta de sucesso em JSON
        return response()->json([
            'mensage' => 'dispositivo registrado com sucesso',
            'data' => $device
        ], 201); // código 201 = "Created" (criado)
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
