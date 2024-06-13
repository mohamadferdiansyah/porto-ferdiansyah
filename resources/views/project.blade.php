@extends('master')

@section('konten')

<div class="container py-2 px-4 h-100 rounded boxShadow contentContainer">
    <h1 class="display-6">My Projects</h1>
    <hr class="border border-2 opacity-50 rounded w-75">
    <div class="row">
        <div class="col-3">
            <div id="list-example" class="list-group">
                <a class="list-group-item list-group-item-action" href="#list-item-1">Program Kasir</a>
                <a class="list-group-item list-group-item-action" href="#list-item-2">Data Siswa</a>
                <a class="list-group-item list-group-item-action" href="#list-item-3">Web Villa</a>
                <a class="list-group-item list-group-item-action" href="#list-item-4">Web BPJS</a>
            </div>
        </div>
        <div class="col-8">
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                <h4 id="list-item-1">Program Kasir</h4>
                <p>
                    <div class="card">
                        <img src="../assets/img/project1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Program Kasir<a class="btn btn-outline-primary float-end" href="#" role="button">View</a>
                            </h5>
                        </div>
                    </div>
                </p>
                <h4 id="list-item-2">Data Siswa</h4>
                <p>
                <div class="card">
                        <img src="../assets/img/project2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Data Siswa<a class="btn btn-outline-primary float-end" href="#" role="button">View</a>
                            </h5>
                        </div>
                    </div>
                </p>
                <h4 id="list-item-3">Web Villa</h4>
                <p>
                <div class="card">
                        <img src="../assets/img/project3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Web Villa<a class="btn btn-outline-primary float-end" href="#" role="button">View</a>
                            </h5>
                        </div>
                    </div>
                </p>
                <h4 id="list-item-4">Web BPJS</h4>
                <p>
                <div class="card">
                        <img src="../assets/img/project4.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Web BPJS<a class="btn btn-outline-primary float-end" href="#" role="button">View</a>
                            </h5>
                        </div>
                    </div>
                </p>
            </div>
        </div>
    </div>
</div>

@endsection