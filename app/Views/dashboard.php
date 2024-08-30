<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
    <div class="container">
        <h1 class="mt-4">Dashboard</h1>
        
        <div class="row">
            <!-- Product Card -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card text-center">
                    <div class="card-header bg-primary text-white">
                        Products
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Total Products</h5>
                        <p class="card-text"><?= $totalProducts ?? 0 ?></p>
                        <a href="/product" class="btn btn-primary">View Products</a>
                    </div>
                    <div class="card-footer text-muted">
                    </div>
                </div>
            </div>
            
            <!-- Order Card -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card text-center">
                    <div class="card-header bg-success text-white">
                        Orders
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Total Orders</h5>
                        <p class="card-text"><?= $totalOrders ?? 0 ?></p>
                        <a href="/order" class="btn btn-success">View Orders</a>
                    </div>
                    <div class="card-footer text-muted">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>
