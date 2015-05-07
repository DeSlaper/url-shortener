<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>URL Shortner</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/assets/css/style.css"/>
</head>
<body>

<div class="container">
    @if(Session::has('flash_message'))
        <div class="alert alert-info alert-dismissable">
            <button class="close" type="button" data-dismiss="alert">&times;</button>
            {{ Session::get('flash_message') }}
        </div>
    @endif

    @yield('content')
</div>
<footer class="footer">
    <div class="container">
      <p class="text-muted">The administrator of this tool holds no responsibility for the content of any linked website(s), files(s) nor any other linked content.</p>
    </div>
</footer>

<script src="//code.jquery.com/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
