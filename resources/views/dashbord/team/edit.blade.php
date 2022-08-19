@extends('dashbord.layouts.master')
@section('content')
    <section class="create">
        <section class="row m-0 mt-4">
            <section class="col-8 offset-2 bg-dark text-white p-2">
                {!! Form::model($team,['route'=>['team.update','id'=>$team->id],'method'=>'put','files' => true]) !!}
                <section class="d-block">
                    {!! Form::label('fullname','fullname') !!}
                    {!! Form::text('FullName',null,['class'=>'form-control mt-2']) !!}
                    @error('fullname')
                    <p class="text-danger" > {{ $message  }}</p>
                    @enderror
                </section>
                <section class="d-block">
                    {!! Form::label('captions','captions') !!}
                    {!! Form::textarea('captions',null,
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
                <section class="d-block m-3">
                    <img src="{{ asset('images/team/'.$team->image) }}" height="100px" width="100px" alt="">
                </section>
                <section class="d-block">
                    {!! Form::label('instagram','instagram') !!}
                    {!! Form::text('instagram',null,['class'=>'form-control mt-2']) !!}
                    @error('instagram')
                    <p class="text-danger" > {{ $message  }}</p>
                    @enderror
                </section>
                <section class="d-block">
                    {!! Form::label('twitter','twitter') !!}
                    {!! Form::text('twitter',null,['class'=>'form-control mt-2']) !!}
                    @error('twitter')
                    <p class="text-danger" > {{ $message  }}</p>
                    @enderror
                </section>
                <section class="d-block">
                    {!! Form::label('facebook','facebook') !!}
                    {!! Form::text('facebook',null,['class'=>'form-control mt-2']) !!}
                    @error('facebook')
                    <p class="text-danger" > {{ $message  }}</p>
                    @enderror
                </section>
                <section class="d-block">
                    {!! Form::submit('update',['class'=>'btn btn-info m-2 ']); !!}
                </section>
                {{ Form::close() }}
                <a href="{{ route('team.index') }}" class="btn btn-danger m-2"> back</a>
            </section>
        </section>
    </section>
@endsection
