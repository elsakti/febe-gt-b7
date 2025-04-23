@extends('layout.main')

@section('content')
    <!-- Hero Section -->
    <div class="bg-primary text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-3">Inventory Management Made Simple</h1>
                    <p class="lead mb-4">Track, manage, and optimize your inventory with our powerful management system.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="dashboard.html" class="btn btn-light btn-lg">
                            <i class="bi bi-graph-up me-2"></i>View Analytics
                        </a>
                        <a href="form.html" class="btn btn-outline-light btn-lg">
                            <i class="bi bi-plus-circle me-2"></i>Add New Item
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d"
                        class="img-fluid rounded-3 shadow" alt="Warehouse">
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Stats -->
    <div class="container my-5">
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="display-5 text-primary mb-3">
                            <i class="bi bi-box-seam"></i>
                        </div>
                        <h5 class="card-title">Total Items</h5>
                        <p class="display-6 fw-bold mb-0">1,234</p>
                        <small class="text-muted">Across all categories</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="display-5 text-danger mb-3">
                            <i class="bi bi-exclamation-triangle"></i>
                        </div>
                        <h5 class="card-title">Low Stock</h5>
                        <p class="display-6 fw-bold mb-0">28</p>
                        <small class="text-muted">Items need restock</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="display-5 text-success mb-3">
                            <i class="bi bi-check-circle"></i>
                        </div>
                        <h5 class="card-title">In Stock</h5>
                        <p class="display-6 fw-bold mb-0">1,156</p>
                        <small class="text-muted">Available items</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="display-5 text-warning mb-3">
                            <i class="bi bi-clock-history"></i>
                        </div>
                        <h5 class="card-title">Pending</h5>
                        <p class="display-6 fw-bold mb-0">50</p>
                        <small class="text-muted">Orders to process</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Current Inventory -->
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="mb-0">Current Inventory</h3>
            <a href="dashboard.html" class="btn btn-primary">
                <i class="bi bi-arrow-right me-1"></i> View All
            </a>
        </div>
        <div class="row g-4">
            <!-- Item Card 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1541558869434-2840d308329a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fG9mZmljZSUyMGNoYWlyfGVufDB8fDB8fHww"
                        class="card-img-top" alt="Office Chair" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge bg-secondary">ITM001</span>
                        </div>
                        <h5 class="card-title">Office Chair</h5>
                        <p class="card-text text-muted">Ergonomic office chair with adjustable height and lumbar
                            support.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <small class="text-muted d-block">Location</small>
                                <span>Warehouse A</span>
                            </div>
                            <div class="text-end">
                                <small class="text-muted d-block">Quantity</small>
                                <span class="fw-bold">50</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item Card 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1612815154858-60aa4c59eaa6?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fHByaW50ZXJ8ZW58MHx8MHx8fDA%3D"
                        class="card-img-top" alt="Printer Paper" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge bg-secondary">ITM002</span>
                        </div>
                        <h5 class="card-title">Printer Paper</h5>
                        <p class="card-text text-muted">A4 size, 80gsm premium quality printer paper for office use.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <small class="text-muted d-block">Location</small>
                                <span>Warehouse B</span>
                            </div>
                            <div class="text-end">
                                <small class="text-muted d-block">Quantity</small>
                                <span class="fw-bold">5</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item Card 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="https://plus.unsplash.com/premium_photo-1675024368160-5bacaa752300?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8bmV0d29yayUyMGNhYmxlfGVufDB8fDB8fHww"
                        class="card-img-top" alt="Network Cable" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge bg-secondary">ITM003</span>
                        </div>
                        <h5 class="card-title">Network Cable</h5>
                        <p class="card-text text-muted">Cat6 ethernet cable for high-speed network connectivity.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <small class="text-muted d-block">Location</small>
                                <span>Warehouse A</span>
                            </div>
                            <div class="text-end">
                                <small class="text-muted d-block">Quantity</small>
                                <span class="fw-bold">0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Features Section -->
    <div class="bg-light py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Key Features</h2>
                <p class="lead text-muted">Everything you need to manage your inventory efficiently</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="display-5 text-primary mb-3">
                                <i class="bi bi-graph-up"></i>
                            </div>
                            <h4>Real-time Tracking</h4>
                            <p class="text-muted">Monitor stock levels, movements, and transactions in real-time.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="display-5 text-primary mb-3">
                                <i class="bi bi-bell"></i>
                            </div>
                            <h4>Low Stock Alerts</h4>
                            <p class="text-muted">Get notified when items reach their reorder point.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="display-5 text-primary mb-3">
                                <i class="bi bi-file-earmark-text"></i>
                            </div>
                            <h4>Reports & Analytics</h4>
                            <p class="text-muted">Generate detailed reports for better decision making.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="container my-5">
        <h3 class="mb-4">Recent Activity</h3>
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <div class="list-group list-group-flush">
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <i class="bi bi-arrow-down-circle text-success me-2"></i>
                            <span>New stock received - Office Supplies</span>
                        </div>
                        <small class="text-muted">2 minutes ago</small>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <i class="bi bi-arrow-up-circle text-danger me-2"></i>
                            <span>Stock dispatched - Electronics</span>
                        </div>
                        <small class="text-muted">1 hour ago</small>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <i class="bi bi-exclamation-circle text-warning me-2"></i>
                            <span>Low stock alert - Printer Paper</span>
                        </div>
                        <small class="text-muted">3 hours ago</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
