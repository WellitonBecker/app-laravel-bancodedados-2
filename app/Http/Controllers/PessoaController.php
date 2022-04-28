<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PessoaController extends Controller
{
    public function listagem() {
        if (view()->exists('pessoa.listagem')) {
            $produtos = DB::select('select * from pessoa');
            return view('pessoa.listagem', ['pessoa' => $produtos]);
        } else {
            return 'Página não encontrada.';
        }
    }

    public function detalhe($id) {
        $produto = DB::select('select * from pessoa where id = ?', [$id]);
        if (empty($pessoa)) {
            return '<h1>Pessoa não Localizado</h1>';
        } else {
            return view("pessoa.detalhe", ['pessoa' => $pessoa[0]]);
        }
    }

    public function delete($id) {
        $produto = DB::select('delete from pessoa where id = ?', [$id]);
        return '<h1>Pessoa deletada com sucesso!</h1>
            <a href="/pessoa">Voltar</b>
        ';
    }
}
