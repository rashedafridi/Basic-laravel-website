{{-- <nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class=" fs-3 " href="#">RA</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{Request::is('/') ? 'active' : ''}}"><a href="/">Home</a></li>
                <li class="{{Request::is('about') ? 'active' : ''}}"><a href="/about">About</a></li>
                <li class="{{Request::is('contact') ? 'active' : ''}}"><a href="/contact">Contact</a></li>
            </ul>
        </div>
       
    </div>
</nav> --}}

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">RA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="{{Request::is('/') ? 'active' : ''}} nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="{{Request::is('about') ? 'active' : ''}} nav-item"><a class="nav-link"href="/about">About</a></li>
                <li class="{{Request::is('contact') ? 'active' : ''}}nav-item"><a class="nav-link"href="/contact">Contact</a></li>
                <li class="{{Request::is('contact') ? 'active' : ''}}nav-item"><a class="nav-link"href="/messages">Messages</a></li>
            </ul>
        </div>
    </div>
</nav>
