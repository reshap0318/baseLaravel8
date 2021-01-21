@extends('layouts.metronic.myApp')

@section('content')
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
                    <th>id</th>
                    <th style="text-align: left">name</th>
                    <th>Actions</th>
                </tr>
            </thead>
        </table>
        <!--end: Datatable-->
    </div>
</div>
@endsection

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
			// serverSide: true,
			ajax: {
				url: "{{ url('role/datas') }}",
				type: 'GET',
				dataSrc: "data"
            },
            columns: [
                { data: "id" },
                { data: "name" },
				{ data: 'id', responsivePriority: -1},
            ],
            columnDefs: [
                {
                    width: '15px',
                    targets: 0,
                    title: 'Id'
                },
                {
                    width: '100px',
                    targets: -1,
                    className: "m-grid-col-center",
					title: 'Actions',
                    orderable: false,
                    render: function(data, type, full, meta) {
						return '\
							<a href="'+ base_url+'/role/edit/'+data+'" class="btn btn-sm btn-clean btn-icon" title="Edit">\
								<i class="la la-edit"></i>\
							</a>\
							<a href="javascript:;" onclick="mDelete('+data+')" class="btn btn-sm btn-clean btn-icon" title="Delete">\
								<i class="la la-trash"></i>\
							</a>\
						';
					},
                }
            ]
        });

        function mDelete(id){
            var url = base_url+"/role/delete/"+id;
            console.log(url);
            $.ajax({
                url: url,
                method: 'DELETE',
                success: function(result){
                    table.DataTable().ajax.reload();
                }
            });
        }
    </script>
@endsection