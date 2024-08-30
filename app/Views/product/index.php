<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
    <div class="container">
        <h1 class="mt-4">Products</h1>
         <br>
        <a href="/product/create" class="btn btn-primary mb-3" >Add New Product</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Profile</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= $product['id'] ?></td>
                        <td>
                            <img src="<?= "uploads/".$product['image']; ?>" height="50px" width="50px" alt="No img">
                        </td>
                        <td><?= $product['name'] ?></td>
                        <td><?= $product['description'] ?></td>
                        <td><?= $product['price'] ?></td>
                        <td><?= $product['stock'] ?></td>
                        <td>
                            <a href="" class="btn btn-success btn-sm">Edit</a>
                            <a href="javascript:void(0);" class="btn btn-danger btn-sm" onclick="deleteProduct(<?= $product['id'] ?>)">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <script>
            function deleteProduct(productId) {
            if (confirm('Are you sure you want to delete this product?')) {
                $.ajax({
                    type: "DELETE",
                    url: '/delete-product/' + productId,
                    data: {
                        _token: '{{ csrf_token() }}',
                    },
                    success: function(data) {
                        if (data.redirect_url) {
                            window.location.href = data.redirect_url;
                        } else {
                            // Handle other logic based on the server response if needed
                            console.log('product deleted successfully.');
                        }
                    },
                    error: function(error) {
                        console.error('Error:', error);
                    }
                });
            }
        }
        </script>
    </div>
<?= $this->endSection() ?>
