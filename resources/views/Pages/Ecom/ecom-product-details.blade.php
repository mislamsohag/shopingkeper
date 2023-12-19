@extends('Layouts.app')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Product Details</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                <li class="breadcrumb-item active"><a class="btn btn-soft-primary" href="{{route('products')}}">Back to Products</a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row gx-lg-5">
                                <div class="col-xl-4 col-md-8 mx-auto">

                                    <!-- Image Slider Section -->
                                    <div class="product-img-slider sticky-side-div">
                                        <div class="swiper product-thumbnail-slider p-2 rounded bg-light">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{asset($product->image)}}" alt="" class="img-fluid d-block" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{asset('assets')}}/images/products/img-6.png" alt="" class="img-fluid d-block" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{asset('assets')}}/images/products/img-1.png" alt="" class="img-fluid d-block" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{asset('assets')}}/images/products/img-8.png" alt="" class="img-fluid d-block" />
                                                </div>
                                            </div>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>
                                        <!-- end swiper thumbnail slide -->
                                        
                                        <div class="swiper product-nav-slider mt-2">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="nav-slide-item ">
                                                        <img src="{{asset($product->image)}}" alt="" class="img-fluid d-block" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="nav-slide-item">
                                                        <img src="{{asset('assets')}}/images/products/img-6.png" alt="" class="img-fluid d-block" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="nav-slide-item">
                                                        <img src="{{asset('assets')}}/images/products/img-1.png" alt="" class="img-fluid d-block" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="nav-slide-item">
                                                        <img src="{{asset('assets')}}/images/products/img-8.png" alt="" class="img-fluid d-block" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end swiper nav slide -->
                                    </div>
                                </div>
                                <!-- end  -->

                                <div class="col-xl-8">
                                    <div class="mt-xl-0 mt-5">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">

                                                <!-- Product Title -->
                                                <h4>{{$product->title}}</h4>
                                                <div class="hstack gap-3 flex-wrap">
                                                    <div><a href="#" class="text-primary d-block">{{$brand->brand_name}}</a></div>
                                                    <div class="vr"></div>
                                                    <div class="text-muted">Seller : <span class="text-body fw-medium">Zoetic Fashion</span>
                                                    </div>
                                                    <div class="vr"></div>
                                                    <div class="text-muted">Published : <span class="text-body fw-medium">{{$product->created_at}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div>
                                                    <a href="{{route('add-product')}}" class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Product Add"><i class="ri-pencil-fill align-bottom"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-wrap gap-2 align-items-center mt-3">
                                            <div class="text-muted fs-16">
                                                <span class="mdi mdi-star text-warning"></span>
                                                <span class="mdi mdi-star text-warning"></span>
                                                <span class="mdi mdi-star text-warning"></span>
                                                <span class="mdi mdi-star text-warning"></span>
                                                <span class="mdi mdi-star text-warning"></span>
                                            </div>
                                            <div class="text-muted">( 5.50k Customer Review )</div>
                                        </div>

                                        <!-- Product Price -->
                                        <div class="row mt-4">
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="p-2 border border-dashed rounded">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm me-2">
                                                            <div class="avatar-title rounded bg-transparent text-primary fs-24">
                                                                <i class="ri-money-dollar-circle-fill"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <p class="text-muted mb-1">Price :</p>
                                                            <h5 class="mb-0">${{$product->price}}</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Order Here -->
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="p-2 border border-dashed rounded">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm me-2">
                                                            <div class="avatar-title rounded bg-transparent text-primary fs-24">
                                                                <i class="ri-file-copy-2-fill"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <p class="text-muted mb-1">No. of Orders :</p>
                                                            <h5 class="mb-0">2,234</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Order Here end -->

                                            <!-- Stock Show Here-->
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="p-2 border border-dashed rounded">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm me-2">
                                                            <div class="avatar-title rounded bg-transparent text-primary fs-24">
                                                                <i class="ri-stack-fill"></i>
                                                            </div>
                                                        </div>
                                                        <!-- Stock Show -->
                                                        <div class="flex-grow-1">
                                                            <p class="text-muted mb-1">Available Stocks :</p>
                                                            <h5 class="mb-0">{{$product->stock}}</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end Stock Show Here -->

                                            <!-- Total Revenue Here -->
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="p-2 border border-dashed rounded">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm me-2">
                                                            <div class="avatar-title rounded bg-transparent text-primary fs-24">
                                                                <i class="ri-inbox-archive-fill"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <p class="text-muted mb-1">Total Revenue :</p>
                                                            <h5 class="mb-0">$60,645</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end Total Revenue -->
                                        </div>

                                        <!-- Product Input Here -->
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class=" mt-4">
                                                    <h5 class="fs-14">Sizes :</h5>
                                                    <div class="d-flex flex-wrap gap-2">
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Out of Stock">
                                                            <input type="radio" class="btn-check" name="productsize-radio" id="productsize-radio1" disabled>
                                                            <label class="btn btn-soft-primary avatar-xs rounded-circle p-0 d-flex justify-content-center align-items-center" for="productsize-radio1">S</label>
                                                        </div>

                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="04 Items Available">
                                                            <input type="radio" class="btn-check" name="productsize-radio" id="productsize-radio2">
                                                            <label class="btn btn-soft-primary avatar-xs rounded-circle p-0 d-flex justify-content-center align-items-center" for="productsize-radio2">M</label>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="06 Items Available">
                                                            <input type="radio" class="btn-check" name="productsize-radio" id="productsize-radio3">
                                                            <label class="btn btn-soft-primary avatar-xs rounded-circle p-0 d-flex justify-content-center align-items-center" for="productsize-radio3">L</label>
                                                        </div>

                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Out of Stock">
                                                            <input type="radio" class="btn-check" name="productsize-radio" id="productsize-radio4" disabled>
                                                            <label class="btn btn-soft-primary avatar-xs rounded-circle p-0 d-flex justify-content-center align-items-center" for="productsize-radio4">XL</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Input Here end -->

                                            <div class="col-xl-6">
                                                <div class=" mt-4">
                                                    <h5 class="fs-14">Colors :</h5>
                                                    <div class="d-flex flex-wrap gap-2">
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Out of Stock">
                                                            <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-primary" disabled>
                                                                <i class="ri-checkbox-blank-circle-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="03 Items Available">
                                                            <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-secondary">
                                                                <i class="ri-checkbox-blank-circle-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="03 Items Available">
                                                            <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-success">
                                                                <i class="ri-checkbox-blank-circle-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="02 Items Available">
                                                            <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-primary">
                                                                <i class="ri-checkbox-blank-circle-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="01 Items Available">
                                                            <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-warning">
                                                                <i class="ri-checkbox-blank-circle-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="04 Items Available">
                                                            <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-danger">
                                                                <i class="ri-checkbox-blank-circle-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="03 Items Available">
                                                            <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-light">
                                                                <i class="ri-checkbox-blank-circle-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="04 Items Available">
                                                            <button type="button" class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-body">
                                                                <i class="ri-checkbox-blank-circle-fill"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <!-- Product Description Show -->
                                        <div class="mt-4 text-muted">
                                            <h5 class="fs-14">Description :</h5>
                                            <p>{{$product->short_desc}}</p>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="mt-3">
                                                    <h5 class="fs-14">Features :</h5>
                                                    <ul class="list-unstyled">
                                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                            Full Sleeve</li>
                                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                            Cotton</li>
                                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                            All Sizes available</li>
                                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                            4 Different Color</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mt-3">
                                                    <h5 class="fs-14">Services :</h5>
                                                    <ul class="list-unstyled product-desc-list">
                                                        <li class="py-1">10 Days Replacement</li>
                                                        <li class="py-1">Cash on Delivery available</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="product-content mt-5">
                                            <h5 class="fs-14 mb-3">Product Description :</h5>
                                            <nav>
                                                <ul class="nav nav-tabs nav-tabs-custom nav-primary" id="nav-tab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="nav-speci-tab" data-bs-toggle="tab" href="#nav-speci" role="tab" aria-controls="nav-speci" aria-selected="true">Specification</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="nav-detail-tab" data-bs-toggle="tab" href="#nav-detail" role="tab" aria-controls="nav-detail" aria-selected="false">Details</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                            <div class="tab-content border border-top-0 p-4" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="nav-speci" role="tabpanel" aria-labelledby="nav-speci-tab">
                                                    <div class="table-responsive">
                                                        <table class="table mb-0">
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row" style="width: 200px;">
                                                                        Category</th>
                                                                    <td>{{$category->categoryName}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Brand</th>
                                                                    <td>{{$brand->brand_name}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Color</th>
                                                                    <td>Blue</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Material</th>
                                                                    <td>Cotton</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Weight</th>
                                                                    <td>140 Gram</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <!-- Product Details with description -->
                                                <div class="tab-pane fade" id="nav-detail" role="tabpanel" aria-labelledby="nav-detail-tab">
                                                    <div>
                                                        <h5 class="font-size-16 mb-3">{{$product->title}}</h5>
                                                        <p>{{$product->short_desc}}</p>
                                                        <div>
                                                            <p class="mb-2"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                                Machine Wash</p>
                                                            <p class="mb-2"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                                Fit Type: Regular</p>
                                                            <p class="mb-2"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                                100% Cotton</p>
                                                            <p class="mb-0"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                                Long sleeve</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-content -->

                                        <!-- end card body -->
                                    </div>
                                </div>
                                <!-- end Product Description -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>
        
</div>
@endsection
        