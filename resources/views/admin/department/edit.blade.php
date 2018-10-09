@extends('layouts.backend.app')
@section('title',"category Create")
@push('css')

@endpush

@section('content')

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                       Update Category
                    </h2>

                </div>
                <div class="body">
                    <form method="post" action="{{route('admin.category.update',$category->id)}}">
                        @csrf
                        @method('PUT')
                        <label for="email_address">Category Name</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input name="name" value="{{$category->name}}" type="text" id="email_address" class="form-control" placeholder="Enter tag name">
                            </div>
                        </div>

                        <br>
                        <a href="{{route('admin.category.index')}}" class="btn btn-danger m-t-15 waves-effect">Back</a>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('js')

@endpush
