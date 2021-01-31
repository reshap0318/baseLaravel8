<div class="card card-custom">
    <form wire:submit.prevent="update">
        @include('livewire.role._form')
        <div class="card-footer">
            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <a href="{{ route('roles.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </div>
    </form>
</div>

@section('js')
    <script type="text/javascript">
        // multi select
        $('.select2').select2({
            placeholder: 'Select a state',
        });

        $('.select2').on('change', function (e) {
            var data = [];
            $('.select2').find(':selected').each(function(){
                data.push(this.value)
            });
            @this.set('permissions', data);
        });
    </script> 
@endsection