@extends('admin.layouts.master')


@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Manage Slider</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('admin.dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{route('admin.slider.index')}}">Manage Slider</a></div>
                <div class="breadcrumb-item">Edit Slider</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Add/Edit Slider Content</h2>
            <p class="section-lead">From here you can modify top home page slider</p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Slider</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.slider.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Preview</label>
                                    <br />
                                    <img width="200px" src="{{asset($slider->image)}}" alt="" />
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class='form-control' name="image">
                                </div>

                                <div class="form-group">
                                    <label>H4(Small) Text</label>
                                    <input type="text" class='form-control' name="h4" value="{{$slider->h4}}">
                                </div>
                                <div class="form-group">
                                    <label>H2 (Middle) Text</label>
                                    <input type="text" class="form-control" name="h2" value="{{$slider->h2}}">
                                </div>
                                <div class="form-group">
                                    <label>H1 (BIG) Text</label>
                                    <input type="text" class="form-control" name="h1" value="{{$slider->h1}}">
                                </div>
                                <div class="form-group">
                                    <label>Button URL</label>
                                    <input type="text" class="form-control" name="btn_url" value="{{$slider->btn_url}}">
                                </div>
                                <div class="form-group">
                                    <label>Serial</label>
                                    <input type="text" class="form-control" name="serial" value="{{$slider->serial}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputState">Status</label>
                                    <select id="inputState" class="form-control" name="status">
                                        <option {{ $slider->status == 1 ? 'selected': '' }} value="1">Active</option>
                                        <option {{ $slider->status == 0 ? 'selected': '' }} value="0">Inactive</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
