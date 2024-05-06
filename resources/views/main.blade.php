<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    @include('partials._head')
</head>

<body>
    <section class="banner-area" id="home">
        <!-- Start Header Area -->
        <header class="default-header">
            @include('partials._nav')
        </header>
        <!-- End Header Area -->
    </section>

    @yield('content')
    
    @include('partials._script')

</body>

</html>
