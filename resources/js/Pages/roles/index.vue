<template>
    <layout title="Welcome">
        <div class="card card-custom">
            <div class="card-header">
                <h3 class="card-title">Roles List</h3>
                <div class="card-toolbar">
                    <div class="example-tools justify-content-center">
                        <inertia-link href="/role">
                            <a href="#" class="btn btn-light-success font-weight-bold mr-2"><i class="la la-plus"></i>Create</a>
                        </inertia-link>
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
    </layout>
</template>

<script>
    import Layout from '../../layouts/base'
    export default {
        components: {
            Layout,
        },
        created() {
        },
        mounted() {
            this.initDatatable()
        },
        methods: {
            initDatatable() {
                var table = $('#tb_role');
                // begin first table
                table.DataTable({
                    responsive: true,
                    searchDelay: 500,
                    processing: true,
                    ajax: {
                        url: "http://127.0.0.1:8000/role/datas",
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
                                    <a href="" class="btn btn-sm btn-clean btn-icon" title="Edit">\
                                        <i class="la la-edit"></i>\
                                    </a>\
                                    <a href="javascript:;" onclick="" class="btn btn-sm btn-clean btn-icon" title="Delete">\
                                        <i class="la la-trash"></i>\
                                    </a>\
                                ';
                            },
                        }
                    ]
                });
            }
        }
    }
</script>