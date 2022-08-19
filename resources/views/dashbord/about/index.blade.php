@extends('dashbord.layouts.master')

@section('content')
    <section class="data">
        <section class="row m-0 mt-3">
            <section class="col-10 offset-1 text-white bg-dark">
                @if(session('delete-about'))
                    <div class="alert alert-danger m-2"> {{session('delete-about') }} </div>
                @endif
                <table class="table table-hover table-dark" >
                    <tr>
                        <td>title</td>
                        <td>description</td>
                        <td>image</td>
                        <td>delete</td>
                    </tr>

                    @forelse($about as $item)
                        <tr>
                            <td>{{ $item->title }}</td>
                            <td>{{ Illuminate\Support\Str::limit( $item->description , 50) }}</td>
                            <td><img src="{{ asset('images/about/'.$item->image) }}" alt=""
                                     height='80px' width='80px' ></td>

                            <td>
                                {!! Form::open(['route'=>['about.destroy','id'=>$item->id],'method'=>'delete']) !!}
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
                {{ $about->links() }}
                <a href="{{ route('about.create') }}" class="btn btn-info mb-2">create about</a>
            </section>
        </section>
    </section>
@endsection
