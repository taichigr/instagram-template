@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                    <div class="card">
                        {{--                        <div class="card-body">--}}

                            <span class="text-muted" style="font-size: 80px; z-index: 10; position: absolute; top: 70px; left: 70px;">sample</span>
                            <img class="card-img-top" src="{{ '/storage/images/'. $product->image }}" alt="スダンダードコースのイメージ画像">
                            {{--                        </div>--}}
                            <div class="card-body pt-2 pb-2">
                                <h3 class="h4 card-title">
                                    {{ $product->name }}
                                </h3>
                                <div class="card-text">
                                    ¥{{ $product->price }}
                                </div>

                                <form method="POST" action="{{ route('products.download',['product' => $product]) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">ダウンロード</button>
                                </form>
                            </div>

                    </div>
            </div>
        </div>
    </div>
@endsection
