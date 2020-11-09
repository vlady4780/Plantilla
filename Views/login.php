<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>

	<link rel="stylesheet" type="text/css" href="<?= BASE_URL(); ?>Assets/css/bootstrap.css" media="all">

	<?php require_once "Views/scripts.php"; ?>
</head>
<body>
    <div>
        <section>
            <form action="<?= BASE_URL(); ?>login/logn_in" method="POST">
                <h1>Login</h1>
                <table>
                    <tr>
                        <td><input placeholder="Correo" type="text" name="correo" id="correo"></td>
                    </tr>
                    <tr>
                        <td><input placeholder="Contraseña" type="password" name="clave" id="clave"></td>
                    </tr>
                </table>
                <button type="submit">Ingresar</button>
            </form>
        </section>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="<?= BASE_URL(); ?>Assets/js/bootstrap.min.js"></script>
<script>
    const base_url = "<?= BASE_URL()?>"
</script>
</html>