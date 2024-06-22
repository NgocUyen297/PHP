<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<body>
    <h1>index function of the productController php</h1>
    @foreach ($myphone as $item)
        <h2>{{ $item }}</h2>
    @endforeach
    <a href="{{ route('products') }}">Link to Products</a>
</body>
</html>