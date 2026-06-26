<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EmprestimoModel;
use App\Models\UsuarioModel;
use App\Models\LivroModel;

class EmprestimoController extends BaseController
{
    protected $emprestimoModel;

    public function __construct()
    {
        $this->emprestimoModel = new EmprestimoModel();
    }

    public function index()
    {
        $usuarioModel = new UsuarioModel();
        $livroModel   = new LivroModel();

        $dados['emprestimos']     = $this->emprestimoModel->findAll();
        $dados['usuarios_lista']  = $usuarioModel->findAll();
        $dados['livros_lista']    = $livroModel->findAll();

        $dados['bibliotecarios'] = [
            ['id' => 1, 'nome' => 'Bibliotecário Padrão'],
            ['id' => 2, 'nome' => 'Assistente de Turno']
        ];
        
        return view('emprestimo/index', $dados);
    }

    public function salvar()
    {
        $dataFim = $this->request->getPost('data_fim');

        $dadosFormulario = [
            'data_inicio'      => $this->request->getPost('data_inicio'),
            'data_fim'         => !empty($dataFim) ? $dataFim : null,
            'id_livro'         => $this->request->getPost('id_livro'),
            'id_usuario'       => $this->request->getPost('id_usuario'),
            'id_bibliotecario' => $this->request->getPost('id_bibliotecario'),
        ];

        if ($this->emprestimoModel->insert($dadosFormulario) === false) {
            dd($this->emprestimoModel->errors());
        }

        return redirect()->to(base_url('emprestimo'));
    }

    public function editar($id = null)
    {
        $usuarioModel = new UsuarioModel();
        $livroModel   = new LivroModel();

        $dados['emprestimo']      = $this->emprestimoModel->find($id);
        $dados['usuarios_lista']  = $usuarioModel->findAll();
        $dados['livros_lista']    = $livroModel->findAll();
        
        $dados['bibliotecarios'] = [
            ['id' => 1, 'nome' => 'Bibliotecário Padrão'],
            ['id' => 2, 'nome' => 'Assistente de Turno']
        ];

        if (!$dados['emprestimo']) {
            return redirect()->to(base_url('emprestimo'));
        }

        return view('emprestimo/edit', $dados);
    }

    public function atualizar()
    {
        $id = $this->request->getPost('id');
        $dataFim = $this->request->getPost('data_fim');
        
        $dadosFormulario = [
            'data_inicio'      => $this->request->getPost('data_inicio'),
            'data_fim'         => !empty($dataFim) ? $dataFim : null,
            'id_livro'         => $this->request->getPost('id_livro'),
            'id_usuario'       => $this->request->getPost('id_usuario'),
            'id_bibliotecario' => $this->request->getPost('id_bibliotecario'),
        ];

        if ($this->emprestimoModel->update($id, $dadosFormulario) === false) {
            dd($this->emprestimoModel->errors());
        }

        return redirect()->to(base_url('emprestimo'));
    }

    public function deletar($id = null)
    {
        if ($id && $this->emprestimoModel->find($id)) {
            $this->emprestimoModel->delete($id);
        }

        return redirect()->to(base_url('emprestimo'));
    }
}