<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UserRequest;
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
    public function indexuser(Request $request)
    {

        $usuarios = User::all();

        return view('user.index', compact('usuarios'))
            ->with('i', (request()->input('page', 1) - 1) * 2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createuser()
    {
        return view('user.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        $request->validated();
        // verifica se o usuario logado pode criar..

        if(Auth::user()->can('create', Auth::user())) {

            return User::create([
               'name' => $request['name'],
               'last_name' => $request['last_name'],
               'email' => $request['email'],
               'password' => Hash::make($request['password']),
            ]);

        };

        // Colocar algum redirect para home com mensagem de não perimitido
        return abort(500)->redirect()->route('user.index')
            -> with('error', 'Acesso negado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showuser($id)
    {

        $usuario = User::where('id', $id)->first();

        return view('user.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edituser($id)
    {

        $usuario = User::where('id', $id)->first();

        return view('user.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateuser(UserRequest $request, $id)
    {
        {
            $id = $request->id;

            $request->validated([]);

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
                        ->with('success', 'Usuário excluído com sucesso.');
    }
}
