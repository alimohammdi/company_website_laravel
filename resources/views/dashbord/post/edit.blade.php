@extends('dashbord.layouts.master')
@section('content')
    <section class="create">
        <section class="row m-0 mt-4">
            <section class="col-8 offset-2 bg-dark text-white p-2">
                {!! Form::model($post,['route'=>['post.update','id'=>$post->id],'method'=>'put','files' => true]) !!}
                <section class="d-block">
                    {!! Form::label('title','title') !!}
                    {!! Form::text('title',null,['class'=>'form-control mt-2']) !!}
                    @error('title')
                    <p class="text-danger" > {{ $message  }}</p>
                    @enderror
                </section>
                <section class="d-block">
                    {!! Form::label('description','description') !!}
                    {!! Form::textarea('description',null,
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
                <section class="d-block m-3">
                    <img src="{{ asset('images/post/'.$post->image) }}" height="100px" width="100px" alt="">
                </section>
                <section class="d-block">
                    {!! Form::label('category','category') !!}
                    {!! Form::select('category',$allcategory,$categoryPost->category->id,['class'=>'form-control ']); !!}
                    @error('category')
                    <p class="text-danger" > {{ $message  }}</p>
                    @enderror
                </section>
               <section class="d-block">
                    {!! Form::submit('update',['class'=>'btn btn-info m-2 ']); !!}
                </section>
                {{ Form::close() }}
                <a href="{{ route('post.index') }}" class="btn btn-danger m-2"> back</a>
            </section>
        </section>
    </section>
@endsection
