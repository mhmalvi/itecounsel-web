<div class="col-md-3" style="padding: 15px 15px;">
    <article class="entry">
        <div class="feature-post">
            <a href="{{route('blogDetail', $blog->blog_slug)}}"><img src="{{asset('public/storage/blogs/'.$blog->thumbnail)}}" alt="image"></a>
        </div>
        <p class="entry-title" style="text-align: justify;">
            <a href="{{route('blogDetail', $blog->blog_slug)}}">{{mb_strimwidth($blog->blog_title, 0, 50, '...')}}</a>
        </p>
    </article>
</div>