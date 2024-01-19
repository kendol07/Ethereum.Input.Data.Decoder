<?php

//funcion para decodificar los inputs
function DecodeDataInput($inputData) {
    $validAddress = new \Binance\Utils();
    $dataWithoutFunctionSelector = substr($inputData, 10);
    $segments = str_split($dataWithoutFunctionSelector, 64);

    $results = [];
    $transaction = [];
    $addressCount = 0;
    $i=0;

    foreach ($segments as $index => $segment) {
        $possibleAddress = str_replace('000000000000000000000000', '0x', $segment);

        // Verificar si parece una dirección de BNBereum valida
        if ($validAddress->isAddress($possibleAddress) AND substr_count($possibleAddress,str_repeat('0',7))==0)
        {
            $addressCount++;
            if ($addressCount == 1) {
                // Primera dirección encontrada en el segmento
                $transaction['contract'] = $possibleAddress;
            } else if ($addressCount == 2) {
                // Segunda dirección encontrada, posible destinatario en transacciones de token
                $transaction['address'] = $possibleAddress;
            }
        } else if ($addressCount >= 1 && !isset($transaction['value'])) {
            // Tratar el segmento como un valor numérico
            $valueInWei = hexdec($segment);
            $transaction['valor'] = $valueInWei;
            
            //asignamos las direcciones o contratos y valores de las transacciones
            $results[$i] = count($transaction) < 3 ? ['address' => $transaction['contract'], 'value' => $transaction['value']] : $transaction;
            $transaction = [];
            $addressCount = 0;
            $i++;
        }

         
    }

    if(count($results)>0){
        return $results;
    }else{
        return false;
    }
}?>
