@extends('website.master')
@section('content')
<div class="hero-arera course-item-height" data-background="{{url('assets/img/slider/course-slider.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hero-course-1-text">
                    <h2>Upload Exam Question</h2>
                </div>

            </div>
        </div>
    </div>
</div>
    <div class=" col-12 col-sm-6 container mt-5 mb-5">
        <form action="{{ route('question.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1>Upload Question</h1>
            <select name="class" class="form-control" id="exampleFormControlSelect1">
                @foreach ($class as $data)
                    <option value="{{ $data->id }}">{{ $data->addclass }}</option>
                @endforeach
            </select>
            <input class=" mt-5" type="file" name="question">
            <input class="btn btn-primary mt-5" type="submit">
        </form>
    </div>
    <div class="container mb-5">
        <a href="{{ route('question.view') }}" class="btn btn-primary">view</a>
    </div>
@endsection
