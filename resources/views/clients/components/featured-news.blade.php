<div class="col-12 col-md-4 mb-4">
    <div class="card h-100">
        <a href="{{ route('details', ['id' => $new->id]) }}">
            <img style="height:200px;" src="{{ asset('images/' . $new->image) }}" class="card-img-top" alt="...">
        </a>
        <div class="card-body">

            <a href="{{ route('details', ['id' => $new->id]) }}"
                class="h2 text-decoration-none text-dark"> {{ Str::limit($new->title, 50, ' ...') }}</a>
            <p class="card-text">
                {{ Str::limit($new->description, 100, ' ...') }}
            </p>
            <p class="text-muted">Views {{ $new->views }}</p>
        </div>
    </div>
</div>
