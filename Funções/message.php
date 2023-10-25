<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem do sistema</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php
        session_start();
        if (!empty($_SESSION["error"])) :
        ?>
            <p>
                <?= $_SESSION["error"]; ?>
            </p>
        <?php
            unset($_SESSION["error"]);
        endif;
        ?>

        <?php
        if (!empty($_SESSION["amount_dollar"])) :
        ?>
            <p>
                <?= $_SESSION["amount_dollar"]; ?>
            </p>
        <?php
        endif;
        unset($_SESSION["amount_dollar"]);
        ?>

        <?php
        if (!empty($_SESSION["amount_euro"])) :
        ?>
            <p>
                <?= $_SESSION["amount_euro"]; ?>
            </p>
        <?php
        endif;
        unset($_SESSION["amount_euro"]);
        ?>
    </main>
</body>

</html>