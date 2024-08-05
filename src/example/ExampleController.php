<?php

/**
 * Exemplo de namespace App\example
 * App => Apelido para o caminho da pasta /src
 * example => nome da pasta
 */
namespace App\example;

/**
 * Exemplo de nome de Controller
 * Utilizar o padrão "PascalCase", cada paralavra inicia com letra Maiúscula
 * Obrigatório por Controller nas classes controller.
 * Outro exemplo: ContasReceberController
 * Nome do arquivo deve seguir o mesmo padrão.
 */

/**
 * O Controller deverá extender de um modelo padrão
 * que terá métodos de validação de sessão e outros tratamentos de rota.
 */
class ExampleController
{
    /**
     * Rota: www.exemplo.com/example
     * o acesso ao controller vai ser sempre pelo nome da pasta
     * as pastas devem ser escritas em minúsculas
     * @method [GET]
     */
    public function index()
    {
        // Metodo principal, geralmente a listagem de cadastros.
    }

    /**
     * Rota: www.exemplo.com/example/create
     * @method [GET]
     */
    public function create()
    {
        // Carregar a view para acessar o cadastro
    }

    /**
     * Rota: www.exemplo.com/example/store
     * @method [POST]
     */
    public function store()
    {
        // Envio dos dados para salvar no banco (cadastrar)
    }

    /**
     * Rota: www.exemplo.com/example/edit/{$id} ($id => número do cadastro em edição)
     * @method [GET]
     */
    public function edit($id)
    {
        // Carregar a view para acessar a edição do cadastro
    }

    /**
     * Rota: www.exemplo.com/example/update
     * @method [PUT]
     */
    public function update()
    {
        // Envio dos dados para atualizar no banco
    }

    /**
     * Rota: www.exemplo.com/example/delete/{$id} ($id => número do cadastro)
     * @method [DELETE]
     */
    public function delete($id)
    {
        // Envio do cadastro para excluir do banco
    }
}