<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PerfilController extends Controller
{
    public function edit()
    {
        return view('layouts.Perfil');
    }

    public function updateAvatar(Request $request)
    {
        $user = auth()->user();
    
        // Get the selected avatar
        $avatar = $request->input('avatar');
    
        // Define the default avatars
        $defaultAvatars = [
            'avatar1',
            'avatar2',
            'avatar3',
            'avatar4',
            'avatar5',
            'avatar6',
        ];
    
    
        if (in_array($avatar, $defaultAvatars)) {
            
            $user->avatar = 'avatars/' . $avatar . '.png';
            $user->save();
    
      
            return back()->with('success', 'Avatar alterado com sucesso!');
        } else {
           
            return back()->with('error', 'Avatar inválido!');
        }
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        // Validação dos campos
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|confirmed|min:8',
        ]);

        // Atualiza o nome
        $user->name = $request->input('name');

        // Atualiza a senha
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        // Salva as mudanças
        $user->save();

        // Redireciona de volta com mensagem de sucesso
        return redirect()->route('perfil')->with('success', 'Nome e senha alterados com sucesso!');
    }
}
