
<?php

// Caminho do arquivo JSON
function caminhoArquivo() {
    return __DIR__ . '/chamados.json';
}

// Lê os chamados armazenados no JSON
function listarChamados() {
    $arquivo = caminhoArquivo();

    if (!file_exists($arquivo)) {
        file_put_contents($arquivo, '[]');
    }

    $conteudo = file_get_contents($arquivo);
    $chamados = json_decode($conteudo, true);

    if (!is_array($chamados)) {
        return [];
    }

    return $chamados;
}

// Salva os chamados no arquivo JSON
function salvarChamados($chamados) {
    $json = json_encode(
        $chamados,
        JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
    );

    if ($json === false) {
        return false;
    }

    return file_put_contents(caminhoArquivo(), $json) !== false;
}

// Cadastra um novo chamado
function cadastrarChamado(
    $nome,
    $setor,
    $equipamento,
    $descricao,
    $prioridade
) {
    $nome = trim($nome);
    $descricao = trim($descricao);

    $setores = [
        'Produção',
        'Administrativo',
        'Logística',
        'Financeiro',
        'TI'
    ];

    $equipamentos = [
        'Computador',
        'Impressora',
        'Rede',
        'Sistema',
        'Outro'
    ];

    $prioridades = ['Baixa', 'Média', 'Alta'];

    if ($nome === '' || $descricao === '') {
        return false;
    }

    if (
        !in_array($setor, $setores, true) ||
        !in_array($equipamento, $equipamentos, true) ||
        !in_array($prioridade, $prioridades, true)
    ) {
        return false;
    }

    $chamados = listarChamados();

    $novoChamado = [
        'nome' => $nome,
        'setor' => $setor,
        'equipamento' => $equipamento,
        'descricao' => $descricao,
        'prioridade' => $prioridade,
        'status' => 'Aberto'
    ];

    $chamados[] = $novoChamado;

    return salvarChamados($chamados);
}

// Atualiza o status de um chamado
function atualizarChamado($posicao, $novoStatus) {
    $statusPermitidos = [
        'Aberto',
        'Em andamento',
        'Resolvido'
    ];

    $chamados = listarChamados();

    if (
        !is_numeric($posicao) ||
        (int) $posicao < 0 ||
        (string) (int) $posicao !== (string) $posicao ||
        !array_key_exists((int) $posicao, $chamados) ||
        !in_array($novoStatus, $statusPermitidos, true)
    ) {
        return false;
    }

    $posicao = (int) $posicao;
    $chamados[$posicao]['status'] = $novoStatus;

    return salvarChamados($chamados);
}

// Exclui um chamado
function excluirChamado($posicao) {
    $chamados = listarChamados();

    if (
        !is_numeric($posicao) ||
        (int) $posicao < 0 ||
        (string) (int) $posicao !== (string) $posicao ||
        !array_key_exists((int) $posicao, $chamados)
    ) {
        return false;
    }

    $posicao = (int) $posicao;

    unset($chamados[$posicao]);

    // Reorganiza os índices do array
    $chamados = array_values($chamados);

    return salvarChamados($chamados);
}

// Gera o relatório de atendimentos
function gerarRelatorio() {
    $chamados = listarChamados();

    $relatorio = [
        'total' => count($chamados),
        'abertos' => 0,
        'em_andamento' => 0,
        'resolvidos' => 0
    ];

    foreach ($chamados as $chamado) {
        if ($chamado['status'] === 'Aberto') {
            $relatorio['abertos']++;
        } elseif ($chamado['status'] === 'Em andamento') {
            $relatorio['em_andamento']++;
        } elseif ($chamado['status'] === 'Resolvido') {
            $relatorio['resolvidos']++;
        }
    }

    return $relatorio;
}