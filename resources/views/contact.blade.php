@extends('master')

@section('konten')

<div class="container py-2 px-4 h-100 rounded boxShadow contentContainer">
    <h1 class="display-3 fw-medium">Contact Me!</h1>
    <hr class="border border-2 opacity-50 rounded w-75">
    <p class="fs-3">Let's Work Together!</p>
    <form action="">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@gmail.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Subject</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Subject">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
        </div>
        <input class="btn btn-primary btn-lg px-5 py-3" type="submit" value="Send">
    </form>
</div>

@endsection