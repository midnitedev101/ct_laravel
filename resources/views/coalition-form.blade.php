<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <form action="coalition-form" method="POST">
        @csrf
        <div>
            <label>Product Name</label><input type="text" class="product_name" name="product_name">
        </div>
        <div>
            <label>Stock Quantity</label><input type="number" class="stock_quantity" name="stock_quantity">
        </div>
        <div>
            <label>Price Per Item</label><input type="number" class="price_per_item" name="price_per_item">
        </div>
        <input type="submit">
    </form>

    @if (!empty($results))
        <label>Product Name:</label>{{$results['product_name']}}<br/>
        <label>Stock Quantity:</label>{{$results['stock_quantity']}}<br/>
        <label>Price Per Item:</label>{{$results['price_per_item']}}<br/>
        <label>Total Value Number:</label>{{$results['price_per_item']}}<br/>
    @endif
    <script src="/js/app.js"></script>
</body>
</html>