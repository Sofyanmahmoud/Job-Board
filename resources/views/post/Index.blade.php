<x-layout :title="$pageTitle">
<h1>welcome to my blog page</h1>
@foreach ($posts as $post )
    <h2>{{$post->title}}</h2>
    <h4>{{$post->body}}</h4>
@endforeach
</x-layout>
