<?php
/**
 * Arduino + PHP
 *
 * @author  Bruno Soares
 * @website www.bsoares.com.br
 */

// Conecta na porta
$port = fopen('COM4', 'w+');

// Em alguns casos a Arduino pode reiniciar, por isso
// é bom esperar para enviar informação depois de conectar
//sleep(2);

// Envia "1" para o programa na Arduino saber que deve responder
fwrite($port, '1100110001110001110001100011000110001100010');

// Espera para que o dado enviado pelo PHP chegue até a Arduino
//sleep(1);

// Agora que a Arduino "Provavelmente já respondeu", pega
// o valor da resposta
echo fgets($port, 1);
//echo "_-_-_-==>";
echo fread($port, 11);
//file_get_contents($port, 0);


// Fecha a conexão com a porta
fclose($port);
?>