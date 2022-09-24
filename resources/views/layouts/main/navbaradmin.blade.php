<!-- Nav -->
<nav class="navbar navbar-expand-lg" style="background-color: #8F5BD8;">
    <div class="container">
        <a id="shoecleaning-text" class="navbar-brand" href="/HomeAdmin">SHOE CLEANING</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-end">
                <li class="nav-item pe-5">
                    <a id="nav-item" class="nav-link" href="/Product">PRODUCT</a>
                </li>
                <li class="nav-item pe-5">
                    <a id="nav-item" class="nav-link" href="/HomeAdmin">DATA
                        PESANAN</a>
                </li>
                <li class="nav-item pe-5">
                    <a id="nav-item" class="nav-link" href="/DataSelesai">DATA SELESAI</a>
                </li>
                @auth
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" id="userdropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Admin
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="userdropdown">
                            <li><a class="dropdown-item" href="/ProfileAdmin"><i
                                        class="bi bi-person pe-2"></i>Profile</a>
                            </li>
                            <li>
                                <form action="/Logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i
                                            class="bi bi-box-arrow-right pe-2"></i>Keluar</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<!-- Nav -->