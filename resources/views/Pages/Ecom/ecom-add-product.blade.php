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
                                            <textarea name="short_desc" cols="50" rows="5"></textarea>
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
                                                <!-- Stocks -->
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="manufacturer-brand-input">Stock</label>
                                                        
                                                        <input name="stock" type="text" class="form-control" id="manufacturer-brand-input" placeholder="Product Stock">
                                                        @error('stock')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="category_id">Category Id</label>
                                                        
                                                        <select name="category_id">
                                                            <option value="1">Food</option>
                                                            <option value="2">Fashion</option>
                                                            <option value="3">Furniture</option>
                                                            <option value="4">Grocery</option>
                                                            <option value="5">Cosmatics</option>
                                                            <option value="6">Electronics</option>
                                                        </select>

                                                        @error('category_id')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <!-- brand Id -->
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="manufacturer-brand-input">Brand Id</label>
                                                        
                                                        <select name="brand_id">
                                                            <option value="1">Pran</option>
                                                            <option value="2">Easy</option>
                                                            <option value="3">Otobi</option>
                                                            <option value="4">ACR</option>
                                                            <option value="5">Kohinoor</option>
                                                            <option value="6">Wolton</option>
                                                        </select>
                                                        
                                                        @error('brand_id')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="manufacturer-brand-input">Remak</label>
                                                        
                                                        <select name="remark">
                                                            <option value="new">New</option>
                                                            <option value="popular">Popular</option>
                                                            <option value="top">Top</option>
                                                            <option value="special">Special</option>
                                                            <option value="tranding">Tranding</option>
                                                        </select>
                                                        @error('remark')
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