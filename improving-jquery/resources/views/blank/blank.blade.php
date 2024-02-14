@extends('main')
@include('admin.menu')

@section('breadcrumb')
    <div class="row">
        <div class="col-sm-6">
            <h3 class="mb-0">Blank Page</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item" aria-current="page">
                    <a href="/admin">
                        Dashboard
                    </a>
                </li>

                <li class="breadcrumb-item active" aria-current="page">
                    Blank Page
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
@endsection

@section('modals')
@endsection