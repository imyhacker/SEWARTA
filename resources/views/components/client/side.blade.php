<div class="col-lg-4">
    <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
        <div class="sidebar-widget latest-post mb-3">
            <h5>Popular Posts</h5>

            @foreach($ps as $post)
            <div class="py-2">
                <span class="text-sm text-muted"><i class="icofont-history"></i> {{$post->created_at->format("l, d M Y H:i:s")}}</span>

                <h6 class="my-2"><a href="{{route('baca', $post->id)}}">{{$post->judul}}</a> - <span class="text-sm text-muted"><i class="icofont-tag"></i> {{$post->tag}}</span>
                </h6>
                <p>{{$post->sub}}</p>
            </div>
            @endforeach

        </div>

        <div class="sidebar-widget tags mb-3">
            <h5 class="mb-4">Tag</h5>
            @foreach($tag as $tg)

            <a href="#">{{$tg->tag}}</a>
            @endforeach
        </div>

        <div class="sidebar-widget tags mb-3">
            <h5 class="mb-4">Kategori</h5>
            @foreach($kategori as $kt)

            <a href="{{route('kate', $kt->kategori)}}">{{$kt->kategori}}</a>
            @endforeach
        </div>

    </div>
</div>
