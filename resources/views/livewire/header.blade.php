<header>
      <nav class="navbar navbar-expand-lg bg-white sombra">
        <div class="container-fluid d-flex justify-content-between align-items-center mx-5 my-3">
          
          <a class="navbar-brand d-flex align-items-center" href="index.html">
            <img src="{{ asset('assets/img/logo/1.png') }}" alt="Logo" width="40" height="40" class="d-inline-block align-text-top me-2 rounded-circle">
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link text-dark" href="{{ url('/') }}">Catalogo</a>
              </li>

              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      Gerenciamento
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item fw-bold" target="_blank" href="{{ url('consulta') }}">Estoque</a></li>
                      <li><a class="dropdown-item fw-bold" target="_blank" href="{{ url('create') }}">Adicionar produto</a></li>
                  </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>