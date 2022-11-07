@extends('partials.footer')
@extends('partials.template')
@extends('partials.navbar')

@section('content')
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
@endsection