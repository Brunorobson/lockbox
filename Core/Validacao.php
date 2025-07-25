<?php

namespace Core;

class Validacao
{
    public $validacoes = [];
    public static function validar($regras, $dados)
    {
        $validacao = new Validacao();
        //pode ser $validacao = new self();
        foreach ($regras as $campo => $regrasDoCampo) {
            foreach ($regrasDoCampo as $regra) {
                $valorDoCampo = $dados[$campo];
                if ($regra == 'confirmed') {
                    $validacao->$regra($campo, $valorDoCampo, $dados["{$campo}_confirmacao"]);
                } elseif (str_contains($regra, ':')) {
                    $temp = explode(":", $regra);
                    $regra = $temp[0];
                    $parametro = $temp[1];
                    $validacao->$regra($parametro, $campo, $valorDoCampo);
                } else {
                    $validacao->$regra($campo, $valorDoCampo);
                }
            }
        }
        return $validacao;
    }

    private function unique($tabela, $campo, $valor)
    {
        if (strlen($valor) == 0) {
            return;
        }
        $db = new Database(config('database'));

        $resultado = $db->query(
            query: "select * from $tabela where $campo = :valor",
            params: ['valor' => $valor]
        )->fetch();

        if ($resultado) {
            $this->addError($campo, "O $campo já existe");
        }
    }
    private function required($campo, $valor)
    {
        if (strlen($valor) == 0) {
            $this->addError($campo, "O campo $campo é obrigatório");
        }
    }

    private function email($campo, $valor)
    {
        if (!filter_var($valor, FILTER_VALIDATE_EMAIL)) {
            $this->addError($campo, "O campo $campo deve ser um email válido");
        }
    }

    private function confirmed($campo, $valor, $valorDeConfirmacao)
    {
        if ($valor != $valorDeConfirmacao) {
            $this->addError($campo, "Os campos $campo de confirmação esta diferente");
        }
    }

    private function min($min, $campo, $valor)
    {
        if (strlen($valor) <= $min) {
            $this->addError($campo, "O campo $campo deve ter pelo menos $min caracteres");
        }
    }

    private function max($max, $campo, $valor)
    {
        if (strlen($valor) > $max) {
            $this->addError($campo, "O campo $campo deve ter no maximo $max caracteres");
        }
    }
    private function strong($campo, $valor)
    {
        if (!strpbrk($valor, '!@#$%()*^&')) {
            $this->addError($campo, "O campo $campo deve conter pelo menos um caractere especial");
        }
    }

    private function addError($campo, $erro)
    {
        $this->validacoes[$campo][] = $erro;
    }

    public function naoPassou($nomeCustomizado = null)
    {
        $chave = 'validacoes';
        if ($nomeCustomizado) {
            $chave .= '_' . $nomeCustomizado;
        }
        flash()->push($chave, $this->validacoes);
        //$_SESSION['validacoes'] = $this->validacoes;
        return sizeof($this->validacoes) > 0;
    }
}
