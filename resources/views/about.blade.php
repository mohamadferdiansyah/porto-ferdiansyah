@extends('master')

@section('konten')

<div class="container py-2 px-4 h-100 rounded boxShadow contentContainer">
    <h1 class="display-2 fw-medium">About Me!</h1>
    <p class="fs-5">Hello, I am a PPLG student at Wikrama and i'm a <b>Web Developer</b></p>
    <hr class="border border-2 opacity-50 rounded w-75">
    <div class="container text-left">
        <div class="row">
            <div class="col-sm-3">
                <p class="fs-2 fw-semibold">1</p>
                <hr class="border border-1 opacity-50 rounded w-50 m-0">
                <p class="fs-5 fw-medium opacity-75">Year Of Experience</p>
            </div>
            <div class="col-sm-3">
                <p class="fs-2 fw-semibold">5+</p>
                <hr class="border border-1 opacity-50 rounded w-50 m-0">
                <a class="link-offset-2 link-underline link-underline-opacity-0 fs-5 fw-medium opacity-75" href="/project">Project <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="col-sm-3">
                <p class="fs-2 fw-semibold">2</p>
                <hr class="border border-1 opacity-50 rounded w-50 m-0">
                <a type="button" class="link-offset-2 link-underline link-underline-opacity-0 fs-5 fw-medium opacity-75" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Certificates <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Certificates</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card mb-3">
                        <img src="../assets/img/certi1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Belajar Dasar Pemrograman Web - Dicoding</h5>
                            <p class="card-text"><small class="text-body-secondary">2 November 2024 - 2 November 2026</small></p>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <img src="../assets/img/certi2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Belajar Membuat Front-End Web untuk Pemula</h5>
                            <p class="card-text"><small class="text-body-secondary">25 Desember 2024 - 25 Desember 2026</small></p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <hr class="border border-2 opacity-50 rounded w-100">
    <h1 class="display-6 py-1 fw-medium">Skills</h1>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button fs-5 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Program Language
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="btn-group btn-group-lg d-flex" role="group" aria-label="Basic outlined example">
                        <button type="button" class="btn btn-outline-primary p-4 px-5" data-bs-container="body" data-bs-trigger="hover focus" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="HTML - Beginner"><img src="../assets/img/html.png" alt="HTML" style="width: 52px;"></button>
                        <button type="button" class="btn btn-outline-primary p-4 px-5" data-bs-container="body" data-bs-trigger="hover focus" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="CSS - Beginner"><img src="../assets/img/css.png" alt="CSS" style="width: 52px;"></button>
                        <button type="button" class="btn btn-outline-primary p-4 px-5" data-bs-container="body" data-bs-trigger="hover focus" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="JS - Beginner"><img src="../assets/img/js.png" alt="JS" style="width: 52px;"></button>
                        <button type="button" class="btn btn-outline-primary p-4 px-5" data-bs-container="body" data-bs-trigger="hover focus" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="PHP - Beginner"><img src="../assets/img/php.png" alt="JS" style="width: 52px;"></button>
                        <button type="button" class="btn btn-outline-primary p-4 px-5" data-bs-container="body" data-bs-trigger="hover focus" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="MYSQL - Beginner"><img src="../assets/img/mysql.png" alt="JS" style="width: 52px;"></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed fs-5 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Frameworks
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="btn-group btn-group-lg d-flex" role="group" aria-label="Basic outlined example">
                        <button type="button" class="btn btn-outline-primary p-4 px-5" data-bs-container="body" data-bs-trigger="hover focus" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Bootstrap - Beginner"><img src="../assets/img/bootstrap.png" alt="HTML" style="width: 52px;"></button>
                        <button type="button" class="btn btn-outline-primary p-4 px-5" data-bs-container="body" data-bs-trigger="hover focus" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Laravel - Beginner"><img src="../assets/img/laravel.png" alt="CSS" style="width: 52px;"></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed fs-5 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Tools
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="btn-group btn-group-lg d-flex" role="group" aria-label="Basic outlined example">
                        <button type="button" class="btn btn-outline-primary p-4 px-5" data-bs-container="body" data-bs-trigger="hover focus" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Visual Studio Code"><img src="../assets/img/vs.png" alt="HTML" style="width: 52px;"></button>
                        <button type="button" class="btn btn-outline-primary p-4 px-5" data-bs-container="body" data-bs-trigger="hover focus" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="laragon"><img src="../assets/img/laragon.png" alt="CSS" style="width: 52px;"></button>
                        <button type="button" class="btn btn-outline-primary p-4 px-5" data-bs-container="body" data-bs-trigger="hover focus" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Git Hub"><img src="../assets/img/github.png" alt="CSS" style="width: 52px;"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection