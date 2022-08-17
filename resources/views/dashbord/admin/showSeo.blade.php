
@extends('dashbord.layouts.master')
@section('content')

    <section class="data">
        <section class="row">
            <section class="col-10 offset-1 mt-5 bg-dark text-white">
                <h2 class="text-center mb-2">Seo Items</h2>
                @if(session('delete-seo'))
                    <div class="alert alert-danger mt-2 p-2">
                        <h4 class="text-center text-danger">{{ session('delete-seo') }}</h4>
                    </div>
                @endif
                <table class="table table-dark table-hover">
                    <tr>
                        <td>title</td>
                        <td>author</td>
                        <td>description</td>
                        <td>keywords</td>
                        <td>delete</td>
                    </tr>
                    @foreach($seo as $details)
                        <tr>
                            <td>{{ $details->title }}</td>
                            <td>{{ $details->author }}</td>
                            <td>{{ Illuminate\Support\Str::limit($details->description,50) }}</td>
                            <td>{{ Illuminate\Support\Str::limit($details->keywords,50) }}</td>
                            <td>
                                {!! Form::open(['route'=>['admin.delete.seo','id'=>$details->id],'method'=>'delete']) !!}
                                {!! Form::submit('delete',['class'=>'btn btn-danger']) !!}
                                {!! Form::close()!!}
                            </td>
                        </tr>
                    @endforeach()
                </table>
            </section>
        </section>
    </section>
@endsection
