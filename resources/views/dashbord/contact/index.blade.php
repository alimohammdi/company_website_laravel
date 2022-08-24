@extends('dashbord.layouts.master')

@section('content')
    <section class="data">
        <section class="row m-0 mt-3">
            <section class="col-10 offset-1 text-white bg-dark">
                @if(session('delete-contact'))
                    <div class="alert alert-danger m-2"> {{session('delete-contact') }} </div>
                @endif
                <table class="table table-hover table-dark" >
                    <tr>
                        <td>Subject</td>
                        <td>Comments</td>
                        <td>Full Name</td>
                        <td>Email</td>
                        <td>Show</td>
                        <td>Delete</td>
                    </tr>

                    @forelse($contact as $item)
                        <tr>
                            <td>{{ $item->subject}}</td>
                            <td>{{ Illuminate\Support\Str::limit( $item->comment , 50) }}</td>
                            <td>{{ $item->fullName}}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                {!! Form::open(['route'=>['contact.show','id'=>$item->id],'method'=>'get']) !!}
                                {!! Form::submit('show',['class'=>'btn btn-warning']); !!}
                                {!! Form::close() !!}
                            </td>
                            <td>
                                {!! Form::open(['route'=>['contact.destroy','id'=>$item->id],'method'=>'delete']) !!}
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
                {{ $contact->links() }}
            </section>
        </section>
    </section>
@endsection
