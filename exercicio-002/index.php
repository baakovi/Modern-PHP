<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>

   <h1>Exemplo do PHP</h1>

   <?php
   // Por padrão, na função "date()", a time zone (faixa de horário) é o CET, depende da configuração do servidor local. 

      // Configurança a time zone para o Brasil (GMT-3)
      date_default_timezone_set("America/Sao_Paulo");

      echo "Hoje é dia " . date("d/M/Y"); //phpinfo()

      echo " e a hora atual é " . date("G:i:s T");
   ?>
   
</body>
</html>