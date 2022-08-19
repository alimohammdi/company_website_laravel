@extends('dashbord.layouts.master')

@section('content')
    <section class="data">
        <section class="row m-0 mt-3">
            <section class="col-10 offset-1 text-white bg-dark">
                @if(session('delete-team'))
                    <div class="alert alert-danger m-2"> {{session('delete-team') }} </div>
                @endif
                @if(session('update-team'))
                    <div class="alert alert-success m-2"> {{session('update-team') }} </div>
                @endif
                <table class="table table-hover table-dark" >
                    <tr>
                        <td>Full Name</td>
                        <td>Captions</td>
                        <td>Image</td>
                        <td>Instagram</td>
                        <td>Twitter</td>
                        <td>Facebook</td>
                        <td>edit</td>
                        <td>delete</td>
                    </tr>

                    @forelse($team as $item)
                        <tr>
                            <td>{{ $item->FullName }}</td>
                            <td>{{ Illuminate\Support\Str::limit( $item->captions , 50) }}</td>
                            <td><img src="{{ asset('images/team/'.$item->image) }}" alt=""
                                     height='80px' width='80px' ></td>
                            <td>{{ $item->instagram }}</td>
                            <td>{{ $item->twitter }}</td>
                            <td>{{ $item->facebook }}</td>
                            <td>{!! Form::open(['route'=>['team.edit','id'=>$item->id],'method'=>'get']) !!}
                                {!! Form::submit('edit',['class'=>'btn btn-warning']); !!}
                                {!! Form::close() !!}</td>
                            <td>
                                {!! Form::open(['route'=>['team.destroy','id'=>$item->id],'method'=>'delete']) !!}
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
                {{ $team->links() }}
                <a href="{{ route('team.create') }}" class="btn btn-info mb-2">create team</a>
            </section>
        </section>
    </section>
@endsection
