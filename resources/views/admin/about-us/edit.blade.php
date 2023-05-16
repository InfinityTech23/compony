@extends('admin.layouts.master')
@section('title')
    About us - Edit
@endsection
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>About us - Edit</h1>
        </div><!-- End Page Title -->

        @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Custom Styled Validation</h5>
                            <!-- Custom Styled Validation -->
                            <form class="row g-3 needs-validation" action="{{ route('admin-about-us.update', $about->id) }}"
                                method="post" enctype="multipart/form-data" novalidate>
                                @csrf
                                @method('PUT')
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">name</label>
                                    <input type="text" name="name" value="{{ $about->name }}" class="form-control"
                                        id="validationCustom01" required>
                                    @error('name')
                                        <div class="invalid-feedback">Please Enter Name</div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom02" class="form-label">Description</label>
                                    <textarea type="text" name="description" class="form-control" id="validationCustom02" required>{{ $about->description }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">Please Enter description</div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom02" class="form-label">Image</label>
                                    <input type="file" name="image" class="form-control" id="validationCustom02"
                                        value="{{ $about->image }}">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </div>
                            </form><!-- End Custom Styled Validation -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
