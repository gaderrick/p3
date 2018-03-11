<!doctype html>
<html>
<head>
    <title>@yield('title', 'CSCI E-15 | Project 3 - Word Scorer w/ Laravel')</title>
    <meta charset='utf-8'>
    <link href='/css/scorer.css' type='text/css' rel='stylesheet'>

    @stack('head')
</head>
<body>

<header>
    <h1>Word Scorer Logo goes here</h1>
</header>

<section>
    @yield('content')
</section>

<footer>
    &copy; {{ date('Y') }} - gaderrick.me, inc.
</footer>

@stack('body')

</body>
</html>
