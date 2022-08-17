@extends('dashbord.layouts.master')

@section('content')
    <section class="data">
        <section class="row">
            <section class="col-8 offset-2 mt-5 bg-dark text-white">
                <h2 class="text-center mb-2">Seo Form</h2>
                @if(session('insert-seo'))
                    <div class="alert alert-success p-3 ">
                        <h4 class="text-center text-success"> {{ session('insert-seo') }}</h4>
                    </div>
                @endif
                {!! Form::open(['route'=>'admin.store.seo','method'=>'post']) !!}
                <section class="d-block">
                    {!! Form::label('title','title',['class'=>'mt-3']) !!}
                    {!! Form::text('title',old('title'),['class'=>'form-control mt-2']) !!}
                    @error('title')
                    <p class="text-danger"> {{ $message  }}</p>
                    @enderror
                </section>
                <section class="d-block">
                    {!! Form::label('author','author',['class'=>'mt-2']) !!}
                    {!! Form::text('author',old('author'),['class'=>'form-control mt-2']) !!}
                    @error('author')
                    <p class="text-danger"> {{ $message  }}</p>
                    @enderror
                </section>
                <section class="d-block">
                    {!! Form::label('description','description',['class'=>'mt-2']) !!}
                    {!! Form::textarea('description',old('description'),['class'=>'form-control mt-2',
'style'=>'resize:none ; height:150px']) !!}
                    @error('description')
                    <p class="text-danger"> {{ $message  }}</p>
                    @enderror
                </section>
                <section class="d-block">
                    {!! Form::label('keywords','keywords',['class'=>'mt-2 mb-2']) !!}
                    {!! Form::textarea('keywords',old('keywords'),['class'=>'form-control mt-2',
'style'=>'resize:none ; height:120px']) !!}
                    @error('keywords')
                    <p class="text-danger"> {{ $message  }}</p>
                    @enderror
                </section>
                <section class="d-block ">
                    {!! Form::submit('ارسال',['class'=>'btn btn-success mt-2 mb-4']) !!}
                </section>
                <a href="{{ route('admin.show.seo') }}" class="btn btn-info"> show details </a>
                {!! Form::close()!!}
            </section>
        </section>
    </section>
@endsection
