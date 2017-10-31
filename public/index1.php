<?php

require_once __DIR__ . '/../vendor/autoload.php';

require_once __DIR__ . '/../src/doctrine.php';




$product = new App\Entity\Product();

$product->setDescription("Informatica");
$entityManager->persist($product);

$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";

$productRepository = $entityManager->getRepository('App\Entity\Product');
$products = $productRepository->findAll();
foreach($products as $p){
    echo '<li>'.$p->getId().'-'.''.$p->getDescription().'</li>';
    
}






