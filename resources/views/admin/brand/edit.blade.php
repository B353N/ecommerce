@extends('admin.layouts.master')


@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Manage Brands</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('admin.brand.index') }}">Manage Brands</a></div>
                <div class="breadcrumb-item">Create Brand</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Add/Edit Brands Content</h2>
            <p class="section-lead">From here you can modify brands</p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Create Brand</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.slider.update', $brand->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Preview</label>
                                    <br />
                                    <img width="200px" src="{{ asset($brand->logo) }}" alt="" />
                                </div>
                                <div class="form-group">
                                    <label>Logo</label>
                                    <input type="file" class='form-control' name="image">
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $brand->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="inputState">Is feature</label>
                                    <select id="inputState" class="form-control" name="feature">
                                        <option {{ $brand->feature == 1 ? 'selected' : '' }} value="1">Yes</option>
                                        <option {{ $brand->feature == 0 ? 'selected' : '' }} value="0">No</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputState">Status</label>
                                    <select id="inputState" class="form-control" name="status">
                                        <option {{ $brand->status == 1 ? 'selected' : '' }} value="1">Active</option>
                                        <option {{ $brand->status == 0 ? 'selected' : '' }} value="0">Inactive</option>
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
