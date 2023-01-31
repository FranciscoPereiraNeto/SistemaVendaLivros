<?php
namespace PHP\Controle;

require_once("Modelo/Cliente.php");
require_once("Modelo/Livro.php");

use PHP\Modelo\Livro;
use PHP\Modelo\Cliente;

class Pedido{
    public string $livro1;
    public string $livro2;
    public string $livro3;
    public string $livro4;
    public string $livro5;
    public string $livro6;
    
}//fim do class Pedido

$livro1("021546","a torre de babel", "romântico", "23", $48,00);
$livro2("021538","a Dama e o Cavalheiro", "ação", "18", $53,00);
$livro3("021625","como enfrentar mal do seculo ansiedade", "motivação", "43", $9,00);
$livro4("021139","o homem mas inteligente da historia", "motivação", "28", $178,00);
$livro5("029545","nunca desista de seus sonhos", "motivação", "21", $98,00);
$livro6("022389","inteligencia multifocal", "motivação", "19", $58,00);


?>
