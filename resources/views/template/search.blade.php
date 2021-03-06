<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
<link rel="stylesheet" href="/css/search.css">

<form action="#">
    <nav class="navbar navbar-expand-lg ps-lg-4">
        <div class="container-fluid d">
            <div class="row align-items-center w-100">
                <div class="col-lg-3">
                    <img src="/images/navbarlogo.svg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-4 mb-3 mb-lg-0 mt-2">
                    <input type="search" class="form-control fw-bold" placeholder="Search for an item" id="search-bar">
                </div>
                <div class="col-lg-3 mb-3 mb-lg-0 mt-2">
                    <div class="input-group">
                        <input type="text" class="location-bar form-control fw-bold" placeholder="All locations">
                        <span class="input-group-text btn" id="basic-addon1">
                            <i class="bi bi-search"></i>
                        </span>
                    </div>
                </div>
                <div class="col-lg-2 d-flex align-items-center mt-2" id="cart-area">
                    <a class="text-light btn w-100 rounded-pill border-0 fs-6 fw-bold btn-background me-3" id="btn-rent" href="{{url('product')}}"> Rent a bike</a>
                    <i class="fas fa-shopping-cart icon-color fs-5 mt-lg-2 mt-1" id="cart-size"></i>
                </div>

            </div>
        </div>
    </nav>    
</form>