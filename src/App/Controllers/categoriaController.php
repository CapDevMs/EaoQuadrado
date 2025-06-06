<?php

namespace App\Controllers;

use App\Models\Categoria;
use Core\View;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::getCategorias();
        View::render('categoria/index', ['categorias' => $categorias]);
    }

    public function criar()
    {
        View::render('categoria/criar');
    }

    public function salvar()
    {
        $dados = $_POST;

        $model = new Categoria();
        $sql = "INSERT INTO Categorias (nome, descricao) VALUES (:nome, :descricao)";
        $model->query($sql, [
            'nome' => $dados['nome'],
            'descricao' => $dados['descricao']
        ]);

        View::render('categoria/sucesso', ['mensagem' => 'Categoria criada com sucesso!']);
    }

    public function editar($id)
    {
        $model = new Categoria();
        $sql = "SELECT * FROM Categorias WHERE id_categoria = :id";
        $model->query($sql, ['id' => $id]);
        $categoria = $model->getData()[0] ?? null;

        View::render('categoria/editar', ['categoria' => $categoria]);
    }

    public function atualizar($id)
    {
        $dados = $_POST;

        $model = new Categoria();
        $sql = "UPDATE Categorias SET nome = :nome, descricao = :descricao WHERE id_categoria = :id";
        $model->query($sql, [
            'nome' => $dados['nome'],
            'descricao' => $dados['descricao'],
            'id' => $id
        ]);

        View::render('categoria/sucesso', ['mensagem' => 'Categoria atualizada com sucesso!']);
    }

    public function deletar($id)
    {
        $model = new Categoria();
        $sql = "DELETE FROM Categorias WHERE id_categoria = :id";
        $model->query($sql, ['id' => $id]);

        View::render('categoria/sucesso', ['mensagem' => 'Categoria deletada com sucesso!']);
    }
}
