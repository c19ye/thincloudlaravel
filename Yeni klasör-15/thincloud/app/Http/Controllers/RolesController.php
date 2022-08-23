<?php

namespace App\Http\Controllers;

use App\Http\Resources\RolesResource;
use App\Models\Role;
use App\Models\VirtualMachines;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RolesController extends Controller
{
    public function showpage()
    {
        $roles = Role::where('user_id', auth()->user()->id)->get();

        return view('pages.roles', compact('roles'));
    }

    public function datatableJson()
    {
        return RolesResource::collection(VirtualMachines::where('user_id', auth()->user()->id)->where('role_id', '!=', null)->get());
    }

    public function create(Request $request)
    {
        $request->validateWithBag('create', [
            'name' => ['required', 'min:3', Rule::unique('roles', 'name')],
        ],
            [
                'name.required' => 'Rol ismini girin',
                'name.min' => 'Minimum 3 karakter gir',
                'name.unique' => 'Bu isimde bir rol mevcut',
            ]
        );

        $request['user_id'] = auth()->user()->id;

        Role::create($request->all());

        return redirect('/roles');
    }

    public function update(Request $request)
    {
        $name = Role::where('id', $request->id)->first();

        if ($name->name != $request->name) {
            $request->validateWithBag('update', [
                'name' => ['required', 'min:3', Rule::unique('roles', 'name')],
            ],
                [
                    'name.required' => 'Rol ismini girin',
                    'name.min' => 'Minimum 3 karakter gir',
                    'name.unique' => 'Bu isimde bir rol mevcut',
                ]
            );
        }
        Role::find($request->id)->update($request->all());

        return redirect('/roles');
    }
}
