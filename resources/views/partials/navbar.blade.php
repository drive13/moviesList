{{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">Movei List</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                    </li>
                    @if(Request::is('master-kategori*'))
                    @else
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ Request::is('kategori*') ? 'active' : '' }} dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kategori
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach ($kategori as $kategori)
                                <li><a class="dropdown-item" href="/kategori/{{ $kategori->param }}">{{ $kategori->kategori }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    @endif
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item me-auto">
                        <a class="nav-link {{ Request::is('master-kategori*') ? 'active' : '' }}" aria-current="page" href="/master-kategori">Master Kategori</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
{{-- Navbar End --}}