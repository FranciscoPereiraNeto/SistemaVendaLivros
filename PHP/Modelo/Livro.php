<?php

namespace PHP\Modelo;

class Livro{
    public string $codigp;
    public string $titulo;
    public string $categoria;
    public string $estoque;
    public string $valor
    
}//fim do class Livro]

echo "<br><br>";
    $Liv = new Livro("021546","a torre de babel", "romântico", "23", $48,00);
    $liv->imprimir();
echo "<br><br>";
    $Liv = new Livro("021538","a Dama e o Cavalheiro", "ação", "18", $53,00);
    $liv->imprimir();
echo "<br><br>";
    $Liv = new Livro("021625","como enfrentar mal do seculo ansiedade", "motivação", "43", $9,00);
    $liv->imprimir();
echo "<br><br>";
    $Liv = new Livro("021139","o homem mas inteligente da historia", "motivação", "28", $178,00);
    $liv->imprimir();
echo "<br><br>";
    $Liv = new Livro("029545","nunca desista de seus sonhos", "motivação", "21", $98,00);
    $liv->imprimir();
echo "<br><br>";
    $Liv = new Livro("022389","inteligencia multifocal", "motivação", "19", $58,00);
    $liv->imprimir();


?>
