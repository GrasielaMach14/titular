<?php 

namespace pooPhp\phpOo\Modelo;

trait AcessoPropriedade
{
/* Este método permite acessar o atributo em endereco.php usando $ob1->rua  
    chamar sempre que tentamos acessar um atributo/propriedade que não existe ou é privado*/
    public function __get($atributo)
    {
        $objeto = 'retorna' . ucfirst($atributo);
        $this->$objeto();
    }
}