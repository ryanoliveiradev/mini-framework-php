<?php

/**
 * Configurações gerais
 */

 //caminho para a raiz

 define('ABSPATH', dirname(__FILE__));

 //caminho para a pasta de uploads
 define('UP_ABSPATH', ABSPATH . './views/_uploads');

 //URL da home
 define('HOME_URI', 'http://localhost:8080/');

 //configurações do banco de dados
/**
 * Aqui estão as configurações do banco de dados, quando precisar setar alguma configuração
 * para um novo projeto, basta mudar os valores das variáveis
 */

 define('HOSTNAME', 'localhost');
 define('DB_NAME', 'crud');
 define('DB_USER', 'root');
 define('DB_PASSWORD', '');

 //charset da conexao PDO
 define('DB_CHARSET', 'utf8');

 //modifique para true se estiver desenvolvendo
 define('DEBUG', true);

 /**
  * Não modifique as configurações em diante
  */

// Carrega o loader, que vai carregar a aplicação inteira
require_once ABSPATH . '/loader.php';