<?php require 'inc/head.php';

session_start();
var_dump($_SESSION['item']);

?>
<section class="cookies container-fluid">
    <div class="row">
        <?php require 'inc/head.php'; ?>
        <section class="cookies container-fluid">
            <div class="row">
                TODO : Display shopping cart items from $_SESSION here.
                <ul>
                    <?php foreach ($_SESSION['item'] as $id => $product) ?>
                    <li><?= $product ?></li>
            </div>
        </section>
        <?php require 'inc/foot.php'; ?>