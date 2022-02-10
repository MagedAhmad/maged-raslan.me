@extends('layouts.app')

@section('content')

 <div>
    <div class="max-w-4xl mx-auto py-20 prose lg:prose-xl text-gray-100">
        @if($page->title !== 'about')
        <h1 class="text-gray-100" style="font-size:25px !important;">{{ $page->title }}</h1>
        @endif
        <p class="text-gray-100">{!! $page->body !!}</p>
    </div>
</div>

@endsection