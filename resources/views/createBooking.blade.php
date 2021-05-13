<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>melody</title>
</head>

<body style="display: flex; align-content: center; align-items: center; height: 100vh; justify-content: center;">
    <div id="errormessage">
        @foreach ($errors->all() as $error)
            <p class="text-danger">{{ __($error) }}</p>
        @endforeach
    </div>
    
    @if (!empty($message))
        <div class="alert alert-success"> {{ $message }}</div>
    @endif
    <br>
    <a href="/">Back</a>
</body>

</html>
