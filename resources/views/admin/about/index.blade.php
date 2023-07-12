@extends('admin.layouts.master')


@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Manage About</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Manage About</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Edit About Content</h2>
            <p class="section-lead">On this page you can edit about</p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>About Content</h4>
                            <div class="card-header-action">

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
