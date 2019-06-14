<html>
    <head>
        <meta charset="UTF-8">
        <title>MyFirstProject - Alessio</title>
    </head>
    <body>
        Voer een tekst in
        <form method="post" action="./controllers/Presenter.php">
            <input type="text" name="naam">
            <input type="submit" value="Submit" name="submit" action="view.php">
        </form>
        <p>
        <?php
            echo $viewData["palindroom"];
            echo $viewData["message"];
            echo $viewData["action"];
        ?>
        </p>
    </body>
</html>
