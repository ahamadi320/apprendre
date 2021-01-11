<h1>Ma homepage</h1>

<a href="<?= $router->generate('contact'); ?>">Nous contacter</a>
<a href="<?= $router->generate('comptable', ['id' => 60,'slug'=> 'biens-comptable']); ?>">Voir nos biens</a>