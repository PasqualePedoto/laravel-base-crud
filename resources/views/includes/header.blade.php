<header>
    {{-- TOP HEADER --}}
    <div id="top-header">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="d-flex justify-content-end align-items-center my-1">
              <p class="text-white m-0 me-5">DC POWER VISA</p>
              <p class="text-white m-0">ADDITIONAL DC SITES</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- BOTTOM HEADER --}}
    <div id="bottom-header">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="d-flex justify-content-between">
              {{-- LOGO DC --}}
              <a href="{{ route('index') }}">
                <figure class="m-0 py-2">
                  <img src="{{ asset('images/dc-logo.png') }}" alt="logo-dc" class="img-fluid">
                </figure>
              </a>
              {{-- NAVBAR --}}
              <div>
                <nav class="h-100">
                  <ul class="m-0 h-100 d-flex align-items-center-justify-content-center">
                    <li class="active">
                      <a href="#">CHARACTERS</a>
                    </li>
                    <li>
                      <a href="{{ route('comics.index') }}">COMICS</a>
                    </li>
                    <li>
                      <a href="#">MOVIES</a>
                    </li>
                    <li>
                      <a href="#">TV</a>
                    </li>
                    <li>
                      <a href="#">GAMES</a>
                    </li>
                    <li>
                      <a href="#">COLLECTIBLES</a>
                    </li>
                    <li>
                      <a href="#">VIDEOS</a>
                    </li>
                    <li>
                      <a href="#">FANS</a>
                    </li>
                    <li>
                      <a href="#">NEWS</a>
                    </li>
                    <li>
                      <a href="#">SHOP</a>
                    </li>
                  </ul>
                </nav>
              </div>
              {{-- SEARCH --}}
              <div class="d-flex align-items-center">
                <div class="d-flex align-item-center justify-content-center">
                  <input type="search" placeholder="Search..">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</header>