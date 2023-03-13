<?php

require_once __DIR__.'/router.php';

get('/', 'pages/index.php');
get('/about', 'pages/about.php');
get('/blog', 'pages/blog.php');
get('/contact', 'pages/contact.php');
get('/contract-product', 'pages/contract-product.php');
get('/ag-tech-product', 'pages/ag-tech-product.php');
get('/autohim-product', 'pages/autohim-product.php');
get('/own-product', 'pages/own-product.php');
get('/politics', 'pages/politics.php');


post('/', '/pages/index.php');

any('/404','pages/404.php');
