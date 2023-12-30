@extends('Layouts.app')

@section('title', 'Brands Add')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add Brands</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                <li class="breadcrumb-item active">Add Brand</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            @if (session('sucess'))
            <div class="alert alert-success alert-dismissible fade show" role="alert"></div>
            <i class="mdi mdi-check-all me-2"></i>
            {{session('sucess')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            @endif

            <form method="POST" action="#" enctype="multipart/form-data" id="createproduct-form"
                class="needs-validation" novalidate>
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <!-- titele -->
                                <div class="mb-3">
                                    <label class="form-label" for="product-title-input">Brand Name</label>

                                    <input value="{{old('brand_name')}}" name="brand_name" type="text"
                                        class="form-control" id="product-title-input" placeholder="Enter brand name"
                                        required>
                                    @error('brand_name')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-body">
                                <label class="form-label" for="product-image-input">Brand Image</label>
                                <div class="form-control">
                                    <!-- Image Input -->
                                    <input name="brand_img" value="{{old('brand_img')}}" type="file"
                                        multiple="multiple">
                                    @error('brand_img')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="text-end my-3">
                                <button type="submit" class="btn btn-primary w-sm">Submit</button>
                            </div><!-- Submit button -->
                            </div><!-- image -->
                        </div>
                    </div>
                </div>
            </form><!-- Form end -->
        </div>
    </div>
</div>
@endsection