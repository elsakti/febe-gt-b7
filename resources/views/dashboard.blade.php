@extends('layout.main')

@section('content')
    <!-- Dashboard Content -->
    <div class="container my-5">
        <!-- Stats Cards -->
        <div class="row g-4 mb-5">
            <div class="col-md-3">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="card-title mb-1">Total Items</h6>
                                <h2 class="mb-0">1,234</h2>
                            </div>
                            <i class="bi bi-box-seam fs-1"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="card-title mb-1">Value</h6>
                                <h2 class="mb-0">$45,350</h2>
                            </div>
                            <i class="bi bi-currency-dollar fs-1"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-warning text-dark">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="card-title mb-1">Low Stock</h6>
                                <h2 class="mb-0">28</h2>
                            </div>
                            <i class="bi bi-exclamation-triangle fs-1"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-info text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="card-title mb-1">Categories</h6>
                                <h2 class="mb-0">8</h2>
                            </div>
                            <i class="bi bi-grid fs-1"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Inventory Table -->
        <div class="card shadow-sm">
            <div class="card-header bg-white py-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Inventory List</h5>
                    <div class="d-flex gap-2">
                        <a href="form.html" class="btn btn-primary">
                            <i class="bi bi-plus-circle me-1"></i> Add Item
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Item Code</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Location</th>
                                <th>Last Updated</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><span class="badge bg-secondary">ITM001</span></td>
                                <td>Office Chair</td>
                                <td>Furniture</td>
                                <td>Warehouse A</td>
                                <td>2024-01-15</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="form.html" class="btn btn-sm btn-outline-primary">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <button class="btn btn-sm btn-outline-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><span class="badge bg-secondary">ITM002</span></td>
                                <td>Printer Paper</td>
                                <td>Office Supplies</td>
                                <td>Warehouse B</td>
                                <td>2024-01-14</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="form.html" class="btn btn-sm btn-outline-primary">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <button class="btn btn-sm btn-outline-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><span class="badge bg-secondary">ITM003</span></td>
                                <td>Network Cable</td>
                                <td>IT Equipment</td>
                                <td>Warehouse A</td>
                                <td>2024-01-13</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="form.html" class="btn btn-sm btn-outline-primary">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <button class="btn btn-sm btn-outline-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
