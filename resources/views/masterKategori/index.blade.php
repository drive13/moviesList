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
    {{-- Navbar --}}
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
          <div class="container">
              <a class="navbar-brand" href="/">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="/">Home</a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
    {{-- Navbar End --}}
    <main>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                  <div class="col">
                      <h1>Daftar Kategori</h1>
                      <a href="/master-kategori/create" class="btn btn-sm btn-success mb-2">Tambah Kategori</a>
                        {{-- Pesan --}}
                        @if ($errors->any())
                              <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                  <h4>Error!!</h4>
                                  <ul>
                                      @foreach ($errors->all() as $error)
                                          <li>{{ $error }}</li>
                                      @endforeach
                                  </ul>
                                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                  </button>
                              </div>
                          @endif
                          @if ($message = Session::get('success'))
                              <div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <strong>{!! $message !!}</strong>
                                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                  </button>
                              </div>
                          @endif
                          {{-- Pesan End --}}
                    </div>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Kategori</th>
                          <th scope="col">Parameter API</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $index => $kategori)
                          <tr>
                            <th scope="row">{{ $index+1 }}</th>
                            <td>{{ $kategori->kategori }}</td>
                            <td>{{ $kategori->param }}</td>
                            <td>
                              <a href="/master-kategori/{{ $kategori->id }}/edit" class="btn btn-sm btn-info">Edit</a>
                              <a href="/master-kategori/{{ $kategori->id }}/destroy" class="btn btn-danger btn-info">Hapus</a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <footer class="text-muted py-2">
      <div class="container">
          <p class="float-end mb-1">
              <a href="#">Back to top</a>
          </p>
          <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
          <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>.</p>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>