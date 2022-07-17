

@extends ('layouts.main')


@section ('container')
<h1 class = "mb-3 text-center"> {{ $title }} </h1>
<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/post">
      @if (request('category'))
      <input type="hidden" name ="category" value="{{request ('category')}}">
      @endif
      @if (request('author'))
      <input type="hidden" name ="author" value="{{request ('author')}}">
      @endif
    <div class="input-group mb-3">
   <input type="text" class="form-control" placeholder="Search..." aria-label="Recipient's username" name="search" value="{{ request('search') }}">
   <button class="btn btn-danger" type="submit">Search</button>
   </div>
    </form>
  </div>
</div>

@if ($post->count())
<div class="card mb-3">
  <img src="https://source.unsplash.com/1200x400?{{ $post[0]->category->name}}" class="card-img-top" alt="{{ $post[0]->category->name}}">
  <div class="card-body text-center">
    <h5 class="card-title"><a href= "/post/{{ $post[0] -> slug }}" class="text-decoration-none text-dark">{{ $post[0]->title }}</a></h5>
    <p> <small class="text-muted"> By. <a href ="/post?author={{ $post[0]->author ->username }}" class="text-decoration-none">{{   $post[0] ->author->name }} </a> in <a href ="/post?category={{ $post[0]->category->slug}}" class ="text-decoration-none">{{ $post[0]->category->name }}</a> {{ $post[0]-> created_at ->diffForHumans()}}</small></p>

       <p> {{ $post[0]->excerpt }} </p>

       <a href= "/post/{{ $post[0] -> slug }}" class="text-decoration-none btn btn-primary"> Read More</a>

  </div>
</div>


<div class ="container">
  <div class ="row">
    @foreach ($post->skip(1) as $posts)
    <div class="col-md-4 mb-3">
    <div class="card">
      <div class ="position-absolute px-3 py-2" style = "background-color: RGBA(0,0,0,0.7)"><a href="/post?category={{ $posts->category->slug}}" class= "text-white text-decoration-none">{{$posts ->category->name}}</a></div>
    <img src="https://source.unsplash.com/500x400?{{ $posts->category->name}}" class="card-img-top" alt="{{ $posts->category->name}}">
    <div class="card-body">
    <h5 class ="card-title">{{ "$posts->title"}}</h5>
    <p> <small class="text-muted"> By. <a href ="/post?author={{ $posts->author ->username }}" class="text-decoration-none">{{   $posts->author->name }} </a> {{ $posts-> created_at ->diffForHumans()}}</small></p>
    <p class="{{ $posts->excerpt }}">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="/post/{{ $posts -> slug }}" class="btn btn-primary">Read More</a>
    </div>
    </div>
    </div>
   @endforeach
  </div>
</div>

  


@else
<p class="text-center fs-4"> No Post Found</p>
@endif

<div class="d-flex justify-content-end">
{{ $post->links() }}
</div>

@endsection
