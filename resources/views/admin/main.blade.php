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
    <script>
        $(document).ready(function() {
            const menuItems = document.getElementsByClassName("nav-link");
            const navItems = document.getElementsByClassName("nav-item");

            for (let i = 0; i < menuItems.length; i++) {
                if (menuItems[i].href === location.href) {
                    navItems[i].className += " active"
                }
            }
        });
    </script>
</body>

</html>
