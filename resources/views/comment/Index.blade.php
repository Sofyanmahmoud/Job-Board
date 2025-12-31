<x-layout :title="$pageTitle">
<h1>comments exploring</h1>
@foreach ($comments as $comment )
    <h4>{{$comment->author}}</h4>
    <h2>{{$comment->content}}</h2>
   <a href="/blog/{{$comment->post_id}}">{{$comment->post->title}}</a>
@endforeach
</x-layout>
