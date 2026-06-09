<?php

class SelecaoController
{
    private static $selecoes = [];

    
    public function listar($request, $response)
    {
        $response->getBody()->write(
            json_encode(self::$selecoes)
        );

        return $response
            ->withHeader('Content-Type', 'application/json');
    }

    
    public function inserir($request, $response)
    {
        $dados = json_decode(
            $request->getBody()->getContents(),
            true
        );

        self::$selecoes[] = $dados;

        $response->getBody()->write(
            json_encode([
                "mensagem" => "Seleção cadastrada!"
            ])
        );

        return $response
            ->withHeader('Content-Type', 'application/json');
    }

    
    public function atualizar($request, $response, $args)
    {
        $id = $args['id'];

        $dados = json_decode(
            $request->getBody()->getContents(),
            true
        );

        self::$selecoes[$id] = $dados;

        $response->getBody()->write(
            json_encode([
                "mensagem" => "Seleção atualizada!"
            ])
        );

        return $response
            ->withHeader('Content-Type', 'application/json');
    }

    
    public function excluir($request, $response, $args)
    {
        $id = $args['id'];

        unset(self::$selecoes[$id]);

        $response->getBody()->write(
            json_encode([
                "mensagem" => "Seleção removida!"
            ])
        );

        return $response
            ->withHeader('Content-Type', 'application/json');
    }
}
