<?php
namespace SistemaVenda\PHP\Modelo;
use SistemaVenda\PHP\Modelo\Cliente;

class Cliente{

    public string $nome;
    public string $endereco;
    public string $telefone;
    public string $dataNascimento;
    public string $login;
    public string $senha;


    public function __construct(string $nome, string $endereco, string $telefone, string $dataNascimento, float $validar){
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->dataNascimento = $dataNascimento;
        $this->verificar($validar);
       
    }//fim do construtor 
    //métodos get's e set's 
    public function getnome() : string
        {
            return $this->nome;
        }//fim do getnome

    public function setnome(string $nome) : void
        {
             $this->nome = $nome;
        }//fim do setnome
        public function getendereco() : string
        {
            return $this->endereco;
        }//fim do get endereco
    public function setendereco(string $endereco) : void
        {
             $this->endereco = $endereco;
        }//fim do setendereco
        public function gettelefone() : string
        {
            return $this->telefone;
        }//fim do gettelefone

    public function settelefone(string $telefone) : void
        {
             $this->telefone = $telefone;
        }//fim do settelefone
        public function getdataNascimento() : string
        {
            return $this->dataNascimento;
        }//fim do getdataNascimento

    public function setdataNascimento(string $dataNascimento) : void
        {
             $this->dataNascimento = $dataNAscimentonome;
        }//fim do setdataNascimento

    public function verificar(float $validar){
        if($validar== 1){
            echo "<label for='lLogin'>Insira seu Nome: <label><br><br><input nome='tLogin' type='text'>";
            echo "<br><br><label for='lsenha'>Insira sua Senha: <label><br><br><input nome='tSenha' type='password'>";

        }
    }//fim do verificar

    
}//fim do class Cliente

?>