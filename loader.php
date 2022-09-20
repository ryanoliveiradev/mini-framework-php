<?php

//evita que os usuários acessem este arquivo diretamente
if (!defined('ABSPATH')) exit;

//inicia a sessão
session_start();

//verifica o modo para debug
if (!defined('DEBUG') || DEBUG === false) {
  //esconde todos os erros existentes da aplicação
  error_reporting(0);
  ini_set("display_errors", 0);
}else{
  //mostra todos os erros existentes da aplicação
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
}

//Funções globais da aplicação
require_once ABSPATH . '/functions/global-functions.php';

/**
 * inicializa a aplicação
 * pode ser alterado conforme um novo projeto
 */
$breaking_news = new BreakingNews();

