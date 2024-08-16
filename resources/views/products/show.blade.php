<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Products - SantriKoding.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card-img-top {
            object-fit: cover;
            height: 200px; /* Adjust the height as needed */
        }
        .product-details {
            padding: 20px;
        }
        .product-description {
            white-space: pre-wrap; /* Preserve whitespace and line breaks */
        }
        .price {
            font-size: 1.5rem;
            font-weight: bold;
            color: #28a745;
        }
        .stock-info {
            font-size: 1.2rem;
            color: #6c757d;
        }
        .card-body {
            background-color: #ffffff;
        }
    </style>
</head>
<body>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded">
                    <img src="{{ asset('/storage/products/'.$product->image) }}" class="card-img-top rounded" alt="{{ $product->title }}">
                </div>
            </div>
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body product-details">
                        <h3 class="card-title">{{ $product->title }}</h3>
                        <p class="price">{{ "Rp " . number_format($product->price, 2, ',', '.') }}</p>
                        <div class="product-description">
                            {!! $product->description !!}
                        </div>
                        <hr/>
                        <p class="stock-info">Stock: {{ $product->stock }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
