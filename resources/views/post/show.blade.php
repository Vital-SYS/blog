@extends('layouts.main')

@section('content')
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{$post->title}}</h1>
            <p class="edica-blog-post-meta" style="margin-top: -30px;" data-aos="fade-up"
               data-aos-delay="200">{{$date->translatedFormat('F')}} {{$date->day}}, {{$date->year}}
                в {{$date->format('H:i')}} <br> <b>Комментариев: {{$post->comments->count()}}</b></p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{asset('storage/' . $post->main_image)}}" alt="featured image" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto">
                        {!!$post->content!!}
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <section class="py-3">
                        @auth()
                            <form action="{{route('post.like.store', $post->id)}}" method="post">
                                @csrf
                                <span>{{$post->liked_users_count}}</span>
                                <button type="submit" class="border-0 bg-transparent">
                                    @if(auth()->user()->likedPosts->contains($post->id))
                                        <i class="fas fa-heart text-danger"></i>
                                    @else
                                        <i class="far fa-heart text-danger"></i>
                                    @endif
                                </button>
                            </form>
                        @endauth
                        @guest()
                            <div>
                                <span>{{$post->liked_users_count}}</span>
                                <i class="far fa-heart"></i>
                            </div>
                        @endguest
                    </section>
                    @if($relatedPosts->count() > 0)
                        <section class="related-posts">
                            <h2 class="section-title mb-4" data-aos="fade-up">Схожие посты</h2>
                            <div class="row">
                                @foreach($relatedPosts as $relatedPost)
                                    <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                                        <p class="post-category">Категория: {{$post->category->title}}</p>
                                        <a href="{{route('post.show', $post->id)}}"><h5
                                                class="post-title">{{$post->title}}</h5></a>
                                        <img src="{{asset('storage/' . $post->main_image)}}" alt="related post"
                                             class="post-thumbnail">
                                    </div>
                                @endforeach
                            </div>
                        </section>
                    @endif
                    <section class="comment-list mb-5">
                        <h5 class="section-title mb-5" data-aos="fade-up">Комментарии ({{$post->comments->count()}}
                            )</h5>
                        @foreach($post->comments as $comment)
                            <div class="card-comment mb-3">
                            <span class="username">
                                <div><b>{{$comment->user->name}}</b></div>
                                <span class="text-muted float-right">{{$comment->dateAsCarbon->diffForHumans()}}</span>
                            </span>
                                <i>{{$comment->message}}</i>
                            </div>
                        @endforeach
                    </section>
                    @auth()
                        <section class="comment-section">
                            <h2 class="section-title mb-5" data-aos="fade-up">Оставить комментарий</h2>
                            <form action="{{route('post.comment.store', $post->id)}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-12" data-aos="fade-up">
                                        <label for="comment" class="sr-only">Comment</label>
                                        <textarea name="message" id="comment" class="form-control"
                                                  placeholder="Поделитесь своим мнением о посте..."
                                                  rows="10"></textarea>
                                    </div>
                                    <input type="hidden" name="post_id" value="post_id">
                                </div>
                                <div class="row">
                                    <div class="col-12" data-aos="fade-up">
                                        <input type="submit" value="Оставить комментарий" class="btn btn-warning">
                                    </div>
                                </div>
                            </form>
                        </section>
                    @endauth
                </div>
            </div>
        </div>
    </main>
@endsection
