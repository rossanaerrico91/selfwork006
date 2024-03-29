<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('welcome') }}"> {{ config('app.name', 'Laravel') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('welcome') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('chisono') }}">Chi Sono</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('servizi.index') }}">Servizi Offerti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contatti.index') }}">Contattami</a>
                </li>
            </ul>
            
        </div>
    </div>
</nav>
