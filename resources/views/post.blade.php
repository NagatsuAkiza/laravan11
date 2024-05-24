<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>

    <article class="max-w-screen-md py-8">
        <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">{{$post['title']}}</h2>
        <div class="text-base text-gray-500">
            <a href="/authors/{{ $post->author->id }}">{{$post->author->name}}</a> |
            {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">{{$post['body']}}</p>
        <a href="/posts" class="font-medium text-blue-500 transition-all hover:underline">&laquo; Back to
            posts</a>
    </article>
</x-layout>