<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse navbar-static-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{ route('home') }}">Laracarte <span class="sr-only">(current)</span></a>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link " href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('about') }}">About <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Artisans <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="#">Laravel.com</a>
                    <a class="dropdown-item" href="#">Larzavel.io</a>
                    <a class="dropdown-item" href="#">Laracasts</a>
                    <a class="dropdown-item" href="#">Larajobs</a>
                    <a class="dropdown-item" href="#">Laravel News</a>
                    <a class="dropdown-item" href="#">Larachat</a>
                </div>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{ route ('contact') }}">Contact <span class="sr-only">(current)</span></a>
            </li>

        </ul>

        <ul class="nav navbar-nav navbar-right" >
            <li class="nav-item active">
                <a class="nav-link" href="#">Login <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Register <span class="sr-only">(current)</span></a>
            </li>
        </ul>

    </div>
</nav>