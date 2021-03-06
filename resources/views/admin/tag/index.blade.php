@extends('layouts.backend.app')
@section('title',"Tags")
@push('css')
<link href="{{asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">

@endpush

@section('content')

        <div class="container-fluid">
             <!-- Exportable Table -->
            <div class="block-header">
                <a class="btn btn-primary waves-effect" href="{{route('admin.tag.create')}}">
                    <i class="material-icons">add</i>
                    <span>Add new Tag </span></a>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EXPORTABLE TABLE
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                    <tr>
                                        <th>Tag Name</th>
                                        <th>Slug</th>
                                        <th>Created</th>
                                        <th>Updated</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>

                                    <tbody>

                                    
                                    @foreach($tags as $tag)
                                    <tr>
                                        <td>{{$tag->name}}</td>
                                        <td>{{$tag->slug}}</td>
                                        <td>{{$tag->created_at}}</td>
                                        <td>{{$tag->updated_at}}</td>
                                        <td>
                                            <a class="btn btn-primary" href="{{route('admin.tag.edit',$tag->id)}}">
                                                <i class="material-icons">edit</i></a>
                                            <a class="btn btn-danger" href="">
                                            <form action="{{route('admin.tag.destroy',$tag->id)}}" method="post" style="display: none;">
                                                @csrf
                                                @method('DELETE')

                                            </form>
                                                <i class="material-icons">delete</i></a>

                                        </td>

                                    </tr>
                                     @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>


@endsection

@push('js')

<!-- Jquery DataTable Plugin Js -->
<script src="{{asset('assets/backend/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('assets/backend/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/backend/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/backend/js/pages/index.js')}}"></script>
@endpush
