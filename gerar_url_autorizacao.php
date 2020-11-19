<?php
//COMO GERAR A URL DE AUTORIZAÇÃO VALIDA PARA SHOPEE.


//--------- INFORMAÇÕES BASICAS PARA GERAR A URL ----------------- //
$url_shopee = 'https://partner.uat.shopeemobile.com'; //URL BOM SEPARAR PARA QUANDO MUDAR DE HOMOLOGAÇÃO PARA PRODUÇÃO.
$partner_id = '12345678'; //CODIGO DE PARCEIRO, GERADO JUNTO AO APP
$redirect   = 'https://seuapp.com.br/retorno'; //URL DE REDIRECIONAR DEPOIS DE AUTORIZAR, ESSA TEM QUE SER A MESMA CADASTRADA NO APP.
$key        = 'FSBHSFDBFDJFSD3245678SRDNJFDNJFD '; //GERADA QUANDO CRIA O APLICATIVO NA ABA "OPEN SHOPEE".
$timestamp  = time(); //TIMESTAMP PARA GERAR O TOKEN

//JUNTA A KEY + REDIRECT E TRASNFORMA EM HASH 256.
$Autorizacao = $key.$redirect;
$token =  hash('sha256',$Autorizacao);

//URL JUNTA.
$url_de_autorizacao = $url_shopee.'/api/v1/shop/auth_partner?id='.$partner_id.'&token='.$token.'&redirect='.$redirect.'';

//IMPRIME NA TELA.
echo $url_de_autorizacao;