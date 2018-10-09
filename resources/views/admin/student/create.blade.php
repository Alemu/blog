@extends('layouts.backend.app')
@section('title',"Category ")
@push('css')

@endpush

@section('content')

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                       Add New Student
                    </h2>

                </div>
                <div class="body">
                    <form method="post" action="{{route('admin.student.store')}}">
                        @csrf

                        <label for="email_address">Student Name</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input name="name" type="text" id="name" class="form-control" placeholder="Enter Student name">
                            </div>
                        </div>
                        <label for="sex"> Sex</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input name="sex" type="text" id="sex" class="form-control"  >
                            </div>
                        </div>
                        <label for="age"> Age</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input name="age" type="number" id="age" class="form-control"  >
                            </div>
                        </div>
                        <label for="age"> DOB</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input name="dob" type="date" id="dob" class="form-control"  >
                            </div>
                        </div>
                        <label for="department">Student Department</label>
                        <div class="form-group">
                            <div class="form-line">
                                <select  name="department"  >
                                    @foreach($departments as $department)
                                        <option value="{{$department->id}}">{{$department->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <a href="{{route('admin.student.index')}}" class="btn btn-danger m-t-15 waves-effect">Back</a>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('js')
@endpush
