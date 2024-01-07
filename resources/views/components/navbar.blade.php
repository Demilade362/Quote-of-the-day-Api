<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">{{ _('Quote Of the Day') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto nav-underline">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/docs">Documentation</a>
                </li>
                {{-- Adding this Feature Later --}}
                {{-- <li class="nav-item">
                    <a class="nav-link" href="/add">Contribute Your Quote</a>
                </li> --}}
                <div class="nav-item">
                    <a class="nav-link" href="https://github.com/Demilade362/Quote-of-the-day-Api"><i
                            class="bi bi-stars"></i> Star on Github</a>
                </div>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Version
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/">v0.1</a></li>
                    </ul>
                </li>
                <li class="nav-item ms-3">
                    <a href="/docs" class="btn btn-dark rounded-pill px-4 py-2">Get Started</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
