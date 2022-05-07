@extends('website.master')
@section('content')
<div class="hero-arera course-item-height" data-background="{{url('assets/img/slider/course-slider.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hero-course-1-text">
                    <h2>Exam Question</h2>
                </div>

            </div>
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
                                    <th>Class</th>
                                    <th>view Question</th>
                                    <th>Download Question</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $data)
                                <tr>
                                    <td>{{ $data->class }}</td>
                                    {{-- <td>{{ $file->question }}</td> --}}
                                    <td><a class="btn btn-primary" href="{{ route('question.file.view', $data->id) }}">view</a></td>
                                    <td><a class="btn btn-primary" href="{{ route('question.download', $data->question) }}">Download</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection