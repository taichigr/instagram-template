@csrf
<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">name</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('text') is-invalid @enderror" name="name" value="{{ $product->name ?? old('name') }}" required autocomplete="name" autofocus>

        @error('name')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>
</div>



<div class="form-group row">
    <label for="tags" class="col-md-4 col-form-label text-md-right">tags</label>

    <div class="col-md-6">
        <product-tags-input
            :initial-tags='@json($tagNames ?? [])'
            :autocomplete-items='@json($allTagNames ?? [])'
        ></product-tags-input>
        @error('tags')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="price" class="col-md-4 col-form-label text-md-right">price</label>

    <div class="col-md-6">
        <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $product->price ?? old('price') }}" required autocomplete="price">円
        @error('price')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>
</div>

@if(empty($product))
<div class="form-group row">
    <label for="image" class="col-md-4 col-form-label text-md-right">product image</label>

    <div class="col-md-6">
        <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" required>

        @error('image')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>
</div>
@endif


<div class="form-group row">
    <label for="caption" class="col-md-4 col-form-label text-md-right">caption</label>

    <div class="col-md-6">
        <textarea class="form-control @error('caption') is-invalid @enderror" name="caption" id="caption" cols="30" rows="10" required>{{ $product->caption ?? old('caption') }}</textarea>
        @error('caption')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
    </div>
</div>


<div class="form-group row mb-0">
    <div class="col-md-8 offset-md-4">
        <button type="submit" class="btn btn-primary">
            @if(!empty($product))
                修正
            @else
                出品
            @endif
        </button>

    </div>
</div>
<script>
    import ProductTagsInput from "../../js/components/ProductTagsInput";
    export default {
        components: {ProductTagsInput}
    }
</script>
