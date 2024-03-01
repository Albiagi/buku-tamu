<div class="col-sm-2 min-vh-100" style="background-color:rgb(45, 85, 172)">
    <header class="py-2 px-3 text-center border-bottom">
        <span class="fs-4 fw-bolder text-white">Dashboard</span>
    </header>
    <div class="wrapper mt-2 d-flex flex-column justify-content-center" style="min-height: 40%">
        <div class="mb-2 button-menu">
            <a href="" class="px-3 text-white text-decoration-none"><i class="bi bi-people"></i><span> Guest List</span></a>
        </div>
        <div class="mb-2 button-menu">
            <a href="" class="px-3 text-white text-decoration-none"><i class="bi bi-person-circle"></i></i><span> Master Data</span></a>
        </div>
    </div>
    <div class="d-flex align-items-end" style="min-height: 50%">
        <div class="button-menu">
            <a href="{{ url('logout') }}" class="px-3 text-white text-decoration-none"><i class="bi bi-box-arrow-left"></i></i><span> Log Out</span></a>
        </div>
    </div>
</div>