<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <title>{{ config('app.name') }}</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">{{ _('Quote Of the Day') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
    <div class="container">
        <div class="row align-items-center" style="margin: 10rem 0 0 0">
            <div class="col-6">
                <h4 class="display-4">
                    Quote Of the Day <br> Api Documentation
                </h4>
                <a href="/docs" type="button" class="btn btn-dark rounded-pill p-3 px-5 btn-lg mt-5"><span>Get
                        Started</span></a>
            </div>
            <div class="col-6 text-center">
                <h5>
                    <pre><code>&lt;h1&gt;Welcome to Quote of the day&lt;/h1&gt;<br>&lt;p&gt;We Get you Random quotes&lt;/p&gt;<br>&lt;span&gt;We Give you the Quote and you Receive&lt;/span&gt;
                    </code></pre>
                </h5>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 10rem;">
        <h6 class="display-6 text-center">
            Fetching Your First Quote
        </h6>
        <div class="my-5">

            <!-- Button to trigger fetching data -->
            <div class="d-flex">
                <button id="fetchButton" class="btn btn-dark me-2">Fetch New Quote</button>
                <a href="/docs" class="btn btn-light shadow-sm border-dark border-1">Check Out Documentation</a>
            </div>

            <div class="row align-items-center justify-content-between  mt-5">
                <div class="col-lg-7">
                    <div id="jsonDataCard" class="card p-3 border bg-dark text-light text-sm border-0"
                        style="height:15rem;">
                        <pre id="jsonDataContent"></pre>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <pre><code>&lt;h1&gt;What this Result of this?&lt;/h1&gt;<br>&lt;p&gt;The Following get you a random quote from the api&lt;/p&gt;
                    </code></pre>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 10rem;">
        <h6 class="display-5 text-center">
            Our Author
        </h6>
        <div class="row justify-content-center align-items-center my-5">
            <div class="col col-lg-5">
                <img src="https://avatars.githubusercontent.com/u/68753229?v=4" alt="Oluwademilade Abatan"
                    class="img-thumbnail mx-auto d-block rounded-circle" height="250" width="250">
            </div>
            <div class="col text-center">
                <h2>Oluwademilade Abatan</h2>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis neque iusto
                    distinctio inventore eveniet velit nulla et, ducimus laborum aspernatur natus voluptate dolor nobis
                    minima nisi. Tenetur voluptate similique voluptatibus.</p>
                <span>Link to <a href="https://github.com/Demilade362" class="text-decoration-none"> <i
                            class="bi bi-github"></i>
                        Github</a></span>
            </div>
        </div>
    </div>
    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class="mt-5" style="margin-top: 10rem;">

        <footer class="text-center text-lg-start">
            <div class="container d-flex justify-content-center py-5">
                <button type="button" class="btn btn-primary btn-lg btn-floating mx-2">
                    <i class="bi bi-facebook"></i>
                </button>
                <button type="button" class="btn btn-danger btn-lg btn-floating mx-2">
                    <i class="bi bi-youtube"></i>
                </button>
                <button type="button" class="btn bg-danger-subtle btn-lg btn-floating mx-2">
                    <i class="bi bi-instagram"></i>
                </button>
                <button type="button" class="btn btn-dark btn-lg btn-floating mx-2">
                    <i class="bi bi-twitter-x"></i>
                </button>
            </div>

            <!-- Copyright -->
            <div class="text-center text-light bg-dark p-3">
                © 2023 Copyright: Quote of the Day Api
            </div>
            <!-- Copyright -->
        </footer>

    </div>
    <!-- End of .container -->

    <script>
        fetch('http://127.0.0.1:8000/api/quote')
            .then(response => response.json())
            .then(data => {
                const jsonDataCard = document.getElementById('jsonDataCard');
                const jsonDataContent = document.getElementById('jsonDataContent');
                jsonDataContent.textContent = JSON.stringify(data, null, 2);
            })
            .catch(error => console.error('Error fetching data:', error));
        document.getElementById('fetchButton').addEventListener('click', function() {
            fetch('http://127.0.0.1:8000/api/quote')
                .then(response => response.json())
                .then(data => {
                    const jsonDataCard = document.getElementById('jsonDataCard');
                    const jsonDataContent = document.getElementById('jsonDataContent');
                    jsonDataContent.textContent = JSON.stringify(data, null, 2);
                })
                .catch(error => console.error('Error fetching data:', error));
        });
    </script>
</body>

</html>
