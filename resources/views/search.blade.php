<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ket qua</title>
</head>
<body>
@if (isset($search))
    <p>
        Ket qua: {{ $search }}
    </p>
@else
    <p>
        Khong co tu nay!
    </p>
@endif
</body>
</html>
