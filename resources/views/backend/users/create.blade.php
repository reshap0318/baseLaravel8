@extends('layouts.metronic.myApp')

@section('content')
<div class="card card-custom">
    {{ Form::open(array('url' => route('users.store') )) }}
        @include('backend.users._form')
        <div class="card-footer">
            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </div>
    {{ Form::close() }}
</div>
@endsection

@section('js')
    <script type="text/javascript">
        // multi select
        $('.select2').select2({
            placeholder: 'Select a state',
        });
    </script> 
@endsection