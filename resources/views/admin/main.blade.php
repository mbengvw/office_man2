<!doctype html>
<html @lang('en')>

<head>
    @include('admin.partials.head')
    @include('admin.partials.css')
    @include('admin.partials.script')

</head>

<body>
    @include('admin.partials.nav')

    <div>
        @yield('content')
    </div>

    @include('admin.partials.footer')

    @yield('script')
</body>

</html>
