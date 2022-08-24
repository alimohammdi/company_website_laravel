@extends('dashbord.layouts.master')
@section('content')
    <section class="create">
        <section class="row m-0 mt-4">
            <section class="col-8 offset-2 bg-dark text-white p-2">
                @if(session('create-info'))
                    <div class="alert alert-success m-2"> {{session('create-info') }} </div>
                @endif
                {!! Form::open(['route'=>'info.store','method'=>'post']) !!}
                <section class="d-block">
                    {!! Form::label('information','information') !!}
                    {!! Form::text('information',old('information'),['class'=>'form-control mt-2']) !!}
                </section>
                <section class="d-block">
                    {!! Form::label('phone_number','phone_number') !!}
                    {!! Form::text('phone_number',old('phone_number'),['class'=>'form-control mt-2']) !!}
                </section>
                <section class="d-block">
                    {!! Form::label('email','email') !!}
                    {!! Form::text('email',old('email'),['class'=>'form-control mt-2']) !!}
                </section>
                <section class="d-block">
                    {!! Form::label('work','work') !!}
                    {!! Form::select('work',['8-16'=>'8-16','9-16'=>'9-16','8-14'=>'8-14'],['time1'=>'8-16'],['class'=>'form-control mt-2']) !!}
                </section>
                <section class="d-block">
                    {!! Form::submit('create',['class'=>'btn btn-success m-2 ']); !!}
                </section>
                {{ Form::close() }}
                <a href="{{ route('info.index') }}" class="btn btn-info m-2"> show information</a>
            </section>
        </section>
    </section>
@endsection
