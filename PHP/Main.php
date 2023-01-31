<?php
    namespace SistemaVenda\PHP;
    use SistemaVenda\PHP\Modelo\Cliente;
    require_once("Modelo/Cliente.php");
    $clienteNovo = new Cliente("Francisco", "Avenida 1", "999999999", \Date("2022-09-02"),1);
    echo Cliente->verificar(1);

    

    
?>