<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-gradient-dark px-4 shadow">
    <a class="navbar-brand d-flex align-items-center text-light text-uppercase" href="#">
        {{-- <i class="bi bi-tree-fill me-2"></i> --}}
        <span class="fw-bold">Dashboard</span>
    </a>
    <button class="navbar-toggler border-0 text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav align-items-center">
            <li class="nav-item">
                <a class="nav-link text-light fw-semibold" href="{{ route('dashboard.index') }}"><i class="bi bi-speedometer2 me-1"></i> Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light fw-semibold" href="{{ route('worksheet.index') }}"><i class="bi bi-journal-text me-1"></i> Worksheet</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light fw-semibold" href="{{ route('about') }}"><i class="bi bi-file-earmark-person"></i> About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light fw-semibold" href="{{ route('logout') }}"><i class="bi bi-box-arrow-right me-1"></i> Logout</a>
            </li>
            {{-- <li class="nav-item">
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-light d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle me-1"></i> Profile
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end bg-light">
                        <li><a href="{{ route('logout') }}" class="dropdown-item text-dark">Logout</a></li>
                    </ul>
                </div>
            </li>
        </ul> --}}
    </div>
</nav>

<!-- Custom Styles -->
<style>
    /* Navbar gradient and style */
    .bg-gradient-dark {
        background: linear-gradient(90deg, #2c3e50, #34495e);
    }
    .navbar-brand span {
        font-size: 1.2rem;
        letter-spacing: 0.05rem;
    }
    .nav-link {
        transition: color 0.3s ease-in-out;
    }
    .nav-link:hover {
        color: #1abc9c !important;
    }
    .btn-outline-light {
        transition: background-color 0.3s, color 0.3s;
    }
    .btn-outline-light:hover {
        background-color: #1abc9c;
        color: #ffffff;
    }
</style>
