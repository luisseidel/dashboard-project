<?php

require_once 'vendor/autoload.php';

use \App\Model\Produto;
use \App\Model\ProdutoDao;

// Create
// $produto = new Produto();
// $produto -> setNome('Notebook');
// $produto -> setDescricao('i7, 8gb, 2tb');
// $produtoDao = new ProdutoDao();
// $produtoDao -> create($produto);

// // Read
// $produtoDao = new ProdutoDao();
// $produtoDao -> read();

// foreach($produtoDao->read() as $produto) {
//     print_r($produto);
// }

// Update
// $produto = new Produto();
// $produto -> setId('1');
// $produto -> setNome('Smartphone');
// $produto -> setDescricao('topzera das galáxias');

// $produtoDao = new ProdutoDao();
// $produtoDao -> update($produto);

// Delete
$produtoDao = new ProdutoDao();
$produtoDao -> delete('1');

?>