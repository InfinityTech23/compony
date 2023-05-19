@extends('admin.layouts.master')
@section('title')
    Websites - Create
@endsection
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Website - Create</h1>
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
                            <form class="row g-3 needs-validation" action="{{ route('admin-websites.store') }}"
                                method="post" enctype="multipart/form-data" novalidate>
                                @csrf
                                <div class="col-md-6">
                                    <label for="validationCustom01" class="form-label">name</label>
                                    <input type="text" name="name" value="" class="form-control"
                                        id="validationCustom01" value="{{ old('name') }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">Please Enter Name</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom02" class="form-label">Description</label>
                                    <textarea type="text" name="description" class="form-control" id="validationCustom02" required>{{ old('name') }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">Please Enter description</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom02" class="form-label">Price</label>
                                    <input type="text" name="price" required class="form-control"
                                        value="{{ old('price') }}" id="validationCustom02">
                                    @error('price')
                                        <div class="invalid-feedback">Please Enter Price</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom02" class="form-label">Server</label>
                                    <input type="text" name="server" required class="form-control"
                                        value="{{ old('server') }}" id="validationCustom02">
                                    @error('server')
                                        <div class="invalid-feedback">Please Enter Server</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom02" class="form-label">Main Image</label>
                                    <input type="file" name="mainImage" required class="form-control"
                                        value="{{ old('mainImage') }}" id="validationCustom02">
                                    @error('mainImage')
                                        <div class="invalid-feedback">Please Enter Main Image</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom02" class="form-label">Images</label>
                                    <input type="file" multiple="multiple" name="images[]" required class="form-control"
                                        value="{{ old('images[]') }}" id="validationCustom02">
                                    @error('images')
                                        <div class="invalid-feedback">Please Enter Images</div>
                                    @enderror
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
