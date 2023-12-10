<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexuser(Request $request) {
        
        $usuarios = User::all();
        
        return view ('user.index', compact('usuarios'))
            ->with('i', (request()->input('page', 1) - 1) * 2); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Aproveita de Auth
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Aproveita de Auth
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showuser($id) {
        
        $usuario = User::where('id', $id)->first();

        return view('user.show',compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edituser($id) {
        
        $usuario = User::where('id', $id)->first();

        return view('user.edit',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateuser(Request $request, $id)
    {
        {
            $id = $request->id;
    
            $request->validate([
                'name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|email|max:255|unique:users',
                'password' => 'nullable|string|min:8|confirmed',
            ]);
    
            $updateUsuario = [
                "name" => $request->name,
                "last_name" => $request->name,
                "email" => $request->email,
            ];
    
            if (isset($request->password)) {
                $updateUsuario['password'] = Hash::make($request->password);
            }
    
            User::where("id", $id)->update($updateUsuario);
    
            return redirect()->route('user.index')
                ->with('success', 'Usuário atualizado com sucesso.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteuser($id)
    {
        $usuario = User::find($id);
        $usuario->delete();

        return redirect()->route('user.index')
                        ->with('success','Usuário excluído com sucesso.');
    }
}