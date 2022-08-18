@extends('dashbord.layouts.master')
@section('content')
    <section class="create">
        <section class="row m-0 mt-4">
            <section class="col-8 offset-2 bg-dark text-white p-2">
                @if(session('create-slider'))
                    <div class="alert alert-success m-2"> {{session('create-slider') }} </div>
                @endif
                {!! Form::open(['route'=>'slider.store','method'=>'post','files' => true]) !!}
                <section class="d-block">
                    {!! Form::label('title','title') !!}
                    {!! Form::text('title',old('title'),['class'=>'form-control mt-2']) !!}
                    @error('title')
                       <p class="text-danger" > {{ $message  }}</p>
                    @enderror
                </section>
                <section class="d-block">
                    {!! Form::label('description','description') !!}
                    {!! Form::textarea('description',old('description'),
['class'=>'form-control mt-2','style'=>'resize:none;height:120px']) !!}
                    @error('description')
                    <p class="text-danger" > {{ $message  }}</p>
                    @enderror
                </section>
                <section class="d-block">
                    {!! Form::label('image','image') !!}
                    {!! Form::file('image',
['class'=>'form-control mt-2']) !!}
                    @error('image')
                    <p class="text-danger" > {{ $message  }}</p>
                    @enderror
                </section>
                <section class="d-block">
                    {!! Form::submit('create',['class'=>'btn btn-success m-2 ']); !!}
                </section>
                {{ Form::close() }}
                    <a href="{{ route('slider.index') }}" class="btn btn-info m-2"> show slider</a>
            </section>
        </section>
    </section>
@endsection
