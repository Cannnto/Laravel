<?php

namespace App\Http\Controllers;

use App\Models\imobiliariaModel;
use Illuminate\Http\Request;

class imobiliariaController extends Controller
{
    public function index()
    {   $model = new imobiliariaModel();
        $data['banco'] = $model->all();
        return view ('index',$data);
    }
    public function search(Request $request)
    {   $model = new imobiliariaModel();
        print_r ($request->search);
        $data['banco'] = $model->where('endereco','like','%'.$request->search.'%')->get();
        return view ('index',$data);
    }
    public function inserir(Request $request)
    {   $model = new imobiliariaModel();
        $model->nome = $request->nome;
        $model->endereco = $request->endereco;
        $model->preco = $request->preco;
        $model->venda = $request->venda;
        $model->save();
        return redirect ('/')->with('enviado','Inserido com sucesso');
    }
    public function delete($codigo)
    {   $model = new imobiliariaModel();
        $model->find($codigo)->delete();
        return redirect ('/')->with('enviado','Removido com sucesso');
    }
    public function openEdit($codigo)
    {   $model = new imobiliariaModel();
        $bglh = $model->find($codigo);
        return view('editForm',$bglh);
    }    
    public function updateEdit(Request $request, $codigo)
    {   $model = new imobiliariaModel();
        $bglh = array
        (   'nome' => $request->nome,
            'endereco' => $request->endereco,
            'preco' => $request->preco,
            'venda' => $request->venda
        );
        $model->find($codigo)->update($bglh);
        return redirect ('/')->with('enviado','Editado com sucesso');
    }

}
