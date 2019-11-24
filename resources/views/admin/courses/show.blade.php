@extends('admin.layouts.main')
@section('title', 'List Course')
@section('content')
<!-- content -->
<div id="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-user"></i>
                <span>List User</span>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div>
                                <ul>
                                    <li><b>ID :</b> {{ $course->id }}</li>
                                    <li><b>Name :</b> {{ $course->name }}</li>
                                    <li><b>Status :</b>
                                        @if ($course->status == true)
                                        -----<b style="color: yellow"> Waiting</b>-----
                                        @else
                                        -----<b style="color: Green">Open</b>-----
                                        @endif
                                    </li>
                                    <li><b>Description :</b> {{ $course->description }}</li>
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#myModal">Assign User</button>
                                </ul>
                            </div>
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <label for="">Assgin User</label>
                                        </div>
                                        <form action="{{ route('postShowCourse', $course->id) }}" method="POST">
                                            @csrf
                                            <div class="modal-body">
                                                <select class="form-control" name="user_id">
                                                    @foreach ($listUser as $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }} |
                                                        {{ $user->email }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">add</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="vertical-menu">
                                <div class="item-menu active">Danh mục
                                </div>
                                @foreach ($subject as $item)
                                <div class="item-menu"><span>{{ $item->name }}</span>
                                    <div class="category-fix">
                                        <a class="btn-category btn-primary"
                                            href="{{ route('admin.subjects.edit', $item->id) }}"><i
                                                class="fa fa-edit"></i></a>
                                        <a class="btn-category btn-danger" href="#"><i class="fas fa-times"></i></i></a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-9">
                            <table class="table table-bordered" style="margin-top:20px;">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>{{ trans('setting.id') }}</th>
                                        <th>{{ trans('setting.name') }}</th>
                                        <th>{{ trans('setting.email') }}</th>
                                        <th>{{ trans('setting.status') }}</th>
                                        <th>{{ trans('setting.process') }}</th>
                                        <th width='15%'>{{ trans('setting.options') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($userCourse as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p><b>{{ $user->name }}</b></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @foreach ($statusUser as $item)
                                                @if ($item->user_id == $user->id)
                                                    @if ($item->status == 0)
                                                        <button class="btn btn-warning">Ativiting</button>
                                                    @else
                                                        <button class="btn btn-success">Success</button>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </td>
                                        <td></td>
                                        <td>
                                            <form id="finish-form" action="{{ route('postFinishCourse', $course->id) }}" method="post">
                                                @csrf
                                                @method('PUT')
                                            @foreach ($statusUser as $item)
                                                @if ($item->user_id == $user->id)
                                                    @if ($item->status == 0)
                                                        <input class="d-none" type="hidden" name="user_id" value="{{ $item->user_id }}">
                                                        <button onclick="return checkConfirm()" type="submit" class="btn btn-info">Finish</button>
                                                    @else
                                                        <button class="btn btn-success">Finished</button>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td>{{ trans('setting.course_empty') }}
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->
    <footer class="sticky-footer">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright © Your Website 2019</span>
            </div>
        </div>
    </footer>

</div>
<!-- end content -->
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->
@endsection
