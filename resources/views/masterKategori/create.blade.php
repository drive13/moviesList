@extends('partials.footer')
@extends('partials.template')
@extends('partials.navbar')

@section('content')
<main>
  <div class="container">
    <div class="row my-4">
      <div>
        <h5>Tambah Kategori</h5>
      </div>
      <div class="col">
        <form action="/master-kategori/store" method="POST">
          @csrf
          @method('POST')
          <div class="mb-3">
            <label for="kategori" class="form-label">Kategori Movie</label>
            <input type="text" class="form-control @error('kategori') is-invalid @enderror" id="kategori" name="kategori" placeholder="Kategori movie" value="{{ old('kategori') }}">
            @error('kategori')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="param" class="form-label">Parameter API</label>
            <input type="text" class="form-control @error('param') is-invalid @enderror" id="param" name="param" placeholder="param api" value="{{ old('param') }}">
            @error('param')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
          </div>
          <div>
            <button class="btn btn-success" type="submit">Simpan</button>
          </div>
        </form>
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