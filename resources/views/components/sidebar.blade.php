<div class="col-sm-2 min-vh-100" style="background-color:rgb(45, 85, 172)">
    <header class="py-2 px-3 text-center border-bottom">
        <span class="fs-4 fw-bolder text-white">Dashboard</span>
    </header>
    <div class="wrapper mt-2 d-flex flex-column justify-content-center" style="min-height: 40%">
        <ul class="nav nav-link">
            <li class="nav-item mb-2 button-menu">
                <a href="{{ route('dashboard') }}" class="{{ Route::is('dashboard') ? 'bg-success rounded' : '' }} nav-link px-3 text-white text-decoration-none"><i class="bi bi-people"></i><span> Guest List</span></a>
            </li>
            <li class="nav-item mb-2 button-menu">
                <a href="" class="nav-link px-3 text-white text-decoration-none"><i class="bi bi-person-circle"></i></i><span> Master Data</span></a>
            </li>
        </ul>
    </div>
</div>