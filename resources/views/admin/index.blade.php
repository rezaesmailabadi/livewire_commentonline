<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>salam</h1>
    @foreach($products as $product)
    <h3>{{$product->cost}}</h3>
    <h3>{{$product->name}}</h3>
    <h3>{{$product}}</h3>
    @endforeach


    @foreach ($products->color as $colors)

    <h3>{{$colors->name}}</h3>


    @endforeach





</body>



</html>