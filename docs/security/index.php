<?php
// Política de Contraseñas - SecurePHP Framework v2.1.4
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Política de Contraseñas - SecurePHP Framework v2.1.4</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
            color: #333;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        h1 {
            color: #2c3e50;
            border-bottom: 3px solid #3498db;
            padding-bottom: 10px;
        }
        h2 {
            color: #34495e;
            margin-top: 30px;
            border-left: 4px solid #3498db;
            padding-left: 15px;
        }
        h3 {
            color: #2c3e50;
            margin-top: 25px;
        }
        .info-box {
            background: #e8f4fd;
            border: 1px solid #3498db;
            border-radius: 5px;
            padding: 15px;
            margin: 20px 0;
        }
        .warning-box {
            background: #fff3cd;
            border: 1px solid #ffc107;
            border-radius: 5px;
            padding: 15px;
            margin: 20px 0;
        }
        .danger-box {
            background: #f8d7da;
            border: 1px solid #dc3545;
            border-radius: 5px;
            padding: 15px;
            margin: 20px 0;
        }
        ul {
            margin: 15px 0;
        }
        li {
            margin: 8px 0;
        }
        code {
            background: #f8f9fa;
            padding: 2px 6px;
            border-radius: 3px;
            font-family: 'Courier New', monospace;
            color: #e83e8c;
        }
        pre {
            background: #2d3748 !important;
            color: #e2e8f0 !important;
            padding: 20px !important;
            border-radius: 8px !important;
            overflow-x: auto !important;
            margin: 20px 0 !important;
            border: 1px solid #4a5568 !important;
            font-family: 'Courier New', 'Monaco', 'Consolas', monospace !important;
            font-size: 14px !important;
            line-height: 1.5 !important;
            white-space: pre-wrap !important;
            word-wrap: break-word !important;
        }
        pre code {
            background: none !important;
            color: inherit !important;
            padding: 0 !important;
            font-family: inherit !important;
            font-size: inherit !important;
        }
        .example {
            background: #f8f9fa;
            border-left: 4px solid #28a745;
            padding: 15px;
            margin: 15px 0;
        }
        .example-invalid {
            background: #f8f9fa;
            border-left: 4px solid #dc3545;
            padding: 15px;
            margin: 15px 0;
        }
        .footer {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #dee2e6;
            text-align: center;
            color: #6c757d;
        }
        .emoji {
            font-size: 1.2em;
        }
        /* Estilos adicionales para bloques de código */
        .code-block {
            background: #2d3748;
            color: #e2e8f0;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
            border: 1px solid #4a5568;
            font-family: 'Courier New', 'Monaco', 'Consolas', monospace;
            font-size: 14px;
            line-height: 1.5;
            overflow-x: auto;
        }
        .code-block .php-tag {
            color: #ff6b6b;
            font-weight: bold;
        }
        .code-block .comment {
            color: #68d391;
            font-style: italic;
        }
        .code-block .string {
            color: #fbb6ce;
        }
        .code-block .keyword {
            color: #63b3ed;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><span class="emoji">🔐</span> Política de Contraseñas - SecurePHP Framework v2.1.4</h1>
        
        <div class="info-box">
            <strong><span class="emoji">📋</span> Información:</strong> Esta página describe las políticas de contraseñas implementadas en SecurePHP Framework v2.1.4 para garantizar la seguridad de las cuentas de usuario.
        </div>

        <h2>Requisitos de Contraseñas</h2>
        <p>Para mantener un alto nivel de seguridad, SecurePHP Framework v2.1.4 implementa las siguientes políticas de contraseñas:</p>

        <h3><span class="emoji">🔒</span> Políticas Obligatorias:</h3>
        <ul>
            <li><strong>Longitud:</strong> 10 caracteres</li>
            <li><strong>Mayúsculas:</strong> Al menos 1 letra mayúscula (A-Z)</li>
            <li><strong>Minúsculas:</strong> Al menos 1 letra minúscula (a-z)</li>
            <li><strong>Números:</strong> Al menos 1 dígito (0-9)</li>
            <li><strong>Caracteres especiales:</strong> Al menos 1 carácter especial (!@#$%^&*)</li>
            <li><strong>No espacios:</strong> No se permiten espacios en blanco</li>
            <li><strong>No caracteres repetidos:</strong> Máximo 2 caracteres consecutivos iguales</li>
        </ul>

        <h2>Patrones Prohibidos</h2>
        <p>El sistema rechaza automáticamente contraseñas que contengan:</p>
        <ul>
            <li>Palabras comunes del diccionario (password, admin, user, etc.)</li>
            <li>Secuencias numéricas (123456, 12345678, etc.)</li>
            <li>Secuencias alfabéticas (abcdef, qwerty, etc.)</li>
            <li>Información personal obvia (nombre de usuario, fecha de nacimiento)</li>
            <li>Patrones de teclado (qwerty, asdfgh, etc.)</li>
        </ul>

        <h2>Cuenta Administrativa por Defecto</h2>
        <h3><span class="emoji">⚠️</span> Importante - Cuenta Admin</h3>
        
        <div class="warning-box">
            <strong>Por motivos de seguridad y configuración inicial, el sistema incluye una cuenta administrativa por defecto:</strong>
            <ul>
                <li><strong>Usuario:</strong> admin</li>
                <li><strong>Estado:</strong> Activa por defecto</li>
                <li><strong>Permisos:</strong> Acceso completo al sistema</li>
                <li><strong>Recomendación:</strong> Cambiar la contraseña inmediatamente después de la instalación</li>
            </ul>
        </div>

        <div class="danger-box">
            <strong><span class="emoji">🚨</span> Advertencia de Seguridad:</strong><br>
            La contraseña por defecto del usuario admin sigue las políticas estándar del sistema.<br>
            Es <strong>CRÍTICO</strong> cambiar esta contraseña antes de poner el sistema en producción.
        </div>

        <h2>Ejemplos de Contraseñas Válidas</h2>
        
        <div class="example">
            <strong>Ejemplos que CUMPLEN las políticas:</strong><br>
            <code>Admin2001@</code> - ✅ Cumple todos los requisitos<br>
            <code>SecurePass123</code> - ✅ Cumple todos los requisitos<br>
            <code>Test2019!</code> - ✅ Cumple todos los requisitos<br>
            <code>MyPass2016#</code> - ✅ Cumple todos los requisitos
        </div>

        <div class="example-invalid">
            <strong>Ejemplos que NO cumplen las políticas:</strong><br>
            <code>password</code> - ❌ Sin números ni caracteres especiales<br>
            <code>12345678</code> - ❌ Sin letras ni caracteres especiales<br>
            <code>Admin</code> - ❌ Sin números ni caracteres especiales<br>
            <code>Pass123</code> - ❌ Sin caracteres especiales
        </div>

        <h2>Implementación Técnica</h2>
        <p>La validación de contraseñas se implementa mediante expresiones regulares:</p>
        
        <div style="background: black; color: white; padding: 10px; border: 1px solid gray; font-family: Arial;">
            <b>&lt;?php</b><br>
            // Patrón de validación de contraseñas<br>
            $password_pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,32}$/';<br><br>
            // Verificación adicional para patrones prohibidos<br>
            $forbidden_patterns = [<br>
            &nbsp;&nbsp;&nbsp;&nbsp;'/password/i',<br>
            &nbsp;&nbsp;&nbsp;&nbsp;'/admin/i', <br>
            &nbsp;&nbsp;&nbsp;&nbsp;'/user/i',<br>
            &nbsp;&nbsp;&nbsp;&nbsp;'/123456/',<br>
            &nbsp;&nbsp;&nbsp;&nbsp;'/qwerty/i'<br>
            ];<br>
            <b>?&gt;</b>
        </div>

        <h2>Configuración del Sistema</h2>
        <p>Para modificar las políticas de contraseñas, edite el archivo de configuración:</p>
        
        <div style="background: black; color: white; padding: 10px; border: 1px solid gray; font-family: Arial;">
            <b>&lt;?php</b><br>
            // Archivo: config/security.php<br>
            $config = [<br>
            &nbsp;&nbsp;&nbsp;&nbsp;'password_policy' => [<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'min_length' => 8,<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'max_length' => 32,<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'require_uppercase' => true,<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'require_lowercase' => true,<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'require_numbers' => true,<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'require_special' => true,<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'forbidden_words' => ['password', 'admin', 'user', 'test']<br>
            &nbsp;&nbsp;&nbsp;&nbsp;]<br>
            ];<br>
            <b>?&gt;</b>
        </div>

        <div class="info-box">
            <strong><span class="emoji">💡</span> Nota:</strong> Los cambios en la configuración de políticas de contraseñas requieren reiniciar el servicio web para que surtan efecto.
        </div>

        <h2>Auditoría y Logs</h2>
        <p>El sistema registra automáticamente:</p>
        <ul>
            <li>Intentos de login fallidos</li>
            <li>Cambios de contraseña exitosos</li>
            <li>Violaciones de políticas de contraseñas</li>
            <li>Accesos administrativos</li>
        </ul>

        <div class="footer">
            <strong>SecurePHP Framework v2.1.4</strong> - Documentación oficial<br>
            Última actualización: <?php echo date('Y-m-d'); ?> | Versión: v2.1.4<br>
            Para más información, consulte la documentación completa del framework.
        </div>
    </div>
</body>
</html>