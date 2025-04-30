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
                            Edit {{ $item->name }}
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('item.update', $item->id) }}" method="POST" class="needs-validation" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!-- Basic Information -->
                            <div class="mb-4">
                                <h5 class="mb-3">Basic Information</h5>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="itemCode" class="form-label">Item Code</label>
                                        <input type="text" value="{{ $item->code }}" name="code" class="form-control" id="itemCode" required>

                                    </div>
                                    <div class="col-md-6">
                                        <label for="itemName" class="form-label">Item Name</label>
                                        <input type="text" value="{{ $item->name }}" name="name" class="form-control" id="itemName" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="itemStock" class="form-label">Item Stock</label>
                                        <input type="number" value="{{ $item->stock }}" name="stock" class="form-control" id="itemStock" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="status" class="form-label">Status</label>
                                        <select class="form-select" name="status" id="status" required>
                                            <option value="">Choose status...</option>
                                            <option value="in" {{ $item->status == 'in' ? 'selected' : '' }}>In</option>
                                            <option value="out" {{ $item->status == 'out' ? 'selected' : '' }}>Out</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="grade" class="form-label">Grade</label>
                                        <select class="form-select" name="grade" id="grade" required>
                                            <option value="">Choose grade...</option>
                                            <option value="a" {{ $item->grade == 'a' ? 'selected' : '' }}>a</option>
                                            <option value="b" {{ $item->grade == 'b' ? 'selected' : '' }}>b</option>
                                            <option value="c" {{ $item->grade == 'c' ? 'selected' : '' }}>c</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="category" class="form-label">Category</label>
                                        <select class="form-select" name="type" id="category" required>
                                            <option value="">Choose category...</option>
                                            <option value="office supplies" {{ $item->type == 'office supplies' ? 'selected' : '' }}>Office Supplies</option>
                                            <option value="it-equipment" {{ $item->type == 'it-equipment' ? 'selected' : '' }}>IT Equipment</option>
                                            <option value="furniture" {{ $item->type == 'furniture' ? 'selected' : '' }}>Furniture</option>
                                            <option value="tools" {{ $item->type == 'tools' ? 'selected' : '' }}>Tools</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="location" class="form-label">Storage Location</label>
                                        <select class="form-select" id="location" name="warehouse_id" required>
                                            <option value="">Choose location...</option>
                                            @foreach ($warehouses as $warehouse)
                                                <option value="{{ $warehouse->id }}" {{ $item->warehouse_id == $warehouse->id ? 'selected' : '' }}>{{ $warehouse->name }} - {{ $warehouse->address }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="existingImage">Item Image Now</label>
                                        <img src="{{ asset("storage/item-photos/$item->photo") }}"
                                            class="card-img-top" alt="{{ $item->name }}"
                                            style="height: 200px; object-fit: cover;">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="itemImage" class="form-label">Item Image</label>
                                        <input type="file" name="photo" class="form-control" id="ItemImage" accept="image/*">
                                    </div>
                                </div>
                            </div>


                            <!-- Form Actions -->
                            <div class="d-flex gap-2 justify-content-end">
                                <a href="{{ route('dashboard') }}" class="btn btn-light">
                                    <i class="bi bi-x-circle me-1"></i> Cancel
                                </a>
                                <button type="submit" class="btn btn-primary">
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
