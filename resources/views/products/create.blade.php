@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">商品アップロード</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                            @include('products.form')
                        </form>
                    </div>

                </div>

                <div class="card">ここに画像のプリヴューエリア</div>
            </div>
        </div>
    </div>
@endsection
