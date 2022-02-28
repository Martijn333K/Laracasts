@extends ('layout')

@section ('content')
    <article>
        <h1>
            {{ $post->title }}
            </a>
        </h1>    
        
        <div> 
            {{ $post->body }}
        </div>
    </article>

    <a href="/">Ga terug</a>
@endsection