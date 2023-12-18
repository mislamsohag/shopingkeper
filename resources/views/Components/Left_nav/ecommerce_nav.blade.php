
<li class="nav-item">
    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button"
      aria-expanded="false" aria-controls="sidebarApps">
      <i data-feather="grid" class="icon-dual"></i>
      <span data-key="t-apps">Ecommerce</span>
    </a>
    <div class="collapse menu-dropdown" id="sidebarApps">
      <ul class="nav nav-sm flex-column">
        <li class="nav-item">
          <a href="{{route('products')}}" class="nav-link" data-key="t-products">
            Products
          </a>
        </li>
        <!-- Add Product -->
        <li class="nav-item">
          <a href="{{route('add-product')}}" class="nav-link" data-key="t-create-product">
            Add Product
          </a>
        </li>
        <!-- Order Product -->
        <li class="nav-item">
          <a href="{{route('orders')}}" class="nav-link" data-key="t-orders">
            Orders
          </a>
        </li>
        <!-- Order-details -->
        <li class="nav-item">
          <a href="{{route('order-details')}}" class="nav-link" data-key="t-order-details">
            Order Details
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('customers')}}" class="nav-link" data-key="t-customers">
            Customers
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('shopping-cart')}}" class="nav-link" data-key="t-shopping-cart">
            Shopping Cart
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('checkout')}}" class="nav-link" data-key="t-checkout">
            Checkout
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('sellers')}}" class="nav-link" data-key="t-sellers">
            Sellers
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('seller-details')}}" class="nav-link" data-key="t-sellers-details">
            Seller Details
          </a>
        </li>
      </ul>
    </div>
  </li>
  <!-- App Menu end -->