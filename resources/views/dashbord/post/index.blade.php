@extends('dashbord.layouts.master')

@section('content')
    <section class="data">
        <section class="row m-0 mt-3">
            <section class="col-10 offset-1 text-white bg-dark">
                @if(session('delete-post'))
                    <div class="alert alert-danger m-2"> {{session('delete-post') }} </div>
                @endif
                @if(session('update-post'))
                    <div class="alert alert-success m-2"> {{session('update-post') }} </div>
                @endif
                <table class="table table-hover table-dark" >
                    <tr>
                        <td>title</td>
                        <td>description</td>
                        <td>image</td>
                        <td>category</td>
                        <td>update</td>
                        <td>delete</td>
                    </tr>

                    @forelse($post as $item)
                        <tr>
                            <td>{{ $item->title }}</td>
                            <td>{{ Illuminate\Support\Str::limit( $item->description , 50) }}</td>
                            <td><img src="{{ asset('images/post/'.$item->image) }}" alt=""
                                     height='80px' width='80px' ></td>
                            <td>{{ $item->category->title }}</td>
                            <td>{!! Form::open(['route'=>['post.edit','id'=>$item->id],'method'=>'get']) !!}
                                {!! Form::submit('edit',['class'=>'btn btn-warning']); !!}
                                {!! Form::close() !!}</td>
                            <td>
                                {!! Form::open(['route'=>['post.destroy','id'=>$item->id],'method'=>'delete']) !!}
                                {!! Form::submit('delete',['class'=>'btn btn-danger']); !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="colspan8 text-danger ">There is no data</td>
                        </tr>
                    @endforelse
                </table>
                {{ $post->links() }}
                <a href="{{ route('post.create') }}" class="btn btn-info mb-2">create post</a>
            </section>
        </section>
    </section>
@endsection
