@extends('admin.layouts.master')
@section('title')
    Websites
@endsection
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Websites</h1>
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
                                        <th scope="col">Controller</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($websites as $k => $web)
                                        <tr>
                                            <th scope="row">{{ $k + 1 }}</th>
                                            <th scope="col">
                                                <img src="{{ asset("uploads/websites/$web->mainImage") }}" width="100"
                                                    alt="" srcset="">
                                            </th>
                                            <td>{{ $web->name }}</td>
                                            <td>{{ $web->description }}</td>
                                            <td>
                                                <a href="{{ route('admin-websites.edit', $web->id) }}"
                                                    class="btn btn-info">Edit</a>
                                                <form action="{{ route('admin-websites.destroy', $web->id) }}"
                                                    class="d-inline" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">DELETE</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
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
