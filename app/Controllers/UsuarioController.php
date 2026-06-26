<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use App\Models\TipoUsuarioModel;

class UsuarioController extends BaseController
{
    private $usuarioModel;
    private $tipoUsuarioModel;

    public function __construct()
    {

        $this->usuarioModel = new UsuarioModel();
        $this->tipoUsuarioModel = new TipoUsuarioModel();
    }


    public function index()
    {
        $data = [
            'usuarios' => $this->usuarioModel->findAll(),
            'tipos'    => $this->tipoUsuarioModel->findAll(),
        ];

        return view('usuario/index', $data);
    }

    public function salvar()
    {   
        $dados = $this->request->getPost();


        if ($this->usuarioModel->save($dados)) {
            return redirect()->to(base_url('UsuarioController/index'))->with('msg', 'Sucesso!');
        } else {
          
            return redirect()->back()->with('error', 'Erro ao salvar.');
        }
    }

    public function editar($cpf)
    {
        $usuario = $this->usuarioModel->find($cpf);

        if (!$usuario) {
            return redirect()->to(base_url('UsuarioController/index'));
        }

        $data = [
            'usuario' => $usuario,
            'tipos'   => $this->tipoUsuarioModel->findAll(), 
        ];

        return view('usuario/edit', $data);
    }

   
    public function deletar($cpf)
    {
        $this->usuarioModel->delete($cpf);
        return redirect()->to(base_url('UsuarioController/index'));
    }
}