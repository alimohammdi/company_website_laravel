@extends('dashbord.layouts.master')

@section('content')
    <section class="data">
        <section class="row m-0 mt-3">
            <section class="col-10 offset-1 text-white">
                @if(session('delete-slider'))
                    <div class="alert alert-danger m-2"> {{session('delete-slider') }} </div>
                @endif
                    @if(session('update-slider'))
                        <div class="alert alert-success m-2"> {{session('update-slider') }} </div>
                    @endif
                <table class="table table-hover table-dark" >
                    <tr>
                        <td>title</td>
                        <td>description</td>
                        <td>image</td>
                        <td>update</td>
                        <td>delete</td>
                    </tr>

                    @forelse($slider as $item)
                        <tr>
                            <td>{{ $item->title }}</td>
                            <td>{{ Illuminate\Support\Str::limit( $item->description , 50) }}</td>
                            <td><img src="{{ asset('images/slider/'.$item->image) }}" alt=""
                               height='80px' width='80px' ></td>
                            <td>{!! Form::open(['route'=>['slider.edit','id'=>$item->id],'method'=>'get']) !!}
                                {!! Form::submit('edit',['class'=>'btn btn-warning']); !!}
                                {!! Form::close() !!}</td>
                            <td>
                                {!! Form::open(['route'=>['slider.destroy','id'=>$item->id],'method'=>'delete']) !!}
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
                {{ $slider->links() }}
                <a href="{{ route('slider.create') }}" class="btn btn-info mb-2">create slider</a>
            </section>
           </section>
    </section>
@endsection
