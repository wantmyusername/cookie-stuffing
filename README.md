# Silent Cookie Stuffing
Este script ofrece una solución efectiva para implementar la técnica de "cookie stuffing" en foros o blogs. Al utilizar la URL **example.com/thumb/kYnIzOi.png** como señuelo, los usuarios son redirigidos a destinos específicos dependiendo de su origen y condiciones particulares.


## 1. Solicitud de la URL thumb/kYnIzOi.png:

- El archivo .htaccess detecta esta URL y reescribe la solicitud a firmaP.php.

## 2. Ejecución de firmaP.php:

- **firmaP.php** verifica si hay un Referer en la solicitud.
- Si el Referer contiene la cadena "poringa", se establece **$_SESSION["vieneDePoringa"]** como "si".

## 3. Condiciones de Redirección en firmaP.php:

- Si **$_SESSION["vieneDePoringa"]** es "si":
- Se genera un número aleatorio y se establece un valor mínimo para la cookie.
- Si la cookie la_cookie no existe, se establece y se redirige a una URL específica.
- Si la cookie existe, se redirige a una imagen.
- Si **$_SESSION["vieneDePoringa"]** no es "si", se redirige a una imagen predeterminada.

## 4. Redirecciones desde firmaP.php:
- Dependiendo de las condiciones, la ejecución de firmaP.php puede redirigir a diferentes destinos, ya sea a una URL específica o a una imagen.

## 5. Acceso a thumb/index.php y plug.php (si es necesario):
- Si la redirección lleva a una URL específica (thumb/plug.php), se ejecutará el script plug.php.
- thumb/index.php no se ejecutará directamente desde la redirección de .htaccess, ya que firmaP.php toma el control antes de llegar a esta parte del sistema.

## 6. Ejecución de thumb/index.php y plug.php:
- Ambos scripts (thumb/index.php y plug.php) realizan una detección de dispositivos móviles mediante expresiones regulares en el User-Agent.
- Dependiendo de si el usuario está en un dispositivo móvil o no, se redirige a diferentes destinos.
