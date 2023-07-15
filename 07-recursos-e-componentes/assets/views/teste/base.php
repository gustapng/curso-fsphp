<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
<h3 class="trigger accept"><?= $title; ?></h3>

<?php if ($this->section("nav")): ?>
    <nav class="trigger info"><?= $this->section("nav"); ?></nav>
<?php else: ?>
    <p class="trigger info">Lista de Usuários</p>
<?php endif; ?>

<?= $this->section("content"); ?>
</body>
</html>