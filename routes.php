<?php

require_once __DIR__.'/router.php';

get('/', 'pages/index.php');
get('/about', 'pages/about.php');
get('/blog', 'pages/blog.php');
get('/contact', 'pages/contact.php');
get('/contract-product', 'pages/contract-product.php');
get('/own-product', 'pages/own-product.php');
get('/politics', 'pages/politics.php');
get('/product-agtech', 'pages/product-agtech.php');
get('/product-auto', 'pages/product-auto.php');

any('/404','pages/404.php');
