<!-- single-blog start -->
            <article class="blog-post-wrapper">
                <div class="post-thumbnail">
                    <img src="{{ asset('images/post/'.$single_post->image) }}" alt="{{ $single_post->title }}" />
                </div>
                <div class="post-information">
                    <h2>Blog image post layout</h2>
                    <div class="entry-meta">
                        <span class="author-meta"><i class="bi bi-person"></i> <a href="#">admin</a></span>
                        <span><i class="bi bi-clock"></i> {{ $single_post->created_at }}</span>
                        <span class="tag-meta">
                        <i class="bi bi-folder"></i>
                        <a href="#">painting</a>,
                        <a href="#">work</a>
                      </span>
                        <span>
                        <i class="bi bi-tags"></i>
                        <a href="#">tools</a>,
                        <a href="#"> Humer</a>,
                        <a href="#">House</a>
                      </span>
{{--                        <span><i class="bi bi-chat"></i> <a href="#">6 comments</a></span>--}}
                    </div>
                    <div class="entry-content">
                        <p>
                            {{ $single_post->description }}
                        </p>
                    </div>
                </div>
            </article>
            <div class="clear"></div>
            @include('front.partials.blog.comments_blog',['single_post',$single_post,'comments'=>$comments]);
            <!-- single-blog end -->
