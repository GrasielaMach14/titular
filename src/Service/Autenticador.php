<?php

namespace pooPhp\phpOo\Service;

use pooPhp\phpOo\Modelo\Autenticavel;
/* Esta classe fará a validação do usuário que tiver permissão de acesso */
class Autenticador
{
    public function login(Autenticavel $autenticavel, string $senha)
    {
        if ($autenticavel->autenticar($senha)) {
            echo "Usuário autenticado com sucesso.";
        }else{
            echo "Senha incorreta.";
        }
    }
}