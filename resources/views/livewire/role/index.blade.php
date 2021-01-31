<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">Roles List</h3>
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                <a href="{{ route('roles.create') }}" class="btn btn-light-success font-weight-bold mr-2"><i class="la la-plus"></i>Create</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <!--begin: Datatable-->
        <table class="table table-bordered table-hover table-checkable" id="tb_role" style="margin-top: 13px !important">
            <thead>
                <tr style="text-align: center">
                    <th style="width: 15px;">Id</th>
                    <th style="text-align: left">Name</th>
                    <th style="width: 80px">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <td class="text-center">{{ $role->id }}</td>
                        <td>{{ $role->name }}</td>
                        <td class="text-center">
                            <a href="{{ route('roles.edit',$role->id) }}" class="btn btn-sm btn-clean btn-icon" title="Edit"><i class="la la-edit"></i></a>
                            <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"><i class="la la-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!--end: Datatable-->
    </div>
</div>

@section('vendor-js')
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
@endsection

@section('js')
    <script> 
        var table = $('#tb_role'); 
        // begin first table
        table.DataTable({
            responsive: true,
            searchDelay: 500,
            processing: true,
        });
        
    </script>
@endsection