@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">編集画面</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('products.update', ['product' => $product]) }}" enctype="multipart/form-data">
                            @method('PATCH')
                            @include('products.form')
                        </form>
                    </div>

                </div>

                <div class="card">
                    <div class="card-text mt-2">画像</div>
                    <img class="card-img-top" src="{{ '/storage/images/'. $product->image }}" alt="商品画像">
                </div>
            </div>
        </div>
    </div>
@endsection
