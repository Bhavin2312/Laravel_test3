<?php

namespace App\Http\Controllers;
use App\Models\Permissions;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    // Show permission page
    public function index()
    {
        $permissions = Permissions::orderBy('created_at', 'desc')->paginate(3);
        return view('permissions.list', ['permissions' => $permissions]);

    }

    // create permission 
    public function create()
    {
        return view('permissions.create');
    }

    // insert a perission
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255|unique:permissions,name',
        ]);

        // Create the permission
        Permissions::create([
            'name' => $request->input('name'),
            'guard_name' => 'web',
        ]);

        // Redirect to the permissions index page with a success message
        return redirect()->route('permissions.index')->with('success', 'Permission created successfully.');
    }

    // Edit permission page
    public function edit()
    {
        // Assuming you want to edit a specific permission, you would typically retrieve it by ID
        // For example, if you pass the permission ID as a route parameter:
        // $permission = Permissions::findOrFail($id);
        // return view('permissions.edit', ['permission' => $permission]);

        // For now, just returning the edit view without any data
        return view('permissions.edit');
    }

    // Update permission page

    public function update()
    {

    }

    // Delete permission page

    public function destroy()
    {

    }
}
