@section('content')
    <h1>Posts</h1>
    @if(count($posts)>1)
        @foreach ($posts as $post)
            <div class="card p-3 mt-3 mb-3">
                <h3>{{$post->title}}</h3>
                <small>Written on {{$post->created_at}}</small>
            </div>
        @endforeach
    @else
        <p>No posts found</p>
    @endif

@endsection