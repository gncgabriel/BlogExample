<nav class="navbar navbar-dark navbar-expand-lg">
    <a class="navbar-brand logo d-flex justify-content-between align-items-center" href="{{ route('home') }}">{{env('APP_NAME')}} <i class="icon" style="background-image: url({{asset('images/Tocha.png')}})"></i> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-around" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item {{$home_active ?? ''}}">
                <a class="nav-link" href="{{ route('home') }}">Início <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{$artigos_active ?? ''}}">
                <a class="nav-link" href="{{ route('artigos') }}">Artigos</a>
            </li>
            <li class="nav-item {{$noticias_active ?? ''}}">
                <a class="nav-link" href="{{ route('noticias') }}">Notícias</a>
            </li>
            <li class="nav-item {{$tutoriais_active ?? ''}}">
                <a class="nav-link" href="{{ route('tutoriais') }}">Tutoriais</a>
            </li>
            <li class="nav-item {{$reviews_active ?? ''}}">
                <a class="nav-link" href="{{ route('reviews') }}">Reviews</a>
            </li>
        </ul>
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>
    </div>
</nav>
