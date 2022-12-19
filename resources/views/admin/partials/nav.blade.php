<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container">
        <a class="navbar-brand" href="#">E-Office MAN 2 Kuningan</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="myNavbar">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.index') }}">Home <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('buku-tamu.index') }}">Buku Tamu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kuisioner.index') }}">Data Kuisioner</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                </li>

                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tutorial
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Tutorial HTML</a>
                        <a class="dropdown-item" href="#">Tutorial CSS</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Tutorial Bootstrap</a>
                    </div>
                </li> --}}

            </ul>

        </div>
    </div>

</nav>
