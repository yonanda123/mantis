@extends('layouts.app', ['title' => 'Product'])

@section('content')
    @include('layouts.breadcrumb', [
        'breadcrumb_item' => 'ERP',
        'breadcrumb_item_active' => 'Product',
    ])

    <!-- [ Main Content ] -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Product List</h5>
                    <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm">
                        <i class="ti ti-plus me-1"></i> Add Product
                    </a>
                </div>

                <div class="card-body">

                    {{-- Flash Messages --}}
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    {{-- Filter & Search --}}
                    <div class="row mb-3 g-2">
                        <div class="col-sm-4">
                            <form method="GET" action="#">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control"
                                        placeholder="Search product..." value="{{ request('search') }}">
                                    <button class="btn btn-outline-secondary" type="submit">
                                        <i class="ti ti-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-3">
                            <form method="GET" action="#">
                                <select name="category_id" class="form-select" onchange="this.form.submit()">
                                    <option value="">-- All Categories --</option>
                                    {{-- @foreach ($categories as $cat)
                                        <option value="{{ $cat->id }}"
                                            {{ request('category_id') == $cat->id ? 'selected' : '' }}>
                                            {{ $cat->name }}
                                        </option>
                                    @endforeach --}}
                                </select>
                            </form>
                        </div>
                    </div>

                    {{-- Responsive Table --}}
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th style="width:50px">#</th>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>SKU</th>
                                    <th class="text-end">Price</th>
                                    <th class="text-center">Stock</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center" style="width:120px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @forelse ($products as $index => $product)
                                    <tr>
                                        <td>{{ $products->firstItem() + $index }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->category->name ?? '-' }}</td>
                                        <td><code>{{ $product->sku }}</code></td>
                                        <td class="text-end">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                                        <td class="text-center">{{ $product->stock }}</td>
                                        <td class="text-center">
                                            @if ($product->is_active)
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-secondary">Inactive</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('products.edit', $product->id) }}"
                                                class="btn btn-sm btn-outline-warning" title="Edit">
                                                <i class="ti ti-edit"></i>
                                            </a>
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                                class="d-inline" onsubmit="return confirm('Delete this product?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete">
                                                    <i class="ti ti-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center text-muted py-4">
                                            <i class="ti ti-inbox fs-3 d-block mb-1"></i>
                                            No products found.
                                        </td>
                                    </tr>
                                @endforelse --}}
                            </tbody>
                        </table>
                    </div>

                    {{-- Pagination --}}
                    {{-- @if ($products->hasPages())
                        <div class="d-flex align-items-center justify-content-between mt-3 flex-wrap gap-2">
                            <small class="text-muted">
                                Showing {{ $products->firstItem() }}–{{ $products->lastItem() }}
                                of {{ $products->total() }} results
                            </small>
                            {{ $products->withQueryString()->links('pagination::bootstrap-5') }}
                        </div>
                    @endif --}}

                </div>{{-- card-body --}}
            </div>{{-- card --}}
        </div>
    </div>
@endsection
