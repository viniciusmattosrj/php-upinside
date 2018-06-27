<?php

class AtributosMetodos
{
    /* ATRIBUTOS */
    var $Nome;
    var $Idade;
    var $Profissao;

    function setUsuario($Nome, $Idade, $Profissao)
    {
        $this->Nome = $Nome;
        $this->Profissao = $Profissao;
        $this->setIdade($Idade);
    }

    function getUsuario()
    {
        return "{$this->Nome} tem {$this->Idade} anos de idade. E trabalha como {$this->Profissao}";
    }

    function getClasse()
    {
        echo "<pre>";
            print_r($this);
        echo "</pre>";
    }

    function setIdade()
    {
        if(!is_int($this->Idade)):
            die('Idade informada é incorreta');
        else:
            /** @var TYPE_NAME $this */
            $this->Idade = $Idade;
        endif;
    }
}

?>