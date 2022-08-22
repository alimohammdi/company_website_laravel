<div class="col-lg-4 col-md-4">
    <div class="page-head-blog">
        <div class="single-blog-page">
            <!-- search option start -->
            <form action="#">
                <div class="search-option">
                    <input type="text" placeholder="Search...">
                    <button class="button" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
            <!-- search option end -->
        </div>
        <div class="single-blog-page">
            <!-- recent start -->
            <div class="left-blog">
                <h4>recent post</h4>
                <div class="recent-post">
                    @foreach($recent_post as $p_item)
                        <!-- start single post -->
                            <div class="recent-single-post">
                                <div class="post-img">
                                    <a href="{{ route('single.post',['id'=>$p_item->id]) }}">
                                        <img src="{{ asset('images/post/'.$p_item->image) }}" alt="{{ $p_item->title }}">
                                    </a>
                                </div>
                                <div class="pst-content">
                                    <p><a href="{{ route('single.post',['id'=>$p_item->id]) }}">{{ $p_item->title }}</a></p>
                                </div>
                            </div>
                            <!-- End single post -->
                    @endforeach


                </div>
            </div>
            <!-- recent end -->
        </div>
        <div class="single-blog-page">
            <div class="left-blog">
                <h4>categories</h4>
                <ul>
                    @foreach($allcategory as $c_item)
                        <li>
                            <a href="{{ route('blog.category',['id'=>$c_item->id]) }}">{{ $c_item->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
