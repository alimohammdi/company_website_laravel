@extends('dashbord.layouts.master')
@section('content')
    <section class="create">
        <section class="row m-0 mt-4">
            <section class="col-8 offset-2 bg-dark text-white p-2">
                @if(session('create-social'))
                    <div class="alert alert-success m-2"> {{session('create-social') }} </div>
                @endif
                {!! Form::open(['route'=>'social.store','method'=>'post']) !!}
                <section class="d-block">
                    {!! Form::label('description','description') !!}
                    {!! Form::text('description',old('description'),['class'=>'form-control mt-2']) !!}
                </section>
                <section class="d-block">
                    {!! Form::label('facebook','facebook') !!}
                    {!! Form::text('facebook',old('facebook'),['class'=>'form-control mt-2']) !!}
                </section>
                <section class="d-block">
                    {!! Form::label('twitter','twitter') !!}
                    {!! Form::text('twitter',old('twitter'),['class'=>'form-control mt-2']) !!}
                </section>
                <section class="d-block">
                    {!! Form::label('instagram','instagram') !!}
                    {!! Form::text('instagram',old('instagram'),['class'=>'form-control mt-2']) !!}
                </section>
                <section class="d-block">
                    {!! Form::label('linkedin','linkedin') !!}
                    {!! Form::text('linkedin',old('linkedin'),['class'=>'form-control mt-2']) !!}
                </section>

                <section class="d-block">
                    {!! Form::submit('create',['class'=>'btn btn-success m-2 ']); !!}
                </section>
                {{ Form::close() }}
                <a href="{{ route('social.index') }}" class="btn btn-info m-2"> show social</a>
            </section>
        </section>
    </section>
@endsection
