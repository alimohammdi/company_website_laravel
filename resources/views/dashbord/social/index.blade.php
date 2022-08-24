@extends('dashbord.layouts.master')

@section('content')
    <section class="data">
        <section class="row m-0 mt-3">
            <section class="col-10 offset-1 text-white bg-dark">
                @if(session('delete-social'))
                    <div class="alert alert-danger m-2"> {{session('delete-social') }} </div>
                @endif
                <table class="table table-hover table-dark" >
                    <tr>
                        <td>description</td>
                        <td>facebook</td>
                        <td>twitter</td>
                        <td>instagram</td>
                        <td>linkedin</td>
                        <td>delete</td>
                    </tr>

                    @forelse($social as $item)
                        <tr>
                            <td>{{ Illuminate\Support\Str::limit( $item->description , 50) }}</td>
                            <td>{{ $item->facebook}}</td>
                            <td>{{ $item->twitter }}</td>
                            <td>{{ $item->instagram }}</td>
                            <td>{{ $item->linkedin }}</td>
                            <td>
                                {!! Form::open(['route'=>['social.destroy','id'=>$item->id],'method'=>'delete']) !!}
                                {!! Form::submit('delete',['class'=>'btn btn-danger']); !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="colspan8 text-danger ">There is no social items</td>
                        </tr>
                    @endforelse
                </table>
                {{ $social->links() }}
                <a href="{{ route('social.create') }}" class="btn btn-info mb-2">add social</a>
            </section>
        </section>
    </section>
@endsection
