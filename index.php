<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интернет-магазин</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://shop-one.esa/"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <h1 class="site-name text-center">Интернет-магазин электроники <br>и бытовой техники</h1>
    <?php // require('dbConnect.php'); 
    ?>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="/img/logo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Наименование товара</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                    <a class="btn btn-primary" href="" role="button">В корзину</a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="/img/logo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Наименование товара</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                    <a class="btn btn-primary" href="" role="button">В корзину</a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="/img/logo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Наименование товара</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                    <a class="btn btn-primary" href="" role="button">В корзину</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="/img/logo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Наименование товара</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                    <a class="btn btn-primary" href="" role="button">В корзину</a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="/img/logo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Наименование товара</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                    <a class="btn btn-primary" href="" role="button">В корзину</a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="/img/logo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Наименование товара</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                    <a class="btn btn-primary" href="" role="button">В корзину</a>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <h1>Здесь у нас подвал</h1>
    </footer>
    
    <p class="text-center">Здесь копирайт</p>

    <script src="/js/bootstrap.min.js"></script>
</body>

</html>