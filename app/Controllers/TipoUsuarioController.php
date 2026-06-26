<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TipoUsuarioModel;

class TipoUsuarioController extends BaseController
{
    private $tipoUsuarioModel;

    public function __construct()
    {

        $this->tipoUsuarioModel = new TipoUsuarioModel();
    }

 
    public function index()
    {
        $data = [
            'tipos' => $this->tipoUsuarioModel->findAll()
        ];


        return view('tipo_usuario/index', $data);
    }


    public function salvar()
    {
        $dados = $this->request->getPost();

  
        if ($this->tipoUsuarioModel->save($dados)) {
            return redirect()->to(base_url('TipoUsuarioController/index'));
        } else {
 
            return redirect()->back()->with('error', 'Erro ao salvar os dados.');
        }
    }

    public function editar($id)
    {
        $tipo = $this->tipoUsuarioModel->find($id);

        if (!$tipo) {
            return redirect()->to(base_url('TipoUsuarioController/index'));
        }

        $data = [
            'tipo' => $tipo
        ];

        return view('tipo_usuario/edit', $data);
    }

    public function deletar($id)
    {
        $this->tipoUsuarioModel->delete($id);
        
        return redirect()->to(base_url('TipoUsuarioController/index'));
    }
}