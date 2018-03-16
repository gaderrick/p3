<!doctype html>
<html>
<head>
    <title>@yield('title', 'CSCI E-15 | Project 3 - Word Scorer w/ Laravel')</title>
    <meta charset='utf-8'>
    <link href='/css/wordscore.css' type='text/css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'
          crossorigin='anonymous'>

    @stack('head')
</head>

<body>
<div class='container-fluid'>
    <div class='row' style='padding-bottom: 5px'>
        <div class='col-sm-12'>
            <img class='img-responsive title' src='/images/scrabble_score.png' alt='Scrabble Score Logo' id='logo'>
        </div>
    </div>

    <section>
        @yield('content')
    </section>

    <footer>
        &copy; {{ date('Y') }} - gaderrick.me, inc.
    </footer>

    @stack('body')

</div>

</body>
</html>
