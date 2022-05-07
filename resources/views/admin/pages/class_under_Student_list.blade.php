@extends('admin.master')
@section('content')
    <a href="{{ route('class.under.students') }}" class="btn btn-primary">Back</a>
    <div class="container py-2 ms-5">
        <h1>Class Wise Student</h1>
    </div>
    <div class="">
        <div class="content container-fluid pt-30 pb-30">
            <div id="divToPrint" class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover  table-center mb-0 datatable">

                                    <thead>
                                        <tr>

                                        <th>Student ID</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Class</th>
                                        <th>Email ID</th>
                                        <th>Mobile Number</th>
                                        <th>Attendance</th>
                                        <th>Address</th>
                                        <th class="text-end">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <div class="" name="attendance_all[]">
                                            @foreach ($student as $key => $list)
                                                <tr>
                                                    <td>{{ $list->user_id }}
                                                    </td>
                                                    <td>
                                                    <h2 class="table-avatar">
                                                        <a href="" class="avatar avatar-sm me-2"><img
                                                                class="avatar-img rounded-circle"
                                                                src="{{ url('/uploads/' . $list->image) }}"
                                                                alt="User Image"></a>
                                                        <a href="">{{ $list->name }}</a>
                                                    </h2>

                                                </td>
                                                <td>{{ $list->gender }}</td>
                                                <td>{{ $list->class_id }}</td>
                                                <td>{{ $list->email }}</td>
                                                <td>{{ $list->mobile }}</td>
                                                <td>{{ $list->address }}</td>
                                                    <td><a class="btn btn-primary" href="{{ route('student.details', $list->id) }}">Details</a>
                                                    </td>
                                                    <td class="text-end">
                                                    <div class="actions">
                                                        @if ($list->status == 'pending')
                                                            <a href="{{ route('admin.student.accept', $list->id) }}"
                                                                class="btn btn-sm bg-success-light me-2">
                                                                <i class="fas fa-check"></i>
                                                            </a>
                                                        @endif
                                                        <a href="{{ route('admin.student.edit', $list->id) }}"
                                                            class="btn btn-sm bg-success-light me-2">
                                                            <i class="fas fa-pen"></i>
                                                        </a>
                                                        <a href="{{ route('admin.student.delete', $list->id) }}"
                                                            class="btn btn-sm bg-danger-light">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                                </tr>
                                               
                                            @endforeach
                                        </div>

                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
