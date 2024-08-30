<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
    <div class="container">
        <h1 class="mt-4">Add Order</h1>
        <form action="/order/store" method="post">
            <div class="mb-3">
                <label for="product_id" class="form-label">Product ID</label>
                <input type="number" class="form-control" id="product_id" name="product_id" required>
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" required>
            </div>
            <div class="mb-3">
                <label for="total_price" class="form-label">Total Price</label>
                <input type="number" class="form-control" id="total_price" name="total_price" step="0.01" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status" required>
                    <option value="pending">Pending</option>
                    <option value="completed">Completed</option>
                    <option value="cancelled">Cancelled</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
<?= $this->endSection() ?>
