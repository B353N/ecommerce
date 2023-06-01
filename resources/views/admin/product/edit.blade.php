@extends('admin.layouts.master')


@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Manage Product</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('admin.slider.index') }}">Manage Product</a></div>
                <div class="breadcrumb-item">Edit Product</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Add/Edit Product Content</h2>
            <p class="section-lead">From here you can modify Product</p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Product</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.product.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Preview</label>
                                    <br />
                                    <img width="200px" src="{{ asset($product->thumb_image) }}" alt="" />
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class='form-control' name="image">
                                </div>

                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class='form-control' name="name" value="{{ $product->name }}">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputState">Category</label>
                                            <select id="inputState" class="form-control main-category" name="category">
                                                <option value="">Select</option>
                                                @foreach ($categories as $category)
                                                    <option @if ($category->id == $product->category_id) selected @endif
                                                        value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputState">Sub Category</label>
                                            <select id="inputState" class="form-control sub-category" name="subCategory">
                                                <option value="">Select</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputState">Brand</label>
                                    <select id="inputState" class="form-control" name="brand">
                                        <option value="">Select</option>
                                        @foreach ($brands as $brand)
                                            <option @if ($brand->id == $product->brand_id) selected @endif
                                                value="{{ $brand->id }}">{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>SKU</label>
                                    <input type="text" class='form-control' name="sku" value="{{ $product->sku }}">
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="text" class='form-control' name="price"
                                        value="{{ $product->price }}">
                                </div>
                                <div class="form-group">
                                    <label>Offer Price</label>
                                    <input type="text" class='form-control' name="offer_price"
                                        value="{{ $product->offer_price }}">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Offer Start Date</label>
                                            <input type="text" class='form-control datepicker' name="offer_start_date"
                                                value="{{ old('offer_start_date') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Offer End Date</label>
                                            <input type="text" class='form-control datepicker' name="offer_end_date"
                                                value="{{ old('offer_end_date') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Stock Quantity</label>
                                    <input type="number" min="0" class='form-control' name="qty"
                                        value="{{ old('qty') }}">
                                </div>
                                <div class="form-group">
                                    <label>Video YT link</label>
                                    <input type="text" class='form-control' name="video_link"
                                        value="{{ old('video_link') }}">
                                </div>
                                <div class="form-group">
                                    <label>Short Descriptio</label>
                                    <textarea class='form-control' name="short_description" value="{{ old('short_description') }}"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Long Descriptio</label>
                                    <textarea class='form-control summernote' name="long_description" value="{{ old('long_description') }}"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="control-label mt-2">Produtct Features</div>
                                    <div>
                                        <label class="custom-switch">
                                            <input type="checkbox" name="is_top" class="custom-switch-input"
                                                @if (old('is_top') != null) checked @endif>
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">Is Top? (On Home Page)</span>
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom-switch">
                                            <input type="checkbox" name="is_best" class="custom-switch-input"
                                                @if (old('is_best') != null) checked @endif>
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">Is Best? (Label)</span>
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom-switch">
                                            <input type="checkbox" name="is_feature" class="custom-switch-input"
                                                @if (old('is_feature') != null) checked @endif>
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">Feature? (Priority)</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>SEO Title</label>
                                    <input type="text" class='form-control' name="seo_title"
                                        value="{{ old('seo_title') }}">
                                </div>
                                <div class="form-group">
                                    <label>SEO Description</label>
                                    <textarea class='form-control' name="seo_description" value="{{ old('seo_description') }}"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputState">Status</label>
                                    <select id="inputState" class="form-control" name="status">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('body').on('change', '.main-category', function(e) {
                let id = $(this).val();
                $.ajax({
                    method: 'GET',
                    url: "{{ route('admin.product.get-subcategories') }}",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        $('.sub-category').html('<option value="">Select</option>')

                        $.each(data, function(i, item) {
                            $('.sub-category').append(
                                `<option value="${item.id}">${item.name}</option>`)
                        })
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                })
            })
        })
    </script>
@endpush
