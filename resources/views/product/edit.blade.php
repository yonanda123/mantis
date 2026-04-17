Salin

@extends('layouts.app', ['title' => 'Edit Product'])

@section('content')
    @include('layouts.breadcrumb', [
        'breadcrumb_item' => 'Product',
        'breadcrumb_item_active' => 'Edit Product',
    ])

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Edit Product: <span class="text-primary">{{ $product->name }}</span></h5>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary btn-sm">
                        <i class="ti ti-arrow-left me-1"></i> Back
                    </a>
                </div>

                <div class="card-body">
                    <form action="{{ route('products.update', $product->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row g-3">

                            {{-- Product Name --}}
                            <div class="col-md-8">
                                <label class="form-label">Product Name <span class="text-danger">*</span></label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name', $product->name) }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- SKU --}}
                            <div class="col-md-4">
                                <label class="form-label">SKU <span class="text-danger">*</span></label>
                                <input type="text" name="sku" class="form-control @error('sku') is-invalid @enderror"
                                    value="{{ old('sku', $product->sku) }}">
                                @error('sku')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Category --}}
                            <div class="col-md-6">
                                <label class="form-label">Category <span class="text-danger">*</span></label>
                                <select name="category_id" class="form-select @error('category_id') is-invalid @enderror">
                                    <option value="">-- Select Category --</option>
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->id }}"
                                            {{ old('category_id', $product->category_id) == $cat->id ? 'selected' : '' }}>
                                            {{ $cat->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Price --}}
                            <div class="col-md-3">
                                <label class="form-label">Price (Rp) <span class="text-danger">*</span></label>
                                <input type="number" name="price" min="0"
                                    class="form-control @error('price') is-invalid @enderror"
                                    value="{{ old('price', $product->price) }}">
                                @error('price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Stock --}}
                            <div class="col-md-3">
                                <label class="form-label">Stock <span class="text-danger">*</span></label>
                                <input type="number" name="stock" min="0"
                                    class="form-control @error('stock') is-invalid @enderror"
                                    value="{{ old('stock', $product->stock) }}">
                                @error('stock')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Description --}}
                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <textarea name="description" rows="4" class="form-control @error('description') is-invalid @enderror">{{ old('description', $product->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Image --}}
                            <div class="col-12">
                                <label class="form-label">Product Image</label>

                                {{-- Current Image --}}
                                @if ($product->image)
                                    <div class="mb-2">
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="Current Image"
                                            class="img-thumbnail" style="max-height:120px">
                                        <p class="text-muted small mt-1">Current image. Upload new to replace.</p>
                                    </div>
                                @endif

                                <input type="file" name="image" accept="image/*"
                                    class="form-control @error('image') is-invalid @enderror"
                                    onchange="previewImage(event)">
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <div class="mt-2">
                                    <img id="imagePreview" src="#" alt="Preview" class="img-thumbnail d-none"
                                        style="max-height:150px">
                                </div>
                            </div>

                            {{-- Status --}}
                            <div class="col-12">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="is_active" id="isActive"
                                        value="1" {{ old('is_active', $product->is_active) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="isActive">Active</label>
                                </div>
                            </div>

                            {{-- Submit --}}
                            <div class="col-12 d-flex gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="ti ti-device-floppy me-1"></i> Update Product
                                </button>
                                <a href="{{ route('products.index') }}" class="btn btn-light">Cancel</a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function previewImage(event) {
            const preview = document.getElementById('imagePreview');
            const file = event.target.files[0];
            if (file) {
                preview.src = URL.createObjectURL(file);
                preview.classList.remove('d-none');
            }
        }
    </script>
@endpush
