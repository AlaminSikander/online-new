@extends('website.master')
@section('content')
    <form action="{{ route('student.attendance.store') }}" method='POST' enctype="multipart/form-data">
        @csrf
        <div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label>Date</label>
                    <input required name="dateAdd" type="date" class="form-control">
                </div>
            </div>
        </div>
        <div class="content container-fluid pt-30 pb-30">
        <div id="divToPrint" class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-center mb-0 datatable">

                                    <thead>
                                        <tr>

                                            <th>student ID</th>
                                            <th>student Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <div class="" name="attendance_all[]">
                                            @foreach ($class as $key => $data)
                                                {{-- @dd($data) --}}
                                                <tr>

                                                    <td><input class="border-0" name="Sid[]" value="{{ $data->id }}">
                                                    </td>
                                                    <td><input class="border-0" name="Sname[]" value="{{ $data->name }}">
                                                    </td>
                                                    <td>
                                                        <div class="">
                                                            <div class="form-group">
                                                                <label></label>
                                                                <select required name="attendance[]"
                                                                    class="form-control select my-2">
                                                                    <option value='Present'>1</option>
                                                                    <option value='Absent'>0</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><input type="hidden" name="class_id[]"
                                                            value="{{ $data->class_id }}">
                                                    </td>


                                                </tr>
                                            @endforeach
                                        </div>

                                    </tbody>

                                </table>
                                <div class="input-group justify-content-center">
                                    <button type="submit" class=" mt-5 btn btn-primary"> Submit</button>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
