<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials.header')
</head>
<body>

    @include('layouts.partials.top-navbar')

    <div class="layout-container">
        @include('layouts.partials.sidebar')

        <main class="main-content">
            @yield('content')
        </main>
    </div>

    @include('layouts.partials.footer')

</body>
</html>
