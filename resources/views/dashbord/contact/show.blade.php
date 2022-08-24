@extends('dashbord.layouts.master')

@section('content')
    <section class="data">
        <section class="row m-0 mt-3">
            <section class="col-11 offset-1 text-white bg-dark">
                <table class="table  table-dark border-light" >
                    <tr>
                        <td>Subject :  </td>
                        <td>{{ $contact->subject}}</td>
                    </tr>
                    <tr>
                        <td>comment :</td>
                        <td>{{ $contact->comment}}</td>
                    </tr>
                    <tr>
                        <td>fullName :</td>
                        <td>{{ $contact->fullName}}</td>
                    </tr>
                    <tr>
                        <td>email :</td>
                        <td>{{ $contact->email}}</td>
                    </tr>
                </table>
                {!! Form::open(['route'=>['contact.destroy','id'=>$contact->id],'method'=>'delete']) !!}
                {!! Form::submit('delete',['class'=>'btn btn-danger mt-4 mb-2 w-100']); !!}
                {!! Form::close() !!}

            </section>
        </section>
    </section>
@endsection
