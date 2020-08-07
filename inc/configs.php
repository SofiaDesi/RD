<?php
    #CONFIGURAÇÕES DO BANCO DE DADOS 
        #NÃO FUNCIONA NO INFINITYFREE
        define("db_host", "localhost");
        define("db_user", "root");
        define("db_pass", "");
        define("db_db", "mpp");

    #CONJFIGURAÇÕES DO MERCADOPAGO
        #-> TROCAR NOTIFICAÇÃO -> https://www.mercadopago.com.br/ipn-notifications
        #-> CREDÊNCIAIS -> https://www.mercadopago.com/mlb/account/credentials?type=basic
        #-> Detalhes: https://www.mercadopago.com.br/developers/pt/guides/payments/web-payment-checkout/configurations/
        define("client_id", "5446468347843317");
        define("client_secret", "5vgG6tvF17e37XNB2vYrWvjNGg9xL3ee");
        define("access_token", "APP_USR-5446468347843317-080518-af2fd358a770b0770aa02483932ea6e4-63089510");

        define("notification_url", "http://suaurl.com/response.php");
?>