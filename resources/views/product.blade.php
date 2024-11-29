<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h1 class="mb-4 text-center">Product Details Form</h1>

    <div class="card shadow-sm">
        <div class="card-body">
            <form method="POST" action="{{ route('product.store') }}" class="needs-validation" novalidate>
                @csrf
                <div class="mb-3">
                    <label for="product_name" class="form-label">Product Name:</label>
                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter product name" required>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price:</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Enter product price" required>
                </div>

                <div class="mb-3">
                    <label for="qty" class="form-label">Quantity:</label>
                    <input type="number" class="form-control" id="qty" name="qty" placeholder="Enter quantity" required>
                </div>

                <div class="mb-3">
                    <label for="discount" class="form-label">Discount (%):</label>
                    <input type="number" class="form-control" id="discount" name="discount" min="0" max="100" placeholder="Enter discount percentage">
                </div>

                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>

    @if (isset($productDetails))
        <div class="mt-5">
            <h2 class="text-center">Product Details</h2>
            <ul class="list-group">
                <li class="list-group-item"><strong>Product Name:</strong> {{ $productDetails['product_name'] }}</li>
                <li class="list-group-item"><strong>Price:</strong> ${{ $productDetails['price'] }}</li>
                <li class="list-group-item"><strong>Quantity:</strong> {{ $productDetails['qty'] }}</li>
                <li class="list-group-item"><strong>Total After Discount:</strong> ${{ $productDetails['discounted_price'] }}</li>
            </ul>
        </div>
    @endif
</div>

<!-- Bootstrap JS Bundle CDN (Optional for form validation and interactivity) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
