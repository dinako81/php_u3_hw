<?php
use App\Services\Auth;
?>
<?php if (isset($hideNav)) return ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= URL ?>">CMS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= URL ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL ?>clients">Clients List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL ?>clients/create">Add Client</a>
                </li>
            </ul>

            <!-- <div class="contacts">
                <h4 class="contacts-title">kontaktai</h4>
                <div class="contacts-info">
                    <p class="contacts-number">
                        <i class="fa-solid fa-phone"></i>
                        +370 00 00000
                    </p>
                    <p class="contacts-location">
                        <i class="fa-solid fa-location-dot"></i>
                        Pensininkų g. 14-3, Vilnius
                    </p>
                    <p class="contacts-hours">
                        <i class="fa-solid fa-clock"></i>
                        Pr - Pn 09-18, Št - Sk 10-17
                    </p>
                </div>
            </div> -->

            <span class="navbar-text">
                <?php if (Auth::get()->isAuth()) : ?>
                <span><b><i><?= Auth::get()->getName() ?></i></b></span>
                <form class="logout" action="<?= URL ?>logout" method="post">
                    <button class="btn btn-outline-dark" type="submit">Logout</button>
                </form>
                <?php else : ?>
                <a class="nav-link" href="<?= URL ?>login">Login</a>
                <?php endif ?>
            </span>
        </div>
    </div>
</nav>