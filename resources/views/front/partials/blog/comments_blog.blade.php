<div class="single-post-comments">
    <div class="comments-area">
        <div class="comments-heading">
            <h3>6 comments</h3>
        </div>
        <div class="comments-list">
            <ul>

               @forelse ($comments as $comment)
                    <li>
                        <div class="comments-details " style="box-shadow: 1px 3px 4px 0px lightgray;">
                            <div class="comments-list-img ">
                                <img src="{{ asset('images/img_comment/b02.jpg') }}" alt="post-author">                        </div>
                            <div class="comments-content-wrap">
                              <span>
                                {{ $comment->fullName }}
                                <span class="post-time">{{ $comment->created_at }}</span>
                              </span>
                                <p>{{ $comment->comment }}</p>
                            </div>
                        </div>
                    </li>
                   @empty
                    <li>
                        <div class="comments-details " style="box-shadow: 1px 3px 4px 0px lightgray;">
                              <span>
                                <span class="post-time">not any exist comment</span>
                              </span>
                        </div>
                    </li>

                @endforelse

            </ul>
        </div>
    </div>
    <div class="comment-respond">
        <h3 class="comment-reply-title">Leave a Reply </h3>
        <span class="email-notes">Your email address will not be published. Required fields are marked *</span>
        <form action="{{ route('send-comment') }}" method="post" id="comments">
            @csrf
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <p>Name *</p>
                    <input type="text" name="fullName"/>
                </div>
                <div class="col-lg-4 col-md-4" style="display: none">
                    <input type="hidden" name="post_id" value="{{ $single_post->id }}"/>
                </div>
                <div class="col-lg-4 col-md-4">
                    <p>Email *</p>
                    <input type="email"  name="email"/>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                    <p>comment</p>
                    <textarea id="message-box" cols="30" rows="10" name="comment"></textarea>
                    <input type="submit" value="Post Comment"  />
                </div>
            </div>
        </form>
    </div>
</div>
@section('js')
    <script src="{{ asset('front/assets/js/jquery.min.js') }}"></script>
    <script>
        $('form#comments').submit(function(event){
            event.preventDefault();
            let alldata = $(this).serialize();
            let url = $(this).attr('action')
            $.ajax({
                url: url,

                type: 'POST',
                dataType: 'json',
                data: alldata,
                success:function(response){
                    $('input[name=fullName]').val('')
                    $('input[name=email]').val('')
                    $('textarea[name=comment]').val('')
                    alert('sent comment successfully')
                }
            })
        })
    </script>
@endsection
