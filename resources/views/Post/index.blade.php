<ul>
    @foreach($posts as $post)
    <li><a href="{{route('posts.edit',$post)}}">
        {{$post->title}}
        <img width="60" src="{{asset('storage/'.$post->image)}}"alt="">
    </li>
    </a>
    @endforeach
</ul>

<a href="{{ route('posts.create') }}">Add post</a>