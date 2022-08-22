@extends('dashbord.layouts.master')

@section('content')
    <section class="data">
        <section class="row m-0 mt-3">
            <section class="col-10 offset-1 text-white bg-dark">
                @if(session('delete-category'))
                    <div class="alert alert-danger m-2"> {{session('delete-category') }} </div>
                @endif
                @if(session('update-category'))
                    <div class="alert alert-success m-2"> {{session('update-category') }} </div>
                @endif
                <table class="table table-hover table-dark" >
                    <tr>
                        <td>title</td>
                        <td>description</td>
                        <td>image</td>
                        <td>update</td>
                        <td>delete</td>
                    </tr>

                    @forelse($category as $item)
                        <tr>
                            <td>{{ $item->title }}</td>
                            <td>{{ Illuminate\Support\Str::limit( $item->description , 50) }}</td>
                            <td><img src="{{ asset('images/category/'.$item->image) }}" alt=""
                                     height='80px' width='80px' ></td>
                            <td>{!! Form::open(['route'=>['category.edit','id'=>$item->id],'method'=>'get']) !!}
                                {!! Form::submit('edit',['class'=>'btn btn-warning']); !!}
                                {!! Form::close() !!}</td>
                            <td>
                                {!! Form::open(['route'=>['category.destroy','id'=>$item->id],'method'=>'delete']) !!}
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
                {{ $category->links() }}
                <a href="{{ route('category.create') }}" class="btn btn-info mb-2">create category</a>
            </section>
        </section>
    </section>
@endsection
