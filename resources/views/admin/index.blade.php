@extends('layouts.admin')

@section('content') 
	@if(Session::has('info'))
		<div class="row">
			<div class="col-md-12">
				<p class="alert alert-info">{{ Session::get('info') }}</p> 
			</div>
		</div> 
	@endif

	<div class="row">
		<div class="col-md-12">
			<a href="{{ route('adminCreate') }}" class="btn btn-success">New Post</a> 
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-12">
			<p><strong >Learning
				<a href="{{ route('admin.edit', ['id' => 1]) }}">Edit</a></p>
		</div> 
	</div>


	@foreach($posts as $post) 
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">{{ $post['title'] }}</h1>
            <p>{{ $post['content'] }}!</p>
            <p><a href="{{ route('blog.post', ['id' => array_search($post, $posts)]) }}">Read more...</a></p>
        </div>
    </div>
    <hr>
    @endforeach 

    
@endsection