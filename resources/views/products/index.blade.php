@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
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
