<?php

class ajaxController extends controller{
    
    public function index(){
       
        $dados = array(
            'frase' => ''
        );
        
        if(isset($_POST['nome']) && !empty($_POST['nome'])){
            $nome = addslashes($_POST['nome']);
            
            $dados['frase'] = "Meu nome: ".$nome;
        }
        
        echo json_encode($dados);
        exit;
    }
    
    
   
    
    
    
}