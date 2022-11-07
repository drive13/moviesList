@extends('partials.footer')
@extends('partials.template')
@extends('partials.navbar')

@section('content')
    <main>
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Welcome to Movie List</h1>
                <p class="lead text-muted">Search for movie you want to watch here. We give you the recommendation and the details about movie that fits your taste! <3</p>
                <p>
                {{-- <a href="#" class="btn btn-primary my-2">Main call to action</a>
                <a href="#" class="btn btn-secondary my-2">Secondary action</a> --}}
                </p>
            </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($data as $film)
                            <div class="col">
                                <div class="card shadow-sm">
                                    <img class="bd-placeholder-img card-img-top" width="100%" height="100%" src="https://image.tmdb.org/t/p/w500/{{ $film['poster_path'] }}" alt="">
                                    <div class="card-body">
                                        
                                        <h5 class="card-title">{{ array_key_exists('original_title', $film) ? $film['original_title'] : 'Unknown'; }}</h5>
                                        <p class="card-text">
                                            Synopsis : {{ $film['overview'] }}
                                        </p>
                                        
                                        {{-- <p class="card-text">
                                            Genre : {{ $ }}
                                        </p> --}}
                                        <div class="d-flex justify-content-between mb-3">
                                            <small class="text-muted">People Watching : {{ $film['popularity'] }}</small>
                                            <small class="text-muted">Score : {{ $film['vote_average'] }}</small>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                            <a href="/movies/{{ $film['id'] }}" class="btn btn-sm btn-info">Lihat</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
@endpush
