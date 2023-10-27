<!DOCTYPE html>
<html>
<head>
    <title>Login y Registro</title>
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
</head>
<body>
    <div class="loading-bar"></div>
    <div class="container">
        <div class="form-container" id="login-form">
            <h2>Login</h2>
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username">Usuario:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="Iniciar sesión">
                </div>
            </form>
            <div class="button-container">
                <button id="register-button">Registrar</button>
            </div>
        </div>

        <div class="form-container" id="register-form">
            <h2>Registro</h2>
            <form action="register.php" method="post">
                <div class="form-group">
                    <label for="newUsername">Nuevo Usuario:</label>
                    <input type="text" id="newUsername" name="newUsername" required>
                </div>
                <div class="form-group">
                    <label for="newPassword">Nueva Contraseña:</label>
                    <input type="password" id="newPassword" name="newPassword" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="Registrarse">
                </div>
            </form>
            <div class="button-container">
                <button id="login-button">Volver al Login</button>
            </div>
        </div>
    </div>

    <script src="/js/index.js"></script>
</body>
</html>
