# Guía del Instructor - CTF Password Policy Exploitation

## 🎯 Objetivo del Laboratorio

Este laboratorio enseña a los estudiantes cómo:
1. Realizar reconocimiento web para encontrar información sensible
2. Analizar políticas de contraseñas para construir diccionarios específicos
3. Ejecutar ataques de fuerza bruta dirigidos
4. Comprender la importancia de políticas de contraseñas seguras

## 📋 Información del Laboratorio

### Credenciales del Sistema
- **admin** : `Admin2024!` (usuario objetivo)
- **user** : `Password123` (usuario de distracción)
- **test** : `Test2024!` (usuario de distracción)

### Flag
```
CTF{admin_password_policy_exploitation_success}
```

### Ruta Objetivo
```
/docs/security/index.php
```

## 🔍 Flujo Esperado del Estudiante

### Fase 1: Reconocimiento (15-20 minutos)
1. **Escaneo de directorios**
   ```bash
   # Usando dirb
   dirb http://localhost:8080/ wordlists/common.txt
   ```

2. **Descubrimiento de la documentación**
   - Los estudiantes deberían encontrar `/docs/security/index.php`
   - Esta página contiene toda la información necesaria

### Fase 2: Análisis de Políticas (10-15 minutos)
1. **Identificar políticas clave:**
   - Usuario admin por defecto
   - Requisitos: mayúscula, minúscula, número, carácter especial
   - Longitud: 10 caracteres
   - Patrones comunes mencionados

2. **Construir diccionario específico**
   - Basado en las políticas encontradas
   - Enfocado en el usuario admin
   - Incluir años comunes (2024, 2023, etc.)

### Generación de Diccionarios con Crunch

Para crear diccionarios específicos basados en las políticas encontradas, se puede usar la herramienta `crunch`:

```bash
# Diccionario básico siguiendo las políticas (10-10 caracteres)
crunch 10 10 -t Admin%%%%^ -o wordlists/passwords.txt
```

**Explicación de los parámetros:**
- `8 12`: Longitud mínima y máxima
- `-t Admin%%%%`: Patrón donde % representa caracteres variables
- `-o archivo.txt`: Archivo de salida
- `-p Admin 2024 !`: Permutación específica (Admin + año + carácter especial)

### Fase 3: Ataque de Fuerza Bruta (10-15 minutos)
1. **Usar herramientas como Hydra o Medusa**
   ```bash
   # Ejemplo con Hydra
   hydra -l admin -P wordlists/passwords.txt localhost http-post-form "/index.php:username=^USER^&password=^PASS^:Credenciales inválidas" -s 8080
   ```

2. **Acceder al sistema**
   - Login exitoso con admin:Admin2024!
   - Obtener la flag en el dashboard

## 🛠️ Herramientas Recomendadas para Estudiantes

### Reconocimiento
- **dirb** - Escáner de directorios clásico
- **gobuster** - Escáner moderno y rápido
- **dirbuster** - Interfaz gráfica
- **wfuzz** - Fuzzing web avanzado

### Ataques de Fuerza Bruta
- **hydra** - Herramienta estándar
- **medusa** - Alternativa a hydra
- **burp suite** - Suite completa
- **john the ripper** - Para hashes

## 📚 Conceptos de Aprendizaje

### Técnicas de Reconocimiento
- **Directory Enumeration**: Descubrimiento de contenido oculto
- **Information Disclosure**: Exposición de información sensible
- **Documentation Analysis**: Análisis de documentación técnica

### Análisis de Políticas
- **Policy Interpretation**: Entender requisitos de seguridad
- **Pattern Recognition**: Identificar patrones comunes
- **Dictionary Construction**: Crear listas específicas

### Ataques de Fuerza Bruta
- **Targeted Attacks**: Ataques dirigidos vs. aleatorios
- **Rate Limiting**: Consideraciones de velocidad
- **Tool Selection**: Elegir la herramienta adecuada

## 🎓 Puntos de Discusión

### Durante el Laboratorio
1. **¿Por qué es importante el reconocimiento?**
   - Información es poder
   - Reduce el espacio de búsqueda
   - Permite ataques dirigidos

2. **¿Qué hace que una política sea efectiva?**
   - Complejidad vs. usabilidad
   - Patrones predecibles
   - Implementación vs. diseño

3. **¿Cómo prevenir estos ataques?**
   - Políticas más estrictas
   - Rate limiting
   - Monitoreo de intentos

### Después del Laboratorio
1. **Análisis de resultados**
   - Tiempo de resolución
   - Herramientas utilizadas
   - Estrategias aplicadas

2. **Mejores prácticas**
   - Políticas de contraseñas robustas
   - Implementación de controles
   - Monitoreo y alertas

## 🔧 Personalización del Laboratorio

### Cambiar Dificultad
- **Fácil**: Agregar más pistas en la página de políticas
- **Medio**: Ocultar mejor la ruta de documentación
- **Difícil**: Requerir análisis más profundo de políticas

### Modificar Credenciales
1. Editar `index.php` línea 6-10:
   ```php
   $valid_users = [
       'admin' => 'NuevaPassword2024!',
       'user' => 'OtraPassword123',
       'test' => 'TestPassword2024!'
   ];
   ```

2. Actualizar la página de políticas en `security/index.php`

3. Regenerar el diccionario con `generate_wordlist.py`

### Agregar Complejidad
- Implementar rate limiting
- Agregar CAPTCHA después de varios intentos
- Incluir más usuarios de distracción
- Crear políticas más complejas

## 📊 Métricas de Evaluación

### Tiempo de Resolución
- **Excelente**: < 30 minutos
- **Bueno**: 30-45 minutos
- **Aceptable**: 45-60 minutos
- **Necesita ayuda**: > 60 minutos

### Herramientas Utilizadas
- Reconocimiento: dirb/gobuster
- Análisis: lectura manual de políticas
- Ataque: hydra/medusa/burp

### Estrategia Aplicada
- Reconocimiento sistemático
- Análisis de políticas
- Construcción de diccionario
- Ataque dirigido

## 🚨 Solución de Problemas

### Problemas Comunes
1. **No encuentran la documentación**
   - Verificar que dirb/gobuster esté funcionando
   - Sugerir wordlists más completas
   - Dar pista sobre directorios comunes

2. **No entienden las políticas**
   - Explicar cada requisito
   - Mostrar ejemplos de contraseñas válidas
   - Ayudar con la construcción del diccionario

3. **Herramientas no funcionan**
   - Verificar sintaxis de comandos
   - Probar con herramientas alternativas
   - Revisar configuración de red

### Pistas Graduales
1. **Pista 1**: "Busca documentación técnica del sistema"
2. **Pista 2**: "Las políticas de seguridad suelen estar en /security"
3. **Pista 3**: "Hay un usuario admin por defecto"
4. **Pista 4**: "Las contraseñas siguen patrones predecibles"

## 📝 Notas Adicionales

- El laboratorio está diseñado para ser resuelto en 45-60 minutos
- Se puede ejecutar en paralelo para múltiples estudiantes
- Los logs de Apache pueden ser útiles para debugging
- Considerar usar VPN si se ejecuta remotamente

## 🔗 Recursos Adicionales

- [OWASP Testing Guide](https://owasp.org/www-project-web-security-testing-guide/)
- [Dirb Wordlists](https://github.com/digination/dirb-wordlists)
- [Hydra Documentation](https://github.com/vanhauser-thc/thc-hydra)
- [Password Policy Best Practices](https://cheatsheetseries.owasp.org/cheatsheets/Authentication_Cheat_Sheet.html)
