@extends('partials.footer')
@extends('partials.template')
@extends('partials.navbar')

@section('content')
    <main>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="5" height="100%" src="https://image.tmdb.org/t/p/w500/{{ $data['poster_path'] }}" alt="">
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
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
@endpush
    