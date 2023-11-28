<!-- main.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials\meta') <!-- Include the meta tags partial here -->
    <title>@yield('title')</title>
    <!-- Other meta tags, stylesheets, or scripts -->
</head>
<body>
    @include('partials\navbar') <!-- Include the navbar partial here -->

    @yield('content')

    <!-- Scripts or footer content if needed -->
</body>
</html>
