@extends('admin.layouts.master')


@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Manage Slider</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('admin.homeOffers.index') }}">Manage Home Offers</a></div>
                <div class="breadcrumb-item">Edit Home Offer</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Add/Edit Home Offers</h2>
            <p class="section-lead">From here you can modify top home offers</p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Home Offer</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.homeOffers.update', $homeOffer->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class='form-control' name="title"
                                        value="{{ $homeOffer->title }}">
                                </div>
                                <div class="form-group">
                                    <label>Text</label>
                                    <input type="text" class="form-control" name="text"
                                        value="{{ $homeOffer->text }}">
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
