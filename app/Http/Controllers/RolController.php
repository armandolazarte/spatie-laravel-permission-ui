<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;


class RolController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:rol.index')->only('index');
        $this->middleware('permission:rol.create')->only(['create', 'store']);
        $this->middleware('permission:rol.show')->only('show');
        $this->middleware('permission:rol.edit')->only(['edit', 'update']);
        $this->middleware('permission:rol.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $roles = Role::where('name', '<>', 'super-admin')->paginate(15);

        return view('rol.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $permisos = Permission::all();

        return view('rol.create', compact('permisos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $rol = Role::create($request->all());

        $rol->syncPermissions($request->permisos);

        return redirect()->route('rol.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Role  $rol
     * @return void
     */
    public function show(Role $rol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Role  $rol
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Role $rol)
    {
        $permisos = Permission::all();

        return view('rol.edit', compact('rol', 'permisos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Role  $rol
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Role $rol)
    {
        $rol->update($request->all());

        $rol->syncPermissions($request->permisos);

        return redirect()->route('rol.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Role  $rol
     * @return void
     */
    public function destroy(Role $rol)
    {
        //
    }
}
