<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Motorista
 *
 * @author Usuario
 */
class Motorista {
    //put your code here
    var $id;
    var $nome;
    var $cpf;
    var $telefone;
    var $celular;
 
    function ImprimeNome(){
        print 'Nome:'.$this->nome;
    }
    
}

