@extends('layouts.app')

@section('content')
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
@endsection
