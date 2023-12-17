@extends('Layouts.app')

@section('content')
        
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Add Product</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active">Add Product</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                @if(session('sucess'))
                <div class="alert alert-success alert-dismissible fade show" role="alert"></div>
                <i class="mdi mdi-check-all me-2"></i>
                {{session('sucess')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                @endif

                <form method="POST" action="{{route('product-store')}}" enctype="multipart/form-data" id="createproduct-form" class="needs-validation" novalidate>
                    @csrf
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">

                                    <!-- titele -->
                                    <div class="mb-3">
                                        <label class="form-label" for="product-title-input">Product Title</label>
                                        <input name="title" type="text" class="form-control" id="product-title-input" value="" placeholder="Enter product title" required>
                                        @error('title')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <!-- description -->
                                    <div>
                                        <label>Product Description</label>
                                        <div id="ckeditor-classic">
                                            <textarea name="short_des" cols="50" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- image -->
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Product Image</h5>
                                </div>
                                <div class="card-body">
                                    <div class="form-control">
                                        <input name="image" type="file" multiple="multiple">
                                        @error('image')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            

                            <div class="card">
                                <div class="card-header">
                                    <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#addproduct-general-info" role="tab">
                                                General Info
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="addproduct-general-info" role="tabpanel">
                                            <div class="row">

                                                <!-- categories Name -->
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="manufacturer-name-input">Category</label>
                                                        
                                                        <input name="category" type="text" class="form-control" id="manufacturer-name-input" placeholder="Enter category">
                                                        @error('category')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <!-- brand Name -->
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="manufacturer-brand-input">Brand Name</label>
                                                        
                                                        <input name="brand" type="text" class="form-control" id="manufacturer-brand-input" placeholder="Enter brand name">
                                                        @error('brand')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <!-- Stocks -->
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="manufacturer-brand-input">Product Stock</label>
                                                        
                                                        <input name="stock" type="text" class="form-control" id="manufacturer-brand-input" placeholder="Product Stock">
                                                        @error('stock')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end row -->

                                            <div class="row">
                                                <div class="col-lg-3 col-sm-6">

                                                    <!-- Stocks -->
                                                    <div class="mb-3">
                                                        <label class="form-label" for="stocks-input">Star</label>
                                                        <input name="star" type="text" class="form-control" id="product-price-input" placeholder="Star Mark" aria-label="Star" aria-describedby="product-price-addon" required>
                                                        @error('star')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">

                                                    <!-- Price -->
                                                    <div class="mb-3">
                                                        <label class="form-label" for="product-price-input">Price</label>
                                                        <div class="input-group has-validation mb-3">
                                                            <span class="input-group-text" id="product-price-addon">$</span>
                                                            
                                                            <input name="price" type="text" class="form-control" id="product-price-input" placeholder="Enter price" aria-label="Price" aria-describedby="product-price-addon" required>
                                                            @error('price')
                                                            <p class="text-danger">{{$message}}</p>
                                                            @enderror
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">

                                                    <!-- Discount -->
                                                    <div class="mb-3">
                                                        <label class="form-label" for="product-discount-input">Discount</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="product-discount-addon">%</span>
                                                            
                                                            <input name="discount" type="text" class="form-control" id="product-discount-input" placeholder="Enter discount" aria-label="discount" aria-describedby="product-discount-addon">
                                                            @error('discount')
                                                            <p class="text-danger">{{$message}}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-sm-6">

                                                    <!-- Discount Price-->
                                                    <div class="mb-3">
                                                        <label class="form-label" for="stocks-input">Discount Price</label>
                                                        
                                                        <input name="discount_price" type="text" class="form-control" id="stocks-input" placeholder="discount price" required>
                                                        @error('discount_price')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card -->
                            <div class="text-end mb-3">
                                <button type="submit" class="btn btn-primary w-sm">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection