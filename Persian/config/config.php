<?php

#---# Upload Config #---#

const AllowedFormat = ['rar', 'png', 'jpeg','mp3','zip','mp4','gif']; #Allowed File Upload Format
const Limit = 20000000; #Maximum Upload Size (By Byte) 20000000 = 20MB
const BASE_URL = 'https://HeroExpert.ir/Persian/';
const BASE_PATH = __DIR__ . '/../';

#---# Social Media #---#

$media = (object)[
    'instagram' => 'https://www.instagram.com/amireza._.eb', #Instagram Link
    'telegram' => 'https://t.me/HeroExpert_ir', #Telegram Link
    'linkedin' => 'https://www.linkedin.com/in/amirreza-ebrahimi-9623052a9',  #Linkedin Link
    'github' => 'https://github.com/AmirezaEb' #Github Link
    ];

#---# Mail Config #---#

$emailServer = (object)[
    'host' => 'mail.heroexpert.ir',
    'userName' => 'info@heroexpert.ir',
    'passWord' => 'iV8#hX0^cU1@xJ9&',
    'port' => '587',
    'secure' => 'SSL'
    ];

#---# DataBase Config #---#

$dataBase = (object)[
    'name' => 'heroex_test', #DataBase Name
    'userName' => 'heroex_test', #DataBase Username
    'passWord' => 'h9g@ft9u9h545', #DataBase PassWord
    ];

try {
    $connect = new PDO('mysql:host=localhost;dbname=' . $dataBase->name, $dataBase->userName, $dataBase->passWord);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    # echo "Connecting Successfully";
} catch (Exception $e) {
    echo "Connect Failed : " . $e->getMessage();
}
