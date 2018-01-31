<?php

class ModelagemDeClasse {
    
    public $Nome;
    public $Idade;
    public $Profissao;
    public $ContaSalario;
    
    function __construct($Nome, $Idade, $Profissao, $ContaSalario) 
    {
        $this->Nome = $Nome;
        $this->Idade = $Idade;
        $this->Profissao = $Profissao;
        $this->ContaSalario = $ContaSalario;
    }

    public function Trabalhar($Trabalho, $Valor)
    {
        $this->ContaSalario += $Valor;
        $this->DarEcho("{$this->Nome} desenvolveu um {$Trabalho} e recebeu {$this->ToReal($Valor)}");
    }
    
    function setNome($Nome) {
        $this->Nome = $Nome;
    }

    function setIdade($Idade) {
        $this->Idade = $Idade;
    }

    function setProfissao($Profissao) {
        $this->Profissao = $Profissao;
    }

    function setContaSalario($ContaSalario) {
        $this->ContaSalario = $ContaSalario;
    }
    
    public function ToReal($Valor)
    {
        return number_format($Valor, '2','.',',');
    }
    
    public function DarEcho($Mensagem)
    {
        echo "<p>{$Mensagem}</p>";
    }
    
}
