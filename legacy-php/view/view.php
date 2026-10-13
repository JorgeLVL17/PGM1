<?php
class View {
    public function render(
        $data, $contenido,
        $url_med, $titulo_med, $contenido_med,
        $url_sis, $titulo_sis, $contenido_sis,
        $url_der, $titulo_der, $contenido_der
    ) {
        echo '
        <!doctype html>
        <html lang="es">
          <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>' . $data . '</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <style>
              .bd-placeholder-img { font-size: 1.125rem; text-anchor: middle; user-select: none; }
              @media (min-width: 768px) { .bd-placeholder-img-lg { font-size: 3.5rem; } }
              .card-img-custom { width: 100%; height: 225px; object-fit: cover; }
            </style>
          </head>
          <body>
            <header>
              <div class="navbar navbar-dark bg-dark shadow-sm">
                <div class="container">
                  <a href="#" class="navbar-brand d-flex align-items-center">
                    <strong>' . $data . '</strong>
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                </div>
              </div>
            </header>

            <main>
              <section class="py-5 text-center container">
                <div class="row py-lg-5">
                  <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Bienvenido al diario digital de UNIFRANZ</h1>
                    <p class="lead text-muted">' . $contenido . '</p>
                    <p>
                      <a href="#" class="btn btn-primary my-2">Mas Detalles</a>
                      <a href="#" class="btn btn-secondary my-2">Inscripciones</a>
                    </p>
                  </div>
                </div>
              </section>

              <div class="album py-5 bg-light">
                <div class="container">
                  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    
                    <!-- Tarjeta Medicina -->
                    <div class="col">
                      <div class="card shadow-sm">
                        <img src="'.$url_med.'" class="card-img-custom" alt="Medicina">
                        <div class="card-body">
                         <h4>'.$titulo_med.'</h4>
                          <p class="card-text">'.$contenido_med.'</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                              <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Tarjeta Sistemas -->
                    <div class="col">
                      <div class="card shadow-sm">
                        <img src="'.$url_sis.'" class="card-img-custom" alt="Ing. de Sistemas">
                        <div class="card-body">
                            <h4>'.$titulo_sis.'</h4>
                          <p class="card-text">'.$contenido_sis.'</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                              <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Tarjeta Derecho -->
                    <div class="col">
                      <div class="card shadow-sm">
                        <img src="'.$url_der.'" class="card-img-custom" alt="Derecho">
                        <div class="card-body">
                         <h4>'.$titulo_der.'</h4>
                          <p class="card-text">'.$contenido_der.'</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                              <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </main>
          </body>
        </html>
        ';
    }
}
?>