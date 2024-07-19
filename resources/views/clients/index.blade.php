@extends('clients.layouts.master')

@section('title')
    Home
@endsection

@section('breadcump')
    <div class="banner text-center">
        @include('clients.components.breadcump', [
            'name' => 'Hôm nay <br> Bạn thích đọc gì?',
            'breadcump' => $categories->map(function ($category) {
                    return '<li class="list-inline-item"><a href="' .
                        route('category', ['id' => $category->id]) .
                        '">' .
                        $category->name .
                        '</a></li>';
                })->implode(''),
        ])
    </div>
@endsection


@section('content')
    <section class="section pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <h2 class="h5 section-title">Lựa chọn của hôm nay</h2>
                    <article class="card">
                        <div class="post-slider slider-sm">
                            <img style="height: 200px;" src="{{ asset('images/' . $new->image) }}" class="card-img-top"
                                alt="post-thumb">
                        </div>

                        <div class="card-body">
                            <h3 class="h4 mb-3"><a class="post-title" href="{{ route('details', ['id' => $new->id]) }}">{{ $new->title }}</a></h3>
                            <ul class="card-meta list-inline">
                                <li class="list-inline-item">
                                    <a href="author-single.html" class="card-meta-author">
                                        <img src="/clients/images/john-doe.jpg">
                                        <span>Charls Xaviar</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-timer"></i>{{ $new->created_at }}
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-eye"></i>{{ $new->views }}
                                </li>
                                <li class="list-inline-item">
                                    <ul class="card-meta-tag list-inline">
                                        <li class="list-inline-item"><a href="/">{{ $new->category_name }}</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <p>{{ Str::limit($new->description, 50, ' ...') }}</p>
                            <a href="{{ route('details', ['id' => $new->id]) }}" class="btn btn-outline-primary">Đọc thêm</a>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 mb-5">
                    <h2 class="h5 section-title">Bài viết thịnh hành</h2>

                    @foreach ($newstrend as $new)
                        <article class="card mb-4">
                            <div class="card-body d-flex">
                                <img class="card-img-sm" src="{{ asset('images/' . $new->image) }}" alt="No Image">
                                <div class="ml-3">
                                    <h4><a href="{{ route('details', ['id' => $new->id]) }}" style="with:100%;"
                                            class="post-title">{{ $new->title }}</a>
                                    </h4>
                                    <ul class="card-meta list-inline mb-0">
                                        <li class="list-inline-item mb-0">
                                            <i class="ti-time"></i>{{ $new->created_at }}
                                        </li>
                                        <li class="list-inline-item mb-0">
                                            <i class="ti-eye"></i> {{ $new->views }}
                                        </li>
                                        <li class="list-inline-item mb-0">
                                            <ul class="card-meta-tag list-inline">
                                                <li class="list-inline-item"><a
                                                        href="/">{{ $new->category_name }}</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    @endforeach

                </div>

                <div class="col-lg-4 mb-5">
                    <h2 class="h5 section-title">Bài đăng phổ biến</h2>

                    <article class="card">
                        <div class="post-slider slider-sm">
                            <img style="height:200px;" src="{{ asset('images/' . $newPopular->image) }}"
                                class="card-img-top" alt="post-thumb">
                        </div>
                        <div class="card-body">
                            <h3 class="h4 mb-3"><a class="post-title" href="{{ route('details', ['id' => $newPopular->id]) }}">{{ $newPopular->title }}</a>
                            </h3>
                            <ul class="card-meta list-inline">
                                <li class="list-inline-item">
                                    <a href="author-single.html" class="card-meta-author">
                                        <img src="/clients/images/kate-stone.jpg" alt="Kate Stone">
                                        <span>Kate Stone</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-timer"></i>{{ $newPopular->created_at }}
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-eye"></i>{{ $newPopular->views }}
                                </li>
                                <li class="list-inline-item">
                                    <ul class="card-meta-tag list-inline">
                                        <li class="list-inline-item"><a href="/">{{ $newPopular->category_name }}</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <p>{{ Str::limit($newPopular->description, 50, ' ...') }}</p>
                            <a href="{{ route('details', ['id' => $newPopular->id]) }}" class="btn btn-outline-primary">Đọc thêm</a>
                        </div>
                    </article>
                </div>
                <div class="col-12">
                    <div class="border-bottom border-default"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8  mb-5 mb-lg-0">
                    <h2 class="h5 section-title">Bài đăng gần đây</h2>

                    <article class="card mb-4">
                        <div class="post-slider">
                            @foreach ($newsdescid as $new)
                                <div><img style="height:400px;" src="{{ asset('images/' . $new->image) }}"
                                        class="card-img-top" alt="post-thumb">
                                    <div class="card-body">
                                        <h3 class="mb-3"><a class="post-title" href="{{ route('details', ['id' => $new->id]) }}">{{ $new->title }}</a>
                                        </h3>
                                        <ul class="card-meta list-inline">
                                            <li class="list-inline-item">
                                                <a href="author-single.html" class="card-meta-author">
                                                    <img src="/clients/images/john-doe.jpg" alt="John Doe">
                                                    <span>John Doe</span>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ti-time"></i>{{ $new->created_at }}
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ti-eye"></i>{{ $new->views }}
                                            </li>
                                            <li class="list-inline-item">
                                                <ul class="card-meta-tag list-inline">
                                                    <li class="list-inline-item"><a
                                                            href="/">{{ $new->category_name }}</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <p>{{ Str::limit($new->description, 400, ' ...') }}</p>
                                        <a href="{{ route('details', ['id' => $new->id]) }}" class="btn btn-outline-primary">Đọc thêm</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </article>

                </div>
            </div>
        </div>
    </section>
@endsection
