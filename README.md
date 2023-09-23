# Mini blog

Esta aplicación es de tipo *blog* y es el resultado de combinar **dos** cursos de la plataforma [Aprendible](https://aprendible.com/) - **Instructor**: *Jorge García*

- [Fundamentos de Laravel 9](https://aprendible.com/series/fundamentos-de-laravel-9): Aunque dice *Laravel 9* el curso se desarrolló en **[Laravel 10](https://laravel.com/docs/10.x)**, y se trata de aprender los conceptos básicos construyendo un blog simple, básicamente es un CRUD de *artículos*, un mecanismo básico de autenticación construido sin paquetes adicionales y un diseño simple e incompleto (vistas), este proyecto se publicó temporalmente en [Fly.io](https://fly.io/) en el enlace: [https://mini-blog-lp.fly.dev](https://mini-blog-lp.fly.dev/blog).

- [Fundamentos de Tailwind CSS](https://aprendible.com/series/tailwindcss): Precisamente en este curso se contruye un diseño para una página de blog aprendiendo los conceptos básicos de [Tailwind CSS](https://tailwindcss.com/) y empaquetándolo con [Vite](https://vitejs.dev/). Este diseño es muy completo y contiene: *diseño responsive*, *soporte para modo oscuro*, etc

Ahora se trata de unir el [diseño estático](https://tailwindcss-template-drab.vercel.app/) desarrollado en Tailwind CSS al blog desarrollado en Laravel añadiendo primeramente las caracteristicas del diseño soportadas dinámicamente desde el backend. El diseño está en inglés pero la aplicación está en español y está desarrollada para en un futuro poderla extender a otros idiomas.

## Tecnologías usadas

- **[Laravel](https://laravel.com/)**: Para el backend y las vistas (**Blade**).
- **[Vite](https://vitejs.dev/)**: Para desarrollo, empaquetado y minificación de *assets* para producción.
- **[Alpine JS](https://alpinejs.dev/)**: Para dar alguna interactividad usando Javascript con facilidad.
- **[Tailwind CSS](https://tailwindcss.com/)**: Framework de clases utilitarias para el diseño CSS sin salirse del html.
- **[Fly.io](https://fly.io/)**: Permite el despliegue de aplicaciones web usando contenedores de [Docker](https://www.docker.com/), es posible subir una aplicación gratuita.
- **[Vercel](https://vercel.com/)**: Permite subir proyectos estáticos o SPA con gran facilidad, especializado en subir apllicaciones hechas en [Next JS](https://vercel.com/) (*React*) y otros frameworks frontend de Javascript.

## Tareas pendientes

En este momento ya se hecho la integración del diseño al blog de varios componentes, pero quedan varias tareas faltantes que poco a poco se irán haciendo:

- [x] Aplicar diseño Tailwind a las páginas: *Inicio ?*, *Nosotros*, *Contacto* y *Artículo individual*.
- [x] Migrar funcionalidad de Vanilla JS a *[Alpine JS](https://alpinejs.dev/)*.
- [x] Habilitar menú de autenticación agregando un *dropdown*.
- [x] Agregar diseño que había en la página de *Contacto* a los formularios de *Login* y *Registro*.
- [x] Diseñar botones de acción para la página del blog (*Crear*, *Editar* y *Eliminar*). Estos no venían con el diseño.
- [x] Dar funcionalidad a los botones creados en el punto anterior.
- [x] Agregar el diseño de la *Paginación* al blog y darle funcionalidad.
- [x] Crear Categorías de los artículos en el backend (incluidas las relaciones) para darle dinamismo al link del diseño.
- [x] Actualizar el formulario de creación y edición de artículos para escoger la categoría.
- [x] Agregar la relación del autor para los artículos.
- [x] Crear políticas de acceso para poder ejecutar acciones sobre los artículos.
- [x] Permitir al autor poder editar sus propios artículos y mostrar su nombre en el diseño.
- [x] Mostrar la fecha de publicación en el diseño formateándola adecuadamente.
- [x] Mostrar sólo los artículos publicados a todos ordenados por fecha de publicación y permitir a los autores publicar solo cuando tenga la versión final, es decir crear inicialmente los artículos como borradores.
- [x] Implementar la subida de imágenes a los artículos en su creación y edición.
- [x] Habilitar el formulario de contacto para enviar correos electrónicos al *administrador del blog*.
- [x] Habilitar los link correctos para las redes sociales del *footer*.
- [x] Agregar campo de texto enriquecido o markdown para editar los contenidos de los artículos (pendiente dark mode).
- [x] Agregar los últimos posts a la página de inicio.
- [ ] Terminar de agregar las secciones de contenido a la página de inicio.
- [ ] Desplegar el proyecto a producción arreglando posibles problemas de subida de imágenes o envío de correos desde producción.
- [x] Usar URL's amigables para los artículos

## Licencia

Así como el framework Laravel es software open-sourced este también estará licenciado bajo la licencia [MIT license](https://opensource.org/licenses/MIT).
