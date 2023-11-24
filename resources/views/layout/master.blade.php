<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
@stack('meta')

    <!-- title -->
    <title>@yield('title', "Master Layout")</title>
@stack('head')
</head>
<body class="@yield('body-class')">
@yield('body')
@stack('body-scripts')
</body>
</html>
