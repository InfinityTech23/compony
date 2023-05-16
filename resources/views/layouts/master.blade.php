@section('logo')
    <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('assets/img/favicon.png') }}" alt="">
        <span>Tech</span>
    </a>
@endsection
@include('includes.header')
@yield('content')
@include('includes.footer')
