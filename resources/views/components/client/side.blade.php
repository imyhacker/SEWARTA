<div class="col-lg-4">
    <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
        <div class="sidebar-widget latest-post mb-3">
            <h5>Popular Posts</h5>

            @foreach($ps as $post)
            <div class="py-2">
                <span class="text-sm text-muted">{{$post->created_at->format("l, m d")}}</span>
                <h6 class="my-2"><a href="{{route('baca', $post->id)}}">{{$post->judul}}</a></h6>
            </div>
            @endforeach

        </div>

        <div class="sidebar-widget tags mb-3">
            <h5 class="mb-4">Tags</h5>
            @foreach($tag as $tg)

            <a href="#">{{$tg->tag}}</a>
            @endforeach
        </div>

    </div>
</div>
