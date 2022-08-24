@extends('dashbord.layouts.master')

@section('content')
    <section class="data">
        <section class="row m-0 mt-3">
            <section class="col-11 offset-1 text-white bg-dark">
                <table class="table  table-dark border-light" >
                    <tr>
                        <td>comment :</td>
                        <td>{{ $comments->comment}}</td>
                    </tr>
                    <tr>
                        <td>fullName :</td>
                        <td>{{ $comments->fullName}}</td>
                    </tr>
                    <tr>
                        <td>email :</td>
                        <td>{{ $comments->email}}</td>
                    </tr>
                    <tr>
                        <td>post :</td>
                        <td>{{ $comments->post->title}}</td>
                    </tr>
                </table>
                {!! Form::open(['route'=>['comment.destroy','id'=>$comments->id],'method'=>'delete']) !!}
                {!! Form::submit('delete',['class'=>'btn btn-danger mt-4 mb-2 w-100']); !!}
                {!! Form::close() !!}

            </section>
        </section>
    </section>
@endsection
