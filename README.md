# Programación Web

Repositorio académico con prácticas, tareas y ejercicios de la materia de Programación Web.

## Sitio en GitHub Pages

El archivo `index.html` de la raíz funciona como portada del repositorio. GitHub Pages lo puede servir directamente si configuras el sitio con una de estas opciones:

1. En GitHub, entra a `Settings`.
2. Abre `Pages`.
3. En `Build and deployment`, selecciona `Deploy from a branch`.
4. Elige la rama principal del repositorio.
5. En la carpeta de publicación, selecciona `/root`.
6. Guarda la configuración.

Después de la publicación, GitHub Pages abrirá automáticamente el `index.html` como página inicial.

## Estructura

- `Partial 1/`: fundamentos de HTML, tablas, primeras páginas y documentos de tarea.
- `Partial 2/`: CSS, layouts, efectos visuales, JavaScript básico y examen.
- `Partial 3/`: Bootstrap, DOM, BOM, cookies, formularios, PHP y sistema CRUD.

## Notas importantes

- Los archivos `.html`, `.css`, `.js`, imágenes y PDF funcionan en GitHub Pages.
- Los archivos `.php` no se ejecutan en GitHub Pages porque Pages solo sirve contenido estático.
- Para probar PHP usa un servidor local como XAMPP, Laragon, MAMP o el servidor integrado de PHP.

## Probar localmente

Puedes abrir `index.html` directamente en el navegador. Si quieres servirlo como sitio local:

```bash
python3 -m http.server 8000
```

Luego abre `http://localhost:8000`.
