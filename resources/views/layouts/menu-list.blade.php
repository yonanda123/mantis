<!-- layouts.menu-list.blade.php -->
<li class="pc-item">
    <a href="{{ route('dashboard') }}" class="pc-link">
        <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
        <span class="pc-mtext">Dashboard</span>
    </a>
</li>

<li class="pc-item pc-caption">
    <label>ERP</label>
    <i class="ti ti-package"></i>
</li>

<li class="pc-item">
    <a href="{{ route('products.index') }}" class="pc-link">
        <span class="pc-micon"><i class="ti ti-box"></i></span>
        <span class="pc-mtext">Product</span>
    </a>
</li>

<li class="pc-item">
    <a href="#" class="pc-link">
        <span class="pc-micon"><i class="ti ti-list"></i></span>
        <span class="pc-mtext">Category</span>
    </a>
</li>

<li class="pc-item">
    <a href="#" class="pc-link">
        <span class="pc-micon"><i class="ti ti-shopping-cart"></i></span>
        <span class="pc-mtext">Order</span>
    </a>
</li>
