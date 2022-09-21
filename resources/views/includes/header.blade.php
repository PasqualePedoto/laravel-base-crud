<header>
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg bg-light">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="{{ route('index') }}">Home</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Comics</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('comics.create') }}">New Comics</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>