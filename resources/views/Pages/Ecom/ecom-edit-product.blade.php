@extends('Layouts.app')

@section('content')        
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Update Product</h4>
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

                <form method="POST" action="{{route('product.update',$product->id)}}" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">

                                    <!-- titele -->
                                    <div class="mb-3">
                                        <label class="form-label" for="product-title-input">Product Title</label>
                                        
                                        <input  name="title" value="{{$product->title}}" type="text" class="form-control" id="product-title-input" placeholder="Enter product title" required>
                                        @error('title')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <!-- description -->
                                    <div>
                                        <label>Product Description</label>
                                        <div id="ckeditor-classic">
                                            <textarea name="short_desc"  type="text" class="form-control" placeholder="Enter product decription" required>{{$product->short_desc}}</textarea>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- image Show and Input-->
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Product Image</h5>
                                </div>
                                <div class="card-body"> 
                                    <div class="mb-4">
                                        <div class="text-center">
                                            <div class="position-relative d-inline-block">
                                                <div class="avatar-lg">
                                                    <div class="avatar-title bg-light rounded">
                                                        <img src="{{asset($product->image)}}" id="product-img" class="avatar-md h-auto" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-control">
                                        <!-- Image Input -->
                                        <input name="image" type="file" >
                                        @error('image')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            
                            <!-- General Info -->
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

                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="category_id">Select Category</label>
                                                        
                                                        <select name="category_id" value="{{$product->category_id}}" class="form-control">
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
                                                        <label class="form-label" for="manufacturer-brand-input">Select Brand</label>
                                                        
                                                        <select name="brand_id" value="{{$product->brand_id}}" class="form-control">
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
                                                        <label class="form-label" for="manufacturer-brand-input">Select Remak</label>
                                                        
                                                        <select name="remark" value="{{$product->remark}}" class="form-control">
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

                                                <!-- Star -->
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="stocks-input">Select Star</label>                                                        
                                                        
                                                        <select name="star" value="{{$product->star}}" class="form-control">
                                                            <option value="1">One Star</option>
                                                            <option value="2">Two Star</option>
                                                            <option value="3">Three Star</option>
                                                            <option value="4">Four Star</option>
                                                            <option value="5">Five Star</option>
                                                        </select>
                                                        
                                                        @error('star')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end row -->

                                            <div class="row">
                                                <!-- Stocks -->
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="manufacturer-brand-input">Product Stock</label>
                                                        
                                                        <input name="stock" value="{{$product->stock}}" type="text" class="form-control" id="manufacturer-brand-input" placeholder="Product Stock">
                                                        @error('stock')
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
                                                            
                                                            <input name="price" value="{{$product->price}}" type="text" class="form-control" id="product-price-input" placeholder="Enter price" aria-label="Price" aria-describedby="product-price-addon" required>
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
                                                            
                                                            <input name="discount" value="{{$product->discount}}" type="text" class="form-control" id="product-discount-input" placeholder="Enter discount" aria-label="discount" aria-describedby="product-discount-addon">
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
                                                        
                                                        <input name="discount_price" value="{{$product->discount_price}}" type="text" class="form-control" id="stocks-input" placeholder="discount price" required>
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
                            <div class="text-end mb-3">
                                <button type="submit" class="btn btn-primary w-sm">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ckeditor -->
    <script src="{{asset('assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js')}}"></script>

    <!-- dropzone js -->
    <script src="{{asset('assets/libs/dropzone/dropzone-min.js')}}"></script>
@endsection