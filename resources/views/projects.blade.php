@extends('layouts.main')

@section('container')
    <!-- Projects Section-->

    <section class="py-5">
        <div class="container px-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
            </div>

            <div class="row gx-5 justify-content-center ">
                @foreach ($project as $project)
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Project Card 1-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5 py-5 px-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="pe-5">
                                        <h2 class="fw-bolder"> <a href="/projects/{{ $project["slug"] }}">{{ $project['title'] }}</a></h2>
                                        <p>{{ $project['deskripsi'] }}</p>
                                    </div>
                                    <img class="img-fluid" src="https://dummyimage.com/300x400/343a40/6c757d"
                                        alt="..." />
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Call to action section-->
    <section class="py-5 bg-gradient-primary-to-secondary text-white">
        <div class="container px-5 my-5">
            <div class="text-center">
                <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
                <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="contact.html">Contact me</a>
            </div>
        </div>
    </section>
@endsection