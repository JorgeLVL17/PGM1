# Portafolio Personal — Evaluación H3

Portafolio web multimedia de **Jorge Leandro Valencia Linares**, estudiante de Ingeniería de Sistemas y desarrollador web/móvil. El frontend está construido con **Angular** y **Bootstrap**; el contenido dinámico se carga de forma asíncrona desde **`src/assets/cv.json`**.

## Tecnologías

| Tecnología | Uso |
|------------|-----|
| **Angular 19** | SPA, componentes standalone, rutas, `HttpClient` |
| **Bootstrap 5** | Layout responsive, utilidades, modal y navegación |
| **JSON** | Fuente de datos del CV y la galería (`cv.json`) |
| **SCSS** | Estilos del portafolio |
| **GitHub Pages** | Hosting estático del build de producción |

## Estructura del proyecto

```
PGM1/
├── legacy-php/          # MVC PHP anterior (referencia; no se despliega en Pages)
├── src/
│   ├── app/
│   │   ├── components/  # sidebar, cv-panel, photo-gallery
│   │   ├── pages/home/  # Vista principal (layout izquierda / derecha)
│   │   ├── services/    # CvService (HttpClient)
│   │   └── models/      # Tipos TypeScript del CV
│   └── assets/
│       ├── cv.json      # Datos del portafolio (editable)
│       └── images/      # Fotos personales (reemplazar placeholders)
├── angular.json
├── Agente.md
└── dist/                # Salida de `ng build` (no commitear salvo estrategia docs/)
```

## Requisitos previos

- **Node.js** 20+ (probado con v24)
- **npm** 10+

> Si `npm install` falla por política de scripts (`EALLOWSCRIPTS`), ejecuta:
> `npm install --dangerously-allow-all-scripts`

## Cómo levantar el proyecto en local

```powershell
cd C:\Users\jorge\OneDrive\Desktop\PGM\PGM1
npm install --dangerously-allow-all-scripts
npm start
```

Abre [http://localhost:4200](http://localhost:4200).

## Personalizar contenido

1. Edita **`src/assets/cv.json`** (nombre, habilidades, enlaces, rutas de imágenes).
2. Sustituye los archivos en **`src/assets/images/`** (`profile.jpg`, `gallery-1.jpg`, etc.) y actualiza las URLs en el JSON si cambias nombres.

## Compilar para GitHub Pages

El repositorio debe publicarse con **`baseHref`** igual al nombre del repo. Por defecto en `angular.json` está configurado **`/PGM1/`**. Si tu repo en GitHub tiene otro nombre, cambia `baseHref` en `angular.json` → `projects.portafolio-personal.architect.build.configurations.production.baseHref`.

```powershell
npm run build:gh-pages
```

La aplicación compilada queda en:

`dist/portafolio-personal/browser/`

### Despliegue en GitHub Pages (rama `gh-pages`)

Opción A — subir solo la carpeta del build:

```powershell
npm run build:gh-pages
npx angular-cli-ghpages --dir=dist/portafolio-personal/browser
```

Opción B — carpeta `/docs` en la rama `main`:

1. Copia el contenido de `dist/portafolio-personal/browser/` a `docs/` en la raíz.
2. En GitHub: **Settings → Pages → Build and deployment → Deploy from branch → `/docs`**.

### Verificación local del build

```powershell
npx http-server dist/portafolio-personal/browser -p 8080
```

Visita `http://localhost:8080/PGM1/` (con el `baseHref` configurado).

## Arquitectura frontend

- **`CvService`**: obtiene `assets/cv.json` con `HttpClient` y cache en memoria (`shareReplay`).
- **`HomeComponent`**: layout con menú lateral (desktop) y menú colapsable (móvil); zona derecha con foto, CV y galería interactiva.
- **`CvPanelComponent`** y **`PhotoGalleryComponent`**: consumen el mismo servicio y muestran secciones del JSON.

## Autor

**Jorge Leandro Valencia Linares** — Ing. de Sistemas · Desarrollador web y móvil.
