@extends('layouts.metronic.myApp')

@section('content')
<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">User</h3>
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                <a href="{{ route('users.create') }}" class="btn btn-light-success font-weight-bold mr-2"><i class="la la-plus"></i>Create</a>
            </div>
        </div>
    </div>
</div>
@endsection