<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        @yield('title')
    </title>
    @include('layouts.partials.head')
</head>

<body>
    <div class="page-wrapper">
        <header id="nav" class="header header-1 black-header mobile-no-transparent">

            @include('layouts.partials.header')

        </header>

        @yield('content')

        <footer class="site-footer">

            {{-- @include('layouts.partials.footer') --}}

        </footer>
    </div>

    @include('layouts.partials.footerScripts')

</body>

</html>