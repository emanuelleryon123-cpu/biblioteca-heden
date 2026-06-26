<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LivroModel;

class LivroController extends BaseController
{
    protected $livroModel;

    public function __construct()
    {
        $this->livroModel = new LivroModel();
    }

    public function index()
    {
        $dados['livros'] = $this->livroModel->findAll();
        
        return view('livro/index', $dados);
    }

    public function salvar()
    {
        $dadosFormulario = [
            'isbn'       => $this->request->getPost('isbn'),
            'paginas'    => $this->request->getPost('paginas'),
            'ano'        => $this->request->getPost('ano'),
            'id_obra'    => $this->request->getPost('id_obra'),
            'id_editora' => $this->request->getPost('id_editora'),
        ];

        if ($this->livroModel->insert($dadosFormulario) === false) {
            dd($this->livroModel->errors());
        }

        return redirect()->to(base_url('livro'));
    }

    public function editar($id = null)
    {
        $dados['livro'] = $this->livroModel->find($id);

        if (!$dados['livro']) {
            return redirect()->to(base_url('livro'));
        }

        return view('livro/edit', $dados);
    }

    public function atualizar()
    {
        $id = $this->request->getPost('id');

        $dadosFormulario = [
            'isbn'       => $this->request->getPost('isbn'),
            'paginas'    => $this->request->getPost('paginas'),
            'ano'        => $this->request->getPost('ano'),
            'id_obra'    => $this->request->getPost('id_obra'),
            'id_editora' => $this->request->getPost('id_editora'),
        ];

        if ($this->livroModel->update($id, $dadosFormulario) === false) {
            dd($this->livroModel->errors());
        }

        return redirect()->to(base_url('livro'));
    }

    public function deletar($id = null)
    {
        if ($id && $this->livroModel->find($id)) {
            $this->livroModel->delete($id);
        }

        return redirect()->to(base_url('livro'));
    }
}