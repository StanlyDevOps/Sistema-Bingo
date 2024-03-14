# Sistema de Bingo

Este proyecto es un sistema desarrollado en Laravel para gestionar un juego de bingo, que incluye un generador de boletas, un generador de números para las boletas con su respectiva interfaz, y una interfaz de gestión de clientes.

## Estructura del Proyecto

El proyecto está organizado en las siguientes carpetas:

- **`app/`**: Contiene los archivos de la lógica de la aplicación.
- **`bootstrap/`**: Archivos relacionados con la inicialización de la aplicación.
- **`config/`**: Configuraciones de la aplicación.
- **`database/`**: Archivos relacionados con la base de datos, incluyendo migraciones y semillas.
- **`lang/en/`**: Archivos de idioma en inglés.
- **`public/`**: Archivos públicos accesibles desde el navegador, como los activos de la interfaz de usuario.
- **`resources/`**: Archivos de recursos, como vistas y archivos de activos que requieren compilación.
- **`routes/`**: Archivos de rutas de la aplicación.
- **`storage/`**: Archivos generados por la aplicación, como logs, archivos cargados y sesiones.
- **`tests/`**: Archivos de pruebas unitarias y de integración.

## Funcionalidades

- **Generador de Boletas**: Permite generar boletas de bingo para los jugadores.
- **Generador de Números para Boletas**: Proporciona una interfaz para generar números aleatorios y asignarlos a las boletas de los jugadores.
- **Interfaz de Gestión de Clientes**: Permite administrar los clientes, incluyendo su registro, actualización y eliminación.

## Requerimientos

- Laravel (versión especificada en composer.json)
- Servidor web compatible con PHP
- Base de datos MySQL o compatible
- Navegador web moderno

## Uso

1. Clona este repositorio en tu máquina local.
2. Configura el entorno de desarrollo y la base de datos según sea necesario.
3. Ejecuta las migraciones y las semillas para preparar la base de datos.
4. Inicia el servidor web y abre la aplicación en tu navegador.

## Licencia

Este proyecto está bajo la licencia [MIT](LICENSE.md). Para más información, consulta el archivo LICENSE.md.
