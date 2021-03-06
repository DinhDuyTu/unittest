@extends('admin.layouts.main')
@section('title', config('configcourse.create_course'))
@section('content')
<div id="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.courses.index') }}">{{ trans('setting.courses') }}</a>
            </li>
            <li class="breadcrumb-item active">@yield('title')</li>
        </ol>
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-chalkboard-teacher"></i> |
                <span> @yield('title') </span></a>
                <div class="card-body">
                    <div>
                        <div class="col-sm-12 col-sm-offset-3 col-lg-12 col-lg-offset-2 main">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <form action="{{ route('admin.courses.store') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        @if ($errors->any())
                                                            <div class="alert alert-danger"><i
                                                                    class="fas fa-exclamation-triangle"></i>
                                                                {{ $errors->first() }}</div>
                                                        @endif
                                                        <div class="form-group">
                                                            <label for="">{{ trans('setting.category') }} :</label>
                                                            <select class="form-control" name="category_id" id="">
                                                                @include('admin.partials.categories_options', ['level' => 0])
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">{{ trans('setting.name') }}</label>
                                                            <input type="text" class="form-control" name="name" id="" value="{{ old('name') }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">{{ trans('setting.status') }}</label>
                                                            <select class="form-control" name="status" id="">
                                                                <option value="0">{{ trans('setting.open') }}</option>
                                                                <option value="1">{{ trans('setting.waiting') }}</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group" id="add_main">
                                                            <label for="">{{ trans('setting.subject') }}</label>
                                                            <button type="button" id="btn_add" name="btn_add" class="btn btn-primary">
                                                                    <i class="fas fa-plus"></i>
                                                            </button>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">{{ trans('setting.description') }}</label>
                                                            <textarea class="form-control" name="description" id=""
                                                                cols="30" rows="10">{{ old('description') }}</textarea>
                                                        </div>
                                                        <button type="submit"
                                                            class="btn btn-primary">{{ trans('setting.add_course') }}</button>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>{{ trans('setting.course_image') }}</label>
                                                            <input id="img" type="file" name="image" class="form-control hidden">
                                                            <img id="image" class="thumbnail" width="100%" height="350px" src="/images/avatar.jpg">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group d-none" id="option_subject">
            <table id="input" class="table">
                <tr>
                    <td><select name="subject_id[]" id="subject_id" class="form-control">
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                            @endforeach
                        </select></td>
                    <td><button type="button" id="btn_remove" name="btn_remove" class="btn btn-danger">X</button></td>
                </tr>
            </table>
        </div>
       @include('admin.layouts.footer')

    </div>
</div>
@endsection
