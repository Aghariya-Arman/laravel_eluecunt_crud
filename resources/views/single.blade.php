<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>single data</title>
</head>

<body>
    <table>
        <tr>
            <h1>{{ $details->name }}</h1>
            <h1>{{ $details->email }}</h1>
            <h1>{{ $details->city }}</h1>
            <h1>{{ $details->age }}</h1>
        </tr>
    </table>
    <a href="{{ route('user.index') }}" class="btn btn-primary">Back</a>
</body>

</html>
