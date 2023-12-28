@extends('Layouts.app')

@section('title', 'Add-Products')
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

            <form method="POST" action="{{route('product-store')}}" enctype="multipart/form-data"
                id="createproduct-form" class="needs-validation" novalidate>
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">

                                <!-- titele -->
                                <div class="mb-3">
                                    <label class="form-label" for="product-title-input">Product Title</label>

                                    <input value="{{old('title')}}" name="title" type="text" class="form-control"
                                        id="product-title-input" placeholder="Enter product title" required>
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
                                    <!-- Image Input -->
                                    <input value="{{old('image_1')}}" name="image" type="file" multiple="multiple">
                                    @error('image_1')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-control my-2">
                                    <!-- Image Input -->
                                    <input value="{{old('image_2')}}" name="image" type="file" multiple="multiple">
                                    @error('image_2')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-control">
                                    <!-- Image Input -->
                                    <input value="{{old('image_3')}}" name="image" type="file" multiple="multiple">
                                    @error('image_3')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-control mt-2">
                                    <!-- Image Input -->
                                    <input value="{{old('image_4')}}" name="image" type="file" multiple="multiple">
                                    @error('image_4')
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
                                        <a class="nav-link active" data-bs-toggle="tab" href="#addproduct-general-info"
                                            role="tab">
                                            Product Information
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

                                                    <select name="category_id" class="form-control">
                                                        @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->categoryName}}
                                                        </option>
                                                        @endforeach
                                                    </select>

                                                    @error('category_id')
                                                    <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- brand Id -->
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="manufacturer-brand-input">Select
                                                        Brand</label>

                                                    <select name="brand_id" class="form-control">
                                                        @foreach($brands as $brand)
                                                        <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                                        @endforeach
                                                    </select>

                                                    @error('brand_id')
                                                    <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="col-lg-3 col-sm-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="manufacturer-brand-input">Select
                                                        Remak</label>

                                                    <select name="remark" class="form-control">
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

                                                    <select name="star" class="form-control">
                                                        <option value="5">5</option>
                                                        <option value="4">4</option>
                                                        <option value="2">3</option>
                                                        <option value="3">2</option>
                                                        <option value="1">1</option>
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
                                                    <label class="form-label" for="manufacturer-brand-input">Product
                                                        Stock</label>

                                                    <input value="{{old('stock')}}" name="stock" type="text"
                                                        class="form-control" id="manufacturer-brand-input"
                                                        placeholder="Product Stock">
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

                                                        <input name="price" type="text" class="form-control"
                                                            id="product-price-input" placeholder="Enter price"
                                                            aria-label="Price" aria-describedby="product-price-addon"
                                                            required>
                                                        @error('price')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-sm-6">
                                                <!-- Discount -->
                                                <div class="mb-3">
                                                    <label class="form-label" for="product-discount-input">Discount (if
                                                        any)</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"
                                                            id="product-discount-addon">%</span>

                                                        <input name="discount" type="text" class="form-control"
                                                            id="product-discount-input" placeholder="Enter discount"
                                                            aria-label="discount"
                                                            aria-describedby="product-discount-addon">
                                                        @error('discount')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-sm-6">
                                                <!-- Discount Price-->
                                                <div class="mb-3">
                                                    <label class="form-label" for="stocks-input">Discount Price (if
                                                        any)</label>

                                                    <input name="discount_price" type="text" class="form-control"
                                                        id="stocks-input" placeholder="discount price">
                                                    @error('discount_price')
                                                    <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Color and size section -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="addproduct-general-info" role="tabpanel">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="form-label" for="Product-size">Size</label>
                                                <hr>
                                                <div class="row">
                                                    <!-- Product Size -->
                                                    <div class="col-lg-3 col-sm-6">
                                                        <div class="form-check">

                                                            <input name="sizes[]" value="SM" class="form-check-input" type="checkbox">
                                                            <label class="form-check-label">
                                                                SM
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6">
                                                        <div class="form-check">

                                                            <input name="sizes[]" value="M" class="form-check-input" type="checkbox">
                                                            <label class="form-check-label">
                                                                M
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6">
                                                        <div class="form-check">

                                                            <input name="sizes[]" value="L" class="form-check-input" type="checkbox">
                                                            <label class="form-check-label">
                                                                L
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6">
                                                        <div class="form-check">

                                                            <input name="sizes[]" value="XL" class="form-check-input" type="checkbox">
                                                            <label class="form-check-label">
                                                                XL
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Color -->
                                            <div class="col-sm-6">
                                                <label class="form-label" for="Product-color">Size</label>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-lg-3 col-sm-6">
                                                        <div class="form-check">

                                                            <input name="colors[]" value="Red" class="form-check-input" type="checkbox" >
                                                            <label class="form-check-label">
                                                                Red
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6">
                                                        <div class="form-check">

                                                            <input name="colors[]" value="Green" class="form-check-input" type="checkbox">
                                                            <label class="form-check-label">
                                                                Green
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6">
                                                        <div class="form-check">

                                                            <input name="colors[]" value="Blue" class="form-check-input" type="checkbox">
                                                            <label class="form-check-label">
                                                                Blue
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6">
                                                        <div class="form-check">

                                                            <input name="colors[]" value="Black" class="form-check-input" type="checkbox">
                                                            <label class="form-check-label">
                                                                Black
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Submit button -->
                            <div class="text-end mb-3">
                                <button type="submit" class="btn btn-primary w-sm">Submit</button>
                            </div>
                        </div>
                    </div>
            </form><!-- Form end -->
        </div>
    </div>
</div>
@endsection