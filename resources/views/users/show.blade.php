@extends('layouts.app')
{{--ユーザーが出費した商品一覧--}}
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-dark">{{$user->name}}さんの出品</h1>

            <div class="container-fluid row">


            @foreach($products as $product)
                    <div class="card col-lg-4 p-2">
                        @foreach($product->tags as $tag)
                            @if($loop->first)
                                <div class="card-text line-height">
                                    @endif
                                    <a href="" class="border p-1 mr-1 mt-1 text-muted">
                                        {{ $tag->hashtag }}
                                    </a>
                                    @if($loop->last)
                                </div>
                            @endif
                        @endforeach
                        {{--                        <div class="card-body"></div>--}}
                            <span class="text-muted" style="font-size: 80px; z-index: 10; position: absolute; top: 70px; left: 70px;">sample</span>
                            <img class="card-img-top" src="{{ '/storage/images/'. $product->image }}" alt="商品画像">
                            <div class="card-body pt-2 pb-2">
                                <h3 class="h4 card-title">
                                    {{ $product->name }}
                                </h3>
                                <div class="card-text">
                                    ¥{{ $product->price }}
                                </div>
                                <div class="card-text">{{ $product->caption }}</div>
                                <div class="card-text">
                                    <a href="{{ route('products.edit', ['product' => $product]) }}">編集</a>
                                </div>
                            </div>
                        <div class="card-footer bg-white border-top-0">
                            <a data-toggle="modal" data-target="#modal-delete-{{ $product->id }}" class="btn btn-danger">削除</a>
                        </div>

{{--                        モーダル--}}
                        <div id="modal-delete-{{ $product->id }}" class="modal fade" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form method="POST" action="{{ route('products.destroy', ['product' => $product]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-body">
                                            {{ $product->name }}を削除します。よろしいですか？
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <a class="btn" data-dismiss="modal">キャンセル</a>
                                            <button type="submit" class="btn btn-danger">削除</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
