<?php

require '../vendor/autoload.php';

use ACSToigo\Lib\ZoopTransactions;
use ACSToigo\ZoopBase;
use ACSToigo\Lib\APIResource;
use ACSToigo\Lib\ZoopBuyers;
use ACSToigo\Lib\ZoopSellers;
use ACSToigo\Lib\ZoopBankAccounts;

$config = [
    'version' => '1.0.0',
    'headers' => [
        'Accept: application/json',
        'Accept-Charset: utf-8',
        'Accept-Language: pt-br;q=0.9,pt-BR'
    ],
    'defaults' => [
        'publishable_key' => 'publishable_key',
        'marketplace_id' => 'marketplace_id',
        'endpoint' => 'https://api.zoop.ws',
        'api_version' => 'v1',
    ]
];

$zoop = ZoopBase::getSingleton($config);
$api = APIResource::getSingleton($zoop);
$buyers = new ZoopBuyers($api);
$sellers = new ZoopSellers($api); 
$bank = new ZoopBankAccounts($api);

print_r($buyers->getAll());
print_r($sellers->getAll());
print_r($bank->getAll());


