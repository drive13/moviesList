<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">
        <title>Album example · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">

        <!-- Bootstrap core CSS -->
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                font-size: 3.5rem;
                }
            }
        </style>

        
        </head>
    <body>

    <header>
        {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/kategori">Kategori</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Genre
                        </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        {{-- Navbar End --}}
    </header>

    <main>
        {{-- <section class="py-5 text-center container">
            <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Welcome to Movie List</h1>
                <p class="lead text-muted">Search for movie you want to watch here. We give you the recommendation and the details about movie that fits your taste! <3</p>
                <p>
                </p>
            </div>
            </div>
        </section> --}}

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="100%" src="https://image.tmdb.org/t/p/w500/{{ $data['poster_path'] }}" alt="">
                            <div class="card-body">
                                
                                <h5 class="card-title">{{ array_key_exists('original_title', $data) ? $data['original_title'] : 'Unknown'; }}</h5>
                                <p class="card-text">
                                    Synopsis : {{ $data['overview'] }}
                                </p>
                                <p class="card-text">
                                    {{-- Genre : {{ $data['genres'] }} --}}
                                    {{-- @foreach ($data['genres'] as $genre)
                                        <a href="#"><small>{{ $genre }}</small></a>
                                    @endforeach --}}
                                </p>
                                <div class="d-flex justify-content-between mb-3">
                                    <small class="text-muted">People Watching : {{ $data['popularity'] }}</small>
                                    <small class="text-muted">Score : {{ $data['vote_average'] }}</small>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    {{-- <a href="/movies/{{ $data['id'] }}" class="btn btn-sm btn-info">Lihat</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="text-muted py-5">
    <div class="container">
        <p class="float-end mb-1">
            <a href="#">Back to top</a>
        </p>
        <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>.</p>
    </div>
    </footer>


        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

        
    </body>
</html>
