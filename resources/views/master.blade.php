<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FerrrSite</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="container py-4 px-0 induk">
            <div class="container">
                <div class="row d-flex flex-row column-gap-4 justify-content-center">
                    <div class="col col-sm-auto p-0 text-center">
                        <nav class="nav flex-column d-flex justify-content-center row-gap-5 rounded h-100 p-2 boxShadow ">
                            <a class="btn btn-light fw-medium" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: 1rem; width: 97%; background-color: --bs-light; color:var(--bs-link-color);" aria-current="page" href="/"><i class="bi bi-house fs-4"></i><br>Home</a>
                            <a class="btn btn-light fw-medium" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: 1rem; width: 97%; background-color: --bs-light; color:var(--bs-link-color);" aria-current="page" href="/about"><i class="bi bi-person-circle fs-4"></i><br>About</a>
                            <a class="btn btn-light fw-medium" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: 1rem; width: 97%; background-color: --bs-light; color:var(--bs-link-color);"  aria-current="page" href="/project"><i class="bi bi-file-earmark-code fs-4"></i><br>Project</a>
                            <a class="btn btn-light fw-medium" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: 1rem; width: 97%; background-color: --bs-light; color:var(--bs-link-color);" aria-current="page" href="/contact"><i class="bi bi-telephone fs-4"></i><br>Contact</a>
                        </nav>
                    </div>
                    <div class="col p-0">
                        @yield('konten')
                    </div>
                    <div class="col col-md-auto p-0">
                        <div class="card boxShadow" style="width: 20rem;">
                            <img src="../assets/img/profile.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Mohamad Ferdiansyah</h5>
                                <p class="card-text">Hello, I am a PPLG student at Wikrama Vocational High School and i'm a <b>Web Developer</b> with a 1 years experience</p>
                            </div>
                            <ul class="list-group list-group-flush d-flex align-items-start justify-content-center">
                                <li class="list-group-item d-flex column-gap-3"><i class="bi bi-envelope-at"></i><a class="link-offset-2 link-underline link-underline-opacity-0" href="mailto:personalmohferdi@gmail.com">personalmohferdi@gmail.com</a></li>
                                <li class="list-group-item d-flex column-gap-3"><i class="bi bi-telephone"></i><a class="link-offset-2 link-underline link-underline-opacity-0" href="https://wa.me/6281293045709">+62-812-9304-5709</a></li>
                                <li class="list-group-item d-flex column-gap-2">
                                    <a class="btn btn-outline-primary" href="https://www.youtube.com/channel/UC9lnndn_iOqdb6B2CAvZHDw" role="button"><i class="bi bi-youtube"></i></a>
                                    <a class="btn btn-outline-primary" href="https://github.com/mohamadferdiansyah" role="button"><i class="bi bi-github"></i></a>
                                    <a class="btn btn-outline-primary" href="https://www.linkedin.com/in/mohamad-ferdiansyah-888a1a2b8/" role="button"><i class="bi bi-linkedin"></i></a>
                                </li>
                            </ul>
                            <div class="card-body d-flex align-items-end justify-content-center">
                                <a href="/contact" class="card-link"><button type="button" class="btn btn-primary fw-medium" style="--bs-btn-padding-y: .75rem; --bs-btn-padding-x: 1.5rem; --bs-btn-font-size: 1rem;">Contact Me<br><i class="bi bi-telephone-inbound"></i></button></a>
                                <a href="#" class="card-link"><button type="button" class="btn btn-outline-secondary fw-medium" style="--bs-btn-padding-y: .4rem; --bs-btn-padding-x: .75rem; --bs-btn-font-size: 1rem;">Download CV <br><i class="bi bi-download"></i></button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>