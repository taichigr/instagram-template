@extends(' layouts.app')


@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <h2 class="h4 card-title m-0">{{ $tag->hashtag }}</h2>
                <div class="card-text text-right">
                    {{ $tag->products->count() }}件
                </div>
            </div>
        </div>
        @foreach($tag->products as $product)
            @include('products.card')
        @endforeach
    </div>
@endsection
