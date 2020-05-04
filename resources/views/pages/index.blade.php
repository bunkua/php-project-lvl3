<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style>html, body {height: 100%}</style>
    <title>Document</title>
</head>
<body>
<div class="container h-100 d-flex justify-content-center">
    <div class="row">
        <div class="my-auto text-center">
            <h1 class="display-4 mb-4">Page Analyzer</h1>
            <div>
                {{ Form::open(['class' => 'form-inline', 'route' => 'domains.store']) }}
                <div class="form-group">
                    {{ Form::input('text', 'domain', '', ['class' => 'form-control', 'style' => 'width: 300px', 'placeholder' => 'https://domain.com', 'required']) }}
                    {{ Form::submit('Analyze', ['class' => 'btn btn-primary ml-1']) }}
                </div>
                {{ Form::close() }}
                @if ($errors->any())
                    <div class="alert alert-danger my-1">
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                @endif
            </div>
            <p class="my-2"><a href="{{ route('domains.index') }}">analyzed domains</a></p>
        </div>
    </div>
</div>
</body>
</html>
