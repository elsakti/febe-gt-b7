@extends('layout.main')

@section('content')
    <!-- Form Content -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-white py-3">
                        <h4 class="mb-0">
                            <i class="bi bi-box-seam me-2"></i>
                            Add New Item
                        </h4>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation">
                            <!-- Basic Information -->
                            <div class="mb-4">
                                <h5 class="mb-3">Basic Information</h5>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="itemCode" class="form-label">Item Code</label>
                                        <input type="text" class="form-control" id="itemCode" required>

                                    </div>
                                    <div class="col-md-6">
                                        <label for="itemName" class="form-label">Item Name</label>
                                        <input type="text" class="form-control" id="itemName" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="category" class="form-label">Category</label>
                                        <select class="form-select" id="category" required>
                                            <option value="">Choose category...</option>
                                            <option>Office Supplies</option>
                                            <option>IT Equipment</option>
                                            <option>Furniture</option>
                                            <option>Tools</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="location" class="form-label">Storage Location</label>
                                        <select class="form-select" id="location" required>
                                            <option value="">Choose location...</option>
                                            <option>Warehouse A</option>
                                            <option>Warehouse B</option>
                                            <option>Storage Room 1</option>
                                            <option>Storage Room 2</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="existingImage">Item Image Now</label>
                                        <img src="https://images.unsplash.com/photo-1612815154858-60aa4c59eaa6?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fHByaW50ZXJ8ZW58MHx8MHx8fDA%3D"
                                            class="card-img-top" alt="Network Cable"
                                            style="height: 200px; object-fit: cover;">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="itemImage" class="form-label">Item Image</label>
                                        <input type="file" class="form-control" id="ItemImage" accept="image/*" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Specifications -->
                            <div class="mb-4">
                                <h5 class="mb-3">Specifications</h5>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" rows="3" required></textarea>
                                    <div class="invalid-feedback">
                                        Please provide a description.
                                    </div>
                                </div>
                            </div>


                            <!-- Form Actions -->
                            <div class="d-flex gap-2 justify-content-end">
                                <a href="dashboard.html" class="btn btn-light">
                                    <i class="bi bi-x-circle me-1"></i> Cancel
                                </a>
                                <button type="submit" class t type="submit" class="btn btn-primary">
                                    <i class="bi bi-check-circle me-1"></i> Save Item
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
