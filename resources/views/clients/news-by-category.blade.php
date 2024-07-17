@extends('clients.layouts.master')

@section('title')
    {{-- {{ $news->category_name }} --}}
@endsection

@section('content')
    <section class="section-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8  mb-5 mb-lg-0">
                    <h2 class="h5 section-title">Recent Post</h2>
                    @foreach ($news as $item)
                        <article class="card mb-4">
                            <div class="post-slider">
                                <img src="{{ asset('images/' . $item->image) }}" class="card-img-top" alt="post-thumb">
                            </div>
                            <div class="card-body">
                                <h3 class="mb-3"><a class="post-title" href="{{ route('details', ['id' => $item->id]) }}">{{ Str::limit($item->title, 100, ' ...') }}</a>
                                </h3>
                                <ul class="card-meta list-inline">
                                    <li class="list-inline-item">
                                        <a href="author-single.html" class="card-meta-author">
                                            <img src="/clients/images/john-doe.jpg" alt="John Doe">
                                            <span>John Doe</span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="ti-timer"></i>{{ $item->views }}
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="ti-calendar"></i>{{ $item->create_at }}
                                    </li>
                                    <li class="list-inline-item">
                                        <ul class="card-meta-tag list-inline">
                                            <li class="list-inline-item"><a href="tags.html">Demo</a></li>
                                            <li class="list-inline-item"><a href="tags.html">Elements</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <p>{{ Str::limit($item->description, 200, ' ...') }}</p>
                                <a href="{{ route('details', ['id' => $item->id]) }}" class="btn btn-outline-primary">Read More</a>
                            </div>
                        </article>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection
