<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.07 - Relacionamento entre objetos");

require __DIR__ . "/source/autoload.php";

/*
 * [ associacão ] É a associação mais comum entre objetos onde o objeto terá um atributo
 * apontando e dando acesso ao outro objeto
 */
fullStackPHPClassSession("associacão", __LINE__);

$company = new \Source\Related\Company();
$company->bootCompany(
    "Sant Soluções",
    "Nome da Rua"
);

var_dump($company);
$address = new \Source\Related\Address("Av. Paulista", 3393, "Bloco A, Sala 2");

$company->boot(
    "Sant Soluções",
    $address
);

var_dump($company);

echo "<p>A {$company->getCompany()} tem sede na rua {$company->getAddress()->getStreet()}</p>";

/*
 * [ agregação ] Em agregação tornamos um objeto externo parte do objeto base, contudo não
 * o referenciamos em uma propriedade como na associação.
 */
fullStackPHPClassSession("agregação", __LINE__);

$fsphp = new \Source\Related\Product("Fullstack PHP", 1997);
$laradev = new \Source\Related\Product("Laravel Developer", 997);

var_dump(
    $fsphp,
    $laradev
);

$company->addProduct($fsphp);
$company->addProduct($laradev);
$company->addProduct(new \Source\Related\Product(
    "Docker",
    399
));

var_dump($company);

/*
 *@var \Source\Related\Product $product
 */
//não precisa do @var para acessar os métodos do $product
foreach ($company->getProducts() as $product) {
    echo "<p>{$product->getName()} por R$ {$product->getPrice()}</p>";
}

/*
 * [ composição ] Em composição temos um objeto base que é responsável por instanciar o
 * objeto parte, que só existe enquanto o base existir.
 */
fullStackPHPClassSession("composição", __LINE__);

$company->addTeamMember("CEO", "Gustavo", "Ferreira");
$company->addTeamMember("Manager", "Maria", "Joaquina");

var_dump($company);

/*
 *@var \Source\Related\User $member
*/
//não precisa do @var para acessar os métodos do $product
foreach ($company->getTeam() as $member) {
    echo "<p>{$member->getJob()}: {$member->getFirstName()} {$member->getLastName()}</p>";
}








