@extends('admin.layouts.master')
@section('title')
    Contact us
@endsection
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Contact us</h1>
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
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Message</th>
                                        <th scope="col">Date Added</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contact as $k => $value)
                                        <tr>
                                            <th scope="row">{{ $k + 1 }}</th>
                                            <td>{{ $value->name }}</td>
                                            <td>{{ $value->email }}</td>
                                            <td>{{ $value->subject }}</td>
                                            <td>{{ $value->message }}</td>
                                            <td>{{ $value->date_added }}</td>
                                            <td>
                                                <form action="{{ route('admin-contact-us.destroy', $value->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger">Delete</button>
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
