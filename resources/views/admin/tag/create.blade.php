@extends('layouts.backend.app')
@section('title',"Tag Create")
@push('css')

@endpush

@section('content')

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                       Add New Tag
                    </h2>

                </div>
                <div class="body">
                    <form method="post" action="{{route('admin.tag.store')}}">
                        @csrf
                        <label for="email_address">Tag Name</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input name="name" type="text" id="email_address" class="form-control" placeholder="Enter tag name">
                            </div>
                        </div>

                        <br>
                        <a href="{{route('admin.tag.index')}}" class="btn btn-danger m-t-15 waves-effect">Back</a>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('js')

@endpush
