
    <nav class="navbar navbar-expand-sm navbar-light bg-secondary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Restaurant Gallery</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/list">Dashboard</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#at-Add" href="#">Add</a>
                    </li>
                    @if(Session::get('user'))
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="">Welcome {{Session::get('user')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="/">Logout</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
   