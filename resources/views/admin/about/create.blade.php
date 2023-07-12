@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Manage About</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('admin.about.index') }}">Manage About</a></div>
                <div class="breadcrumb-item">Create About</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Create About</h2>
            <p class="section-lead">From here you can modify about</p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Create About</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.about.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class='form-control' name="Image">
                                </div>

                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea class='form-control summernote' name="content">{{ old('content') }}</textarea>
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
