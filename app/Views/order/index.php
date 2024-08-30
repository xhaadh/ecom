<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
    <div class="container">
        <h1 class="mt-4">Orders</h1>
        <a href="/order/create" class="btn btn-primary mb-3">Add New Order</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product ID</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order): ?>
                    <tr>
                        <td><?= $order['id'] ?></td>
                        <td><?= $order['product_id'] ?></td>
                        <td><?= $order['quantity'] ?></td>
                        <td><?= $order['total_price'] ?></td>
                        <td><?= $order['status'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?= $this->endSection() ?>
