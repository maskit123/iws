@layout('layouts.main')

@section('content')
<h3>Home</h3>

@foreach($posts as $post)
<article class="post-teaser">
	<aside class="pt-infobox">
		<ul>
			<li class="category">{{ $post->category->name }}</li>
			<li class="date">{{ $post->created_at }}</li>
		</ul>
	</aside>

	<h4>{{ HTML::link('posts/'.$post->slug, $post->title) }}</h4>
	<hr>
	{{ Str::limit($post->body, 300) . " " . HTML::link('posts/'.$post->slug, 'Read more') }}

	{{--<ul class="tags">--}}
</article>
@endforeach
@endsection