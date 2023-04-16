<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Role::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request)
    {
        try {
            $role = Role::create($request->validated());
            return response()->json(['message' => 'success', 'data' => $role]);
        } catch(\Exception $ex) {
            return response()->json(['message' => 'error', 'error' => $ex]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return $role;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        try {
            $updated = Role::where('id', $role->id)->update($request->validated());
            return response()->json(['message' => 'success', 'data' => $updated]);
        } catch(\Exception $ex) {
            return response()->json(['message' => 'error', 'error' => $ex]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        try {
            $role = Role::where('id', $role->id)->delete();
            return response()->json(['message' => 'success', 'data' => $role]);
        } catch(\Exception $ex) {
            return response()->json(['message' => 'error', 'error' => $ex]);
        }
    }
}
