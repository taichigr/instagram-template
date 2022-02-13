@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                    <div class="card">
                        {{--                        <div class="card-body">--}}

                            <span class="text-muted" style="font-size: 80px; z-index: 10; position: absolute; top: 70px; left: 70px;">sample</span>
                            <img class="card-img-top" src="{{ '/storage/images/'. $product->image }}" alt="商品画像">
                            {{--                        </div>--}}
                            <div class="card-body pt-2 pb-2">
                                <h3 class="h4 card-title">
                                    {{ $product->name }}
                                </h3>
                                <div class="card-text">
                                    ¥{{ $product->price }}
                                </div>

                                <div class="card-footer bg-white border-top-0 text-center">
                                    <a data-toggle="modal" data-target="#modal-download-{{ $product->id }}" class="btn btn-primary">ダウンロード</a>
                                </div>

                                {{--            モーダル--}}
                                <div id="modal-download-{{ $product->id }}" class="modal fade" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form method="POST" action="{{ route('products.download',['product' => $product]) }}">
                                                @csrf
                                                <div class="modal-body">
                                                    {{ $product->name }}をダウンロードしますか？
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <a class="btn" data-dismiss="modal">キャンセル</a>
                                                    <button type="submit" class="btn btn-primary">ダウンロード</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
            </div>
        </div>
    </div>
@endsection
