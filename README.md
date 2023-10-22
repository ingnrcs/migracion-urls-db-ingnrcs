# migracion-urls-db-ingnrcs

**Migración de URLs WordPress en Base de Datos**

**Descripción**:

Este proyecto es una herramienta de migración de WordPress que permite a los usuarios cambiar las URLs de sus sitios de WordPress de manera sencilla y segura. Con esta herramienta, puedes realizar la migración de un sitio de WordPress de un dominio a otro o desde un entorno local a un servidor en línea. Además, te ayuda a cambiar las URLs de la base de datos y ajustar las configuraciones para que tu sitio funcione sin problemas en su nuevo entorno.

**Características Destacadas**:

- **Migración de URLs** de forma fácil y segura.
- **Alineación automática de URLs** en la base de datos.
- **Personalización de los detalles de conexión a la base de datos**.
- **Documentación detallada de uso**.

**Instrucciones de Uso**:

1. Clone o descargue este repositorio, asegurandose que quede en una carpeta llamada migracion-ingnrcs junto a las carpetas `wp-content`, `wp-admin` y `wp-includes`.
2. Asegúrese de tener un archivo `wp-config.php` válido en la raíz de su instalación de WordPress junto a las carpetas `wp-content`, `wp-admin` y `wp-includes`.
3. Coloque la carpeta "migracion-ingnrcs"  en la raíz de su sitio WordPress junto a las carpetas mencionadas.
4. Acceda a través de su navegador a `http://tusitioweb.com/index.html`.
5. Complete los campos de **URL antigua**, **URL nueva** y **detalles de la base de datos**.
6. Haga clic en "**Migrar**" para comenzar el proceso de migración.
7. No Olvide Eliminar la carpeta del script después de completar la migración.

**Colaboración**:

Si deseas contribuir a este proyecto o informar sobre problemas, no dudes en abrir **problemas** (issues) o enviar **solicitudes de extracción** (pull requests). Tu contribución es bienvenida.

**Licencia**:

Este proyecto se distribuye bajo la **Licencia MIT**. Consulta el archivo **LICENSE** para obtener más información.

**Descripción detallada del proceso de migración en la base de datos**:

Cuando utilizas esta herramienta de migración de WordPress, el código realiza las siguientes tareas en la base de datos para asegurarse de que las URLs se actualicen correctamente:

1. **Búsqueda y reemplazo de URLs**: La herramienta busca todas las instancias de la **URL antigua** en la base de datos y las reemplaza por la **URL nueva**. Esto incluye contenido de páginas, publicaciones, opciones de configuración y metadatos.

2. **Actualización de enlaces internos**: Todos los enlaces internos que apuntan a la **URL antigua** se actualizan para apuntar a la **nueva URL**. Esto garantiza que la navegación dentro del sitio funcione sin problemas.

3. **Actualización de los datos de la tabla `wp_options`**: Los datos almacenados en la **tabla `wp_options`** se actualizan para reflejar la **nueva URL del sitio**. Esto es esencial para que el sitio funcione correctamente en su nuevo entorno.

4. **Cambios en los metadatos de imágenes y archivos adjuntos**: Los **metadatos de imágenes y archivos adjuntos** se actualizan para reflejar las **nuevas URLs**. Esto garantiza que las imágenes se muestren correctamente en el sitio.

5. **Ajuste del prefijo de tablas personalizado**: Si el sitio utiliza un **prefijo de tabla personalizado** (distinto de `wp_`), la herramienta ajusta el prefijo en la base de datos para reflejar el prefijo correcto.

6. **Informes de cambios realizados**: Al final del proceso de migración, la herramienta proporciona un **informe detallado** que muestra cuántos cambios se realizaron en la base de datos. Esto te permite verificar que la migración se realizó con éxito.

Gracias por usar mi script!!!

Si necesitas ayuda no olvides contactarme a info@ingnrcs.com
