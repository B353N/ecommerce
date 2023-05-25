@extends('admin.layouts.master')


@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Manage Home Offers</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Manage Home Offers</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Add/Edit Home Offers</h2>
            <p class="section-lead">From here you can modify top home offers</p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Home Offers Content</h4>
                            <div class="card-header-action">
                                <a href="{{ route('admin.homeOffers.create') }}" class="btn btn-primary"><i
                                        class="far fa-plus"></i> Create New</a>
                            </div>
                        </div>
                        <div class="card-body">
                            {{ $dataTable->table() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
