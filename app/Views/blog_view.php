<html>
    <!-- 
    Création d'une vue
    ******************
    <head>
        <title>My Blog</title>
    </head>
    <body>
        <h1>Welcome to my Blog!</h1>
    </body>
    -->

    <!-- Données dynamiques -->
    <head>
        <title><?= esc($title) ?></title>
    </head>

    <body>
        <h1><?= esc($heading) ?></h1>
    </body>

    <!-- Création d'une boucle -->
    <h1><?= esc($heading) ?></h1>

    <h2>My Todo List</h2>

    <ul>
    <?php foreach ($todo_list as $item): ?>

        <li><?= esc($item) ?></li>

    <?php endforeach ?>
    </ul>
</html>

