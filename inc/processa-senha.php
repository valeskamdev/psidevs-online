<?php
ob_start();

use Psidevs\Entity\ControleDeAcesso;
use Psidevs\Entity\Usuario;
use Psidevs\Entity\Utilitarios;
use Psidevs\Helper\EntityManagerCreator;
use Psidevs\Repository\ObjetoRepository;

require_once "./../vendor/autoload.php";

$verificaLogin = new ControleDeAcesso();
$verificaLogin->verificaAcesso();
$verificaLogin->verificaAcessoCliente();
if(isset($_GET["sair"])) $verificaLogin-> logout();

$entityManager   = EntityManagerCreator::createEntityManager();

$usuario = $entityManager->find(Usuario::class, $_SESSION['id']);

$data = json_decode(file_get_contents("php://input"), true);

if (isset($data['senha_atual']) && isset($data['nova_senha']) && isset($data['confirmar_senha'])) {
    $senhaAtual = $data['senha_atual'];
    $novaSenha = $data['nova_senha'];
    $confirmarSenha = $data['confirmar_senha'];

    // Verifique a senha atual no banco de dados
    if (password_verify($senhaAtual, $usuario->getSenha())) {
        if ($novaSenha === $confirmarSenha) {
            $usuario->setSenha(Utilitarios::codificaSenha($novaSenha));
            $objetoCliente = new ObjetoRepository(
                $entityManager,
                $entityManager->getClassMetadata(Usuario::class)
            );
            $objetoCliente->atualizar($usuario);
            // A senha está correta e a nova senha coincide com a confirmação
            $response = ["senha_correta" => true, "match" => true];
        } else {
            // A senha está correta, mas a nova senha não coincide com a confirmação
            $response = ["senha_correta" => true, "match" => false];
        }
    } else {
        // Senha atual incorreta
        $response = ["senha_correta" => false];
    }
} else {
    // Trate o caso em que os dados não foram recebidos corretamente
    $response = ["erro" => "Dados incompletos"];
}
header("Content-Type: application/json");
echo json_encode($response);


ob_end_flush();