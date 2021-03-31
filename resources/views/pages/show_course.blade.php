@extends('layouts.new_app')

@section('content')
    <a href="/student" class="">Go back</a>
    <h1>{{$course->name}}</h1>
    <br><br>
    <div class="course-description">
        {!!$course->description!!}
    </div>
    <small>{{$course->created_at}}</small>

    {{-- @if(!Auth::guest())
        @if(Auth::user()->id== $course->user_id)
            {!!Form::open(['action'=>['App\Http\Controllers\CourseController@enroll',$course->id],'method'=>'POST', 'class'=>"enroll-form"])!!}
                {{Form::submit('Enroll',['class'=>'btn btn-enroll'])}}
            {!!Form::close()!!}
        @endif
    @endif --}}

@endsection