@extends('master')

@section('konten')

<div class="container py-2 px-4 h-100 rounded boxShadow contentContainer">
    <h1 class="display-2 fw-medium">This Is Me!</h1>
    <p>Wanna See More <a class="link-offset-2 link-underline link-underline-opacity-0" href="/about">About Me?</a></p>
    <hr class="border border-2 opacity-50 rounded w-75">
    <h1 class="display-6 fw-medium">Skills</h1>
    <div class="btn-group btn-group-lg" role="group" aria-label="Basic outlined example">
        <button type="button" class="btn btn-outline-primary p-4 px-5" data-bs-container="body" data-bs-trigger="hover focus" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="HTML"><img src="../assets/img/html.png" alt="HTML" style="width: 52px;"></button>
        <button type="button" class="btn btn-outline-primary p-4 px-5" data-bs-container="body" data-bs-trigger="hover focus" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="CSS"><img src="../assets/img/css.png" alt="CSS" style="width: 52px;"></button>
        <button type="button" class="btn btn-outline-primary p-4 px-5" data-bs-container="body" data-bs-trigger="hover focus" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="JS"><img src="../assets/img/js.png" alt="JS" style="width: 52px;"></button>
        <button type="button" class="btn btn-outline-primary p-4 px-5" data-bs-container="body" data-bs-trigger="hover focus" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="PHP"><img src="../assets/img/php.png" alt="JS" style="width: 52px;"></button>
        <a class="btn btn-primary d-flex align-items-center column-gap-1" href="/about" role="button">More<i class="bi bi-arrow-right"></i></a>
    </div>
    <hr class="border border-2 opacity-50 rounded w-75 float-end">
    <hr class="border border-2 opacity-0 rounded w-25">
    <h1 class="display-6 float-end fw-medium" style="margin: 0;">Recent Project</h1><br><br><br>
    <div class="row row-cols-sm-2">
        <div class="col">
            <div class="card boxShadowCard">
                <img src="../assets/img/project1.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Program Kasir<a class="btn btn-outline-primary float-end" href="/project#list-item-1" role="button">View</a>
                    </h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card boxShadowCard">
                <img src="../assets/img/project3.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Program BPJS<a class="btn btn-outline-primary float-end" href="/project#list-item-3" role="button">View</a></h5>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection