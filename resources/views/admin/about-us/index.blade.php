@extends('admin.layouts.master')
@section('title')
    About us
@endsection
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>About us</h1>
        </div><!-- End Page Title -->

        @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="row">image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Updated At</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <th scope="col">
                                            <img src="{{ asset("uploads/$about->image") }}" width="100" alt=""
                                                srcset="">
                                        </th>
                                        <td>{{ $about->name }}</td>
                                        <td>{{ $about->description }}</td>
                                        <td>{{ $about->updated_at }}</td>
                                        <td>
                                            <a href="{{ route('admin-about-us.edit', $about->id) }}"
                                                class="btn btn-info">Edit</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
