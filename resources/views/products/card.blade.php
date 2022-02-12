<div class="card col-lg-4 p-2">

    {{--                        <div class="card-body"></div>--}}

    <a href="{{ route('products.show',['product' => $product]) }}">
        <span class="text-muted" style="font-size: 80px; z-index: 10; position: absolute; top: 70px; left: 70px;">sample</span>
        <img class="card-img-top" src="{{ '/storage/images/'. $product->image }}" alt="商品画像">
    </a>
    <div class="card-body pt-2 pb-2">
        @foreach($product->tags as $tag)
            @if($loop->first)
                <div class="card-text line-height">
                    @endif
                    <a href="{{ route('tags.show', ['name' => $tag->name]) }}" class="border p-1 mr-1 mt-1 text-muted">
                        {{ $tag->hashtag }}
                    </a>
                    @if($loop->last)
                </div>
            @endif
        @endforeach
        <a href="{{ route('products.show',['product' => $product]) }}">
            <h3 class="h4 card-title">
                {{ $product->name }}
            </h3>
            <div class="card-text">¥{{ $product->price }}</div>
            <div class="card-text">{{ $product->caption }}</div>
        </a>
    </div>

</div>
