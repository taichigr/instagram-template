@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="container-fluid mb-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="h2">template download</h2>
                        <div class="text-dark">
                            <p>飲食店、小売店向けSNSテンプレートをダウンロードできるサイトです。</p>
                            <p>Instagram, Twitter, facebookなどのSNSでご利用ください。</p>
{{--                            <p>SNS運用を集客に役立てたいけどどうすれば良いかわからない方のご相談承っております。</p>--}}
{{--                            <p>SNS運用に役立つ情報も発信して行きますので、ぜひ定期的にチェックしてみてください。</p>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid row">
                @foreach($products as $product)
                    @include('products.card')
                @endforeach
            </div>
        </div>
    </div>
@endsection
<script>
    import Sample from "../../js/components/Sample";
    export default {
        components: {Sample}
    }
</script>
