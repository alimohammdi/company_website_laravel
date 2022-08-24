<div id="blog" class="blog-area">
    <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Latest News</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Start Left Blog -->
                @foreach ($category as $item)
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-blog">
                            <div class="single-blog-img">
                                <a href="blog.html">
                                    <img src="{{ asset('images/category/'.$item->image)}}" alt="">
                                </a>
                            </div>
                            <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">13 comments</a>
                  </span>
                                <span class="date-type">
                    <i class="fa fa-calendar"></i>{{ $item->created_at }}
                  </span>
                            </div>
                            <div class="blog-text">
                                <h4>
                                    <a href="blog.html">{{ $item->title }}</a>
                                </h4>
                                <p>
                                {{ $item->description }}
                                </p>
                            </div>
                            <span>
                  <a href="{{ route('blog.category',['id'=>$item->id]) }}" class="ready-btn">Read more</a>
                </span>
                        </div>
                        <!-- Start single blog -->
                    </div>
                @endforeach
                <!-- End Left Blog-->

            </div>
        </div>
    </div>
</div>
