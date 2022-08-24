<div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Contact us</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Start Google Map -->
                <div class="col-md-6">
                    <!-- Start Map -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <!-- End Map -->
                </div>
                <!-- End Google Map -->

                <!-- Start  contact -->
                <div class="col-md-6">
                    <div class="form contact-form">
                        {{ Form::open(['route'=>'send-contact','method'=>'post','id'=>'contact']) }}
                        <section class="d-block">
                            {!! Form::label('fullName','fullName') !!}
                            {!! Form::text('fullName',old('fullName'),['class'=>'form-control mb-2']); !!}
                        </section>
                        <section class="d-block">
                            {!! Form::label('email','email') !!}
                            {!! Form::email('email',old('email'),['class'=>'form-control mb-2']); !!}
                        </section>
                        <section class="d-block">
                            {!! Form::label('subject','subject') !!}
                            {!! Form::text('subject',old('subject'),['class'=>'form-control mb-2']); !!}
                        </section>
                        <section class="d-block">
                            {!! Form::label('comment','comment') !!}
                            {!! Form::textarea('comment',old('comment'),['class'=>'form-control mb-2','style'=>'resize:none;height:100px']); !!}
                        </section>
                        <section class="d-block">
                            {!! Form::submit('Send Request',['class'=>'btn btn-outline-secondary w-100']); !!}
                        </section>
                        {!! Form::close(); !!}
                    </div>
                </div>
                <!-- End Left contact -->
            </div>
        </div>
    </div>
</div>
@section('js')
    <script src="{{asset('front/assets/js/jquery.min.js')}}"></script>
    <script>
        $('form#contact').submit(function(event){
            event.preventDefault();
            let alldata = $(this).serialize();
            let url = $(this).attr('action');
            $.ajax({
                url: url,
                type: 'POST',
                dataType: 'json',
                data: alldata,
                success:function(response){
                    $('input[name=fullName]').val('')
                    $('input[name=email]').val('')
                    $('input[name=subject]').val('')
                    $('textarea[name=comment]').val('')
                    alert('sent request successfully')
                }
            })
        })

    </script>
@endsection

