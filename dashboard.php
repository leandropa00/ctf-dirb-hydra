<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: index.php');
    exit;
}

$username = $_SESSION['username'] ?? 'Usuario';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sistema CTF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }
        .header {
            background: rgba(255, 255, 255, 0.95);
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .header-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }
        .user-info {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .logout-btn {
            background: #dc3545;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
        }
        .logout-btn:hover {
            background: #c82333;
        }
        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }
        .welcome-card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }
        .welcome-card h1 {
            color: #333;
            margin: 0 0 10px 0;
        }
        .welcome-card p {
            color: #666;
            margin: 0;
            font-size: 16px;
        }
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        .info-card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .info-card h3 {
            color: #333;
            margin: 0 0 15px 0;
            font-size: 18px;
        }
        .info-card p {
            color: #666;
            margin: 0;
            line-height: 1.6;
        }
        .flag {
            background: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
            font-family: monospace;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="header-content">
            <div class="logo">🔐 Sistema CTF</div>
            <div class="user-info">
                <span>Bienvenido, <strong><?php echo htmlspecialchars($username); ?></strong></span>
                <a href="logout.php" class="logout-btn">Cerrar Sesión</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="welcome-card">
            <h1>🎉 ¡Acceso Exitoso!</h1>
            <p>Has logrado acceder al sistema. ¡Felicitaciones por completar este desafío!</p>
        </div>

        <div class="info-grid">
            <div class="info-card">
                <h3>📊 Información del Usuario</h3>
                <p><strong>Usuario:</strong> <?php echo htmlspecialchars($username); ?></p>
                <p><strong>Estado:</strong> Activo</p>
                <p><strong>Último acceso:</strong> <?php echo date('Y-m-d H:i:s'); ?></p>
            </div>

            <div class="info-card">
                <h3>🏆 Desafío Completado</h3>
                <p>Has encontrado exitosamente las credenciales correctas utilizando las políticas de contraseña del sistema.</p>
                <p>Este es un ejemplo de cómo la información de políticas puede ser utilizada para construir diccionarios de ataque.</p>
            </div>
        </div>

        <?php if ($username === 'admin'): ?>
            <div class="flag">
                <strong>🏁 FLAG ENCONTRADA:</strong><br>
                CTF{admin_password_policy_exploitation_success}
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
