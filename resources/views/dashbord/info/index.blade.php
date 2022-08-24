@extends('dashbord.layouts.master')

@section('content')
    <section class="data">
        <section class="row m-0 mt-3">
            <section class="col-10 offset-1 text-white bg-dark">
                @if(session('delete-info'))
                    <div class="alert alert-danger m-2"> {{session('delete-info') }} </div>
                @endif
                <table class="table table-hover table-dark" >
                    <tr>
                        <td>information</td>
                        <td>phone number</td>
                        <td>email</td>
                        <td>work</td>
                        <td>delete</td>
                    </tr>

                    @forelse($info as $item)
                        <tr>
                            <td>{{ Illuminate\Support\Str::limit( $item->info , 50) }}</td>
                            <td>{{ $item->phone}}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->work }}</td>
                            <td>
                                {!! Form::open(['route'=>['info.destroy','id'=>$item->id],'method'=>'delete']) !!}
                                {!! Form::submit('delete',['class'=>'btn btn-danger']); !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="colspan8 text-danger ">There is no information</td>
                        </tr>
                    @endforelse
                </table>
                {{ $info->links() }}
                <a href="{{ route('info.create') }}" class="btn btn-info mb-2">add information</a>
            </section>
        </section>
    </section>
@endsection
