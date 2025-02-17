@extends('admin.partial.app')
@section('title','Dashboard')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-title text-center" style="color: rgb(255,88,0)">Welcome Back, Admin</div>
              </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->
@endsection
