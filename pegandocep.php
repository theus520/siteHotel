<?php
//$butao = isset($_POST["enviar"]);
//if($butao !=0){
    class SalvaDado{

       public $nome  ="Matheus";
        public $email ="matheusrabelo@gmail.com";
        public $cpf = "05343578132";
        public $telefone = "063992585773";
        public $cep = "73080100";
       // public $logradouro = "rua das castanheiras Qd 50";
        public $numero = 10;
        function enderecoPorCep(){
            //*removendo caracter não numerico
            $cep = preg_replace("/[^0-9]/"," ",$this->cep);
            $url = "http://viacep.com.br/ws/$cep/xml/";
            $xml = simplexml_load_file($url);
            return $xml;
        }
    }
    
    //verifica as variavel
//if(empty($nome) && empty($email)){
  //if(empty($senha)&& empty($id)){
 
  //}
//}