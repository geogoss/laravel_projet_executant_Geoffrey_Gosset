<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit ($id) {
        $this->authorize('admin');
        $roles = Role::all();
        $avatars = Avatar::all();
        $user = User::find($id);
        return view('pages.editUser', compact('user', 'roles', 'avatars'));
    }

    public function update ($id, Request $request) {
        
        $user = User::find($id);
        $user->name = $request->name;
        $user->firstname = $request->firstname;
        $user->age = $request->age;
        $user->role_id = $request->role_id;
        $user->avatar_id = $request->avatar_id;
        $user->save();
        return redirect()->back()->with('warning', 'Données de l\'utilisateur modifiées');
    }

    public function destroy ($id) {
        $this->authorize('admin');
        $delete = User::find($id);
        $delete->delete();
        return redirect()->back()->with('danger', 'Utilisateur supprimé');
    }

}
