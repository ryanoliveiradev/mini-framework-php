<?php

/**
 * Verifica chaves de arrays
 * 
 * Verifica se a chave existe no array e se ela tem um valor
 * obs: Essa função possui escopo global, pois é muito requisitada
 * 
 * 
 * @param array $array O array
 * @param string $key A chave do array
 * @return string|null O valor da chave do array ou nulo
 */

 function check_array($array, $key){
  //verifica se a chave existe no array
  //se existir e nao for vazio
  if (isset($array[$key]) && !empty($array[$key])){
    //retorna o valor da chave
    return $array[$key];
  }

  return null;
 }// __check_array


 /**
  * Função para carregar automaticamente todas as classes padrao
  * Para mais informações, acesse: http://php.net/manual/pt_BR/function.autoload.php.
  * As classes deverao estar na pasta Classes
  * O nome do arquivo deverá ser o nome da classe, exemplo Pessoas.php 
  */

//a função autoload nao é mais suportada no php 8.0

  /*function __autoload($class_name){
    $file = ABSPATH . '/classes/' . $class_name . '.php';

    if(!file_exists($file)) {
      require_once ABSPATH . './includes/404.php';
      return;
    }
  }*/

//função suportada no php 8.0
  function my_autoloader($class_name) {
    $file = ABSPATH . './classes/' . $class_name . '.class.php';

    if(!file_exists($file)) {
      require_once ABSPATH . './includes/404.php';
      return; //tratar o erro do php , e deixar somente o erro proposital
    }

    require_once $file;
}// __my_autoloader

spl_autoload_register('my_autoloader');