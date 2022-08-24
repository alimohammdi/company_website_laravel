@extends('dashbord.layouts.master')

@section('content')
    <section class="data">
        <section class="row m-0 mt-3">
            <section class="col-10 offset-1 text-white bg-dark">
                @if(session('delete-comment'))
                    <div class="alert alert-danger m-2"> {{session('delete-comment') }} </div>
                @endif
                <table class="table table-hover table-dark" >
                    <tr>
                        <td>Full Name</td>
                        <td>Email</td>
                        <td>Comments</td>
                        <td>Show</td>
                        <td>Delete</td>
                    </tr>

                    @forelse($comment as $item)
                        <tr>
                            <td>{{ $item->fullName}}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ Illuminate\Support\Str::limit( $item->comment , 50) }}</td>
                            <td>
                                {!! Form::open(['route'=>['comment.show','id'=>$item->id],'method'=>'get']) !!}
                                {!! Form::submit('show',['class'=>'btn btn-warning']); !!}
                                {!! Form::close() !!}
                            </td>
                            <td>
                                {!! Form::open(['route'=>['comment.destroy','id'=>$item->id],'method'=>'delete']) !!}
                                {!! Form::submit('delete',['class'=>'btn btn-danger']); !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="colspan8 text-danger ">There is no comment</td>
                        </tr>
                    @endforelse
                </table>
                {{ $comment->links() }}
            </section>
        </section>
    </section>
@endsection
