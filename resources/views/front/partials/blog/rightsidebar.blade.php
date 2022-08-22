
        @forelse($allpost as $p_item)
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="single-blog">
                    <div class="single-blog-img">
                        <a href="blog-details.html">
                            <img src="{{ asset('images/post/'.$p_item->image) }}" alt="{{ $p_item->title }}">
                        </a>
                    </div>
                    <div class="blog-meta">
                    <span class="comments-type">
                      <i class="bi bi-chat"></i>
                      <a href="#">11 comments</a>
                    </span>
                        <span class="date-type">
                      <i class="bi bi-calendar"></i>{{ $p_item->created_at }}
                    </span>
                    </div>
                    <div class="blog-text">
                        <h4>
                            <a href="#">{{  $p_item->title }}</a>
                        </h4>
                        <p>
                         {{ $p_item->description }}
                          </p>
                    </div>
                    <span>
                    <a href="{{ route('single.post',['id'=>$p_item->id]) }}" class="ready-btn">Read more</a>
                  </span>
                </div>
            </div>
        @empty
        @endforelse
        <!-- End single blog -->
        <div class="blog-pagination">
            <ul class="pagination">
                {{ $allpost->links() }}
            </ul>
        </div>

