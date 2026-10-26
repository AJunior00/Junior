<?php 

header('Content-Type: application/json; charset=utf-8');

$metodo = $_SERVER['REQUEST_METHOD'];

$chamados = [
    [
        "id" => 1,
        "titulo" => "computador sem internet"
    ],
    [
        "id" => 2,
        "titulo" => "impressora atolada"
    ]
];

if ($metodo === 'GET') {

    http_response_code(200);

    echo json_encode($chamados, JSON_UNESCAPED_UNICODE);

    exit;

}

if ($metodo === 'POST') {

    $conteudo = file_get_contents('php://input');

    $dados = ;

    if (
        !is_array($dados) ||
        !isset($dados['titulo']) ||
        !is_string($dados['titulo'] ||
        trim($dados['titulo']) === '')
        
    ) {
        http_response_code(400);
        echo json_encode(["erro" => "titulo obrigatorio"]);

    }

    $novoChamado = [
        "id" => 3,
        "titulo" => trim($dados['titulo'])
    ];

    http_response_code(201);

    echo json_encode($noboChamado, JSON_UNESCAPED_UNICODE);

    exit;

}

?>