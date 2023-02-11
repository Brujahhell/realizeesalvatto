<?php

namespace App\Http\Controllers;

use App\Models\registro;
use Illuminate\Http\Request as Req;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();
        return view('/index')->with('users', $users);
    }

    public function cadastrarmarca(Req $request)
    {
        $registro = new registro($request->input());
        if ($request->hasFile('logo_projeto') && $request->file('logo_projeto')->isValid()) {
            $name = uniqid(date('HisYmd'));
            $extension = $request->logo_projeto->extension();
            $nameFile = "{$name}.{$extension}";
            $request->logo_projeto->move(public_path('assets/logomarca'), $nameFile);
            $lancamento['logo_projeto'] = $nameFile;
        }
        if ($request->hasFile('whitepaper') && $request->file('whitepaper')->isValid()) {
            $name = uniqid(date('HisYmd'));
            $extension = $request->whitepaper->extension();
            $nameFile = "{$name}.{$extension}";
            $request->whitepaper->move(public_path('assets/doc'), $nameFile);
            $lancamento['whitepaper'] = $nameFile;
        }
        $registro->save();
        return redirect('/')->with('mensagem_sucesso', 'Lançamento cadastrado com sucesso!');
    }

    public function maisdetalhes()
    {
        $registro = DB::table('registros')
            ->where('codigoUser', Auth::id() )
            ->get();
        return view('/minhamarca')->with('registro', $registro);
    }

}
