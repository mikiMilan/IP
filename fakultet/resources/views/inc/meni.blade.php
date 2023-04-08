<!-- Navbar Start -->
<div class="container-fluid bg-light position-relative shadow">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
        <a href="/" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px;">
            <i class="flaticon-043-teddy-bear"></i>
            <span class="text-primary">DjecijiFakultet</span>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav font-weight-bold mx-auto py-0">
                <a href="/" class="nav-item nav-link">O nama</a>
                <a href="/predmeti" class="nav-item nav-link active">Predmeti</a>
                <a href="gallery.html" class="nav-item nav-link">Gallery</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="blog.html" class="dropdown-item">Blog Grid</a>
                        <a href="single.html" class="dropdown-item">Blog Detail</a>
                    </div>
                </div>
                <a href="/kontakt" class="nav-item nav-link">Kontakt</a>
            </div>
            @auth
                welcome {{auth()->user()->name}}

                <form action="/logout" method="post">
                    @csrf
                    <button>Odjava</button>
                </form>
            @else
            <a href="/register" class="btn btn-primary px-4">Registracija</a>
            <a href="/login" class="btn btn-primary px-4">Prijava</a>
            @endauth
            
        </div>
    </nav>
</div>
<!-- Navbar End -->