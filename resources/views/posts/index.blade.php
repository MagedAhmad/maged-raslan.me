@extends('layouts.app')

@section('content')

    <main class="mb-auto">
        <div>
            <div class="flex flex-col items-center my-6 xl:flex-row gap-x-12 xl:mb-12">
                <div class="pt-6">
                    <h1 class="pb-6 text-2xl font-extrabold leading-9 tracking-tight text-gray-100 sm:text-4xl sm:leading-10 md:text-4xl md:leading-14">
                        Hi, I’m Maged Raslan 👋 
                    </h1>
                    <h2 class="text-lg prose text-gray-400">
                        Welcome to my portfolio - I am a Backend Developer 👨🏼‍💻 currently focused on the world of web development with PHP, Laravel, Vue, Nuxt and JavaScript among others 💚 In my free time, I like developing <a href="/projects">side projects</a> and<a href="/posts"> blogging </a>about them. Have a good read!
                    </h2>
                </div>
                <div class="flex items-center justify-center mx-2 my-12 w-96" >
                    <div class="flex items-center justify-center" >
                        <div class="p-6 bg-gray-800 sm:px-14 sm:py-8" >
                            <div>
                                <div class="pb-1 text-lg font-semibold w-72 text-gray-100">
                                    Stay updated, receive the latest post straight to your mailbox
                                </div>
                                <form  action="{{route('feedback.store')}}" method="POST" class="sm:border border-white flex-col sm:flex-row flex items-center w-full mt-12 space-y-4 sm:space-y-0">
                                    @csrf
                                    <input required name="email" class="border border-white sm:border-transparent text-base w-full font-medium leading-none text-white p-4 focus:outline-none bg-transparent placeholder-white" placeholder="Email Address" />
                                    <button class="w-full sm:w-auto py-4 px-6" style="background-color:#3cd2e8;">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="flex pb-6 text-2xl font-extrabold tracking-tight text-gray-100 sm:text-3xl md:text-5xl">Latest</h2>
            <hr class="border-gray-700">
            <div class="mt-3 py-3 -mx-3 overflow-y-auto whitespace-no-wrap scroll-hidden">
                @foreach($tags as $tag)
                <a class="text-sm text-gray-700 leading-5 hover:text-blue-600 hover:underline mx-4 md:my-0" href="{{url('tags/' . $tag->id)}}">{{$tag->name}}</a>
                @endforeach
            </div>
            <ul class="divide-y divide-gray-700">
                @foreach($posts as $post)
                <li class="py-12">
                    <article>
                        <div class="space-y-2 xl:grid xl:grid-cols-4 xl:space-y-0 xl:items-baseline">
                            <dl>
                                <dt class="sr-only">Published on</dt>
                                <dd class="text-base font-medium leading-6 text-gray-400">
                                    <time datetime="2022-01-12T00:00:00.000Z">{{ $post->publish_date->format('d M Y') }}</time>
                                </dd>
                            </dl>
                            <div class="space-y-5 xl:col-span-3">
                                <div class="space-y-6">
                                    <div>
                                        <h2 class="text-2xl font-bold leading-8 tracking-tight">
                                            <a class="text-gray-100" href="/post/{{ $post->slug }}">
                                            {{ $post->title }}
                                            </a>
                                        </h2>
                                        <div class="flex flex-wrap">
                                            @foreach($post->tags as $tag)
                                            <a class="mr-3 text-sm font-medium uppercase text-primary-500 hover:text-primary-400" href="{{url('tags/' . $tag->id)}}">
                                                {{ $tag->name }}
                                            </a>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="prose max-w-none text-gray-400">
                                    {!! $post->excerpt !!}
                                    </div>
                                </div>
                                <div class="text-base font-medium leading-6">
                                    <a class="text-primary-500 hover:text-primary-400" aria-label="Read &quot;{{$post->title}}&quot;" href="/post/{{ $post->slug }}">
                                        Read more →
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
                </li>
                @endforeach
            </ul>
        </div>  
    </main>
@endsection
