<?php

//senha do banco : bdsalao2dsetec

class Conexao
{
    public static function conectar()
    {
        /*
            $variavel = new PDO(
                tipo:host=local; 
                dbname=nome do banco,
                usuário de acesso ao banco, 
                senha de acesso ao banco
            )
        */
        //conexão local
        //$conexao = new PDO("mysql:host=localhost;
        //                    dbname=bdsalao2ds", 
        //                    "root",
        //                    "");
        
        //conexão on line - hospedado
            $conexao = new PDO("mysql:host=fdb34.awardspace.net;
                                dbname=3980593_bdsalao", 
                                "3980593_bdsalao",
                                "bdsalao2dsetec");

        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexao->exec("SET CHARACTER SET utf8");
        
        return $conexao;
    }
}