<?php
    require_once("modelo/Comercial.php");
    require_once("modelo/Industrial.php");
    require_once("modelo/Residencial.php");

    do {
  
        echo " MENU PRINCIPAL    \n";
        echo " 1. Consumo Residencial   \n";
        echo " 2. Consumo Comercial      \n";
        echo " 3. Consumo Industrial     \n";
        echo " 0. Sair                   \n";
        echo "\n";
        echo "Escolha uma opção: ";
        
    
        $opcao = readline("Escolha algum das 3 opcoes e 0 pra encerrar o programa ");
        
    
        switch ($opcao) {
            case 0:
                echo "Encerrado.. \n";
                break;
            case 1:
                    $consumo = new Residencial();
                    $consumo->setConsumoDiario(readline("Informe o seu consumo diário de energia: "));
                    echo"Você gasta diariamente R$ ". $consumo->getValorFatura()." \n";
    
                break;
            case 2:
                    $consumo = new Comercial();
                    $consumo->setConsumoComercial(readline("Informe o seu consumo diário de energia: "));
                    echo"Você gasta diariamente R$ ". $consumo->getValorFatura()." \n";
    
                break;
            case 3:
                $consumo = new Industrial();
                $consumo->setConsumoDiario(readline("Informe o seu consumo diário de energia: "));
                echo"Você gasta diariamente R$ ".$consumo->getValorFatura()." \n";
                break;
            default:
                echo "Opção inválida!\n";
                break;
        }
    
    } while ($opcao);
    