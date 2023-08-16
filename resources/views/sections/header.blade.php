<header class="mb-5">
    <nav dir="ltr" class="navbar bg-body-tertiary border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('todos.index') }}">TODO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">TODO</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body">
                    <ul dir="rtl" class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('todos.index') }}">مشاهده تسک ها</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('todos.create') }}">ایجاد تسک جدید</a>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="جستوجو در تسک ها">
                        <button class="btn btn-outline-success" type="submit">جستوجو</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</header>
