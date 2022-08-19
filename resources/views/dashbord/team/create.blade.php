@extends('dashbord.layouts.master')
@section('content')
    <section class="create">
        <section class="row m-0 mt-4">
            <section class="col-8 offset-2 bg-dark text-white p-2">
                @if(session('create-team'))
                    <div class="alert alert-success m-2"> {{session('create-team') }} </div>
                @endif
                {!! Form::open(['route'=>'team.store','method'=>'post','files' => true]) !!}
                <section class="d-block">
                    {!! Form::label('fullname','fullname') !!}
                    {!! Form::text('fullname',old('fullname'),['class'=>'form-control mt-2']) !!}
                    @error('fullname')
                    <p class="text-danger" > {{ $message  }}</p>
                    @enderror
                </section>
                <section class="d-block">
                    {!! Form::label('captions','captions') !!}
                    {!! Form::textarea('captions',old('captions'),
['class'=>'form-control mt-2','style'=>'resize:none;height:120px']) !!}
                    @error('captions')
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
                        {!! Form::label('instagram','instagram') !!}
                        {!! Form::text('instagram',old('instagram'),['class'=>'form-control mt-2']) !!}
                        @error('instagram')
                        <p class="text-danger" > {{ $message  }}</p>
                        @enderror
                </section>
                <section class="d-block">
                    {!! Form::label('facebook','facebook') !!}
                    {!! Form::text('facebook',old('facebook'),['class'=>'form-control mt-2']) !!}
                    @error('facebook')
                    <p class="text-danger" > {{ $message  }}</p>
                    @enderror
                </section>
                <section class="d-block">
                    {!! Form::label('twitter','twitter') !!}
                    {!! Form::text('twitter',old('twitter'),['class'=>'form-control mt-2']) !!}
                    @error('twitter')
                    <p class="text-danger" > {{ $message  }}</p>
                    @enderror
                </section>
                <section class="d-block">
                    {!! Form::submit('create',['class'=>'btn btn-success m-2 ']); !!}
                </section>
                {{ Form::close() }}
                <a href="{{ route('team.index') }}" class="btn btn-info m-2"> show team</a>
            </section>
        </section>
    </section>
@endsection
