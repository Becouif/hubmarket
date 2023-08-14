@extends('layouts.web')

@section('content')


<div class="container py-5">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="card rounded-0 border-0 shadow">
                <div class="card-body p-5">
                  <!-- start of form  -->
                  <form action="{{route('products.store')}}" enctype=”multipart/form-data” method="POST"> @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Product Name</label>
                      <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" placeholder="Samsung s20">
                      @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="mb-3">
                      <label for="description" class="form-label">Description</label>
                      <textarea class="form-control  @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{old('description')}}</textarea>
                      @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="mb-3">
                      <label for="image" class="form-label">Image</label>

                      <input type="file" class="form-control  @error('image') is-invalid @enderror" name="image" accept="image/*">
                      @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    
                    <div class="mb-3">
                      <label for="category" class="form-label">Choose category</label>
                      <select class="form-select  @error('category') is-invalid @enderror" name="category">
                      <option selected value="">-</option>
                        @foreach (\App\Models\Category::get() as $key=>$category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                      </select>
                      @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="mb-3">
                      <label for="price" class="form-label">Price</label>
                      <input type="number" class="form-control  @error('price') is-invalid @enderror" placeholder="0.00" name="price"  min="0" max="1000" step="0.01" value="{{old('price')}}">
                  
                      @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="mb-3">
                      <label for="stock" class="form-label">Stock Quantity</label>
                      <input type="number" class="form-control  @error('stock') is-invalid @enderror" name="stock" value="{{old('stock')}}" placeholder="100">
                      @error('stock')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>



                    <button type="submit" class="btn btn-primary rounded-0 btn-block">Create</button>

                  </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>

<style>
  .form-control::placeholder {
    font-style: italic;
    font-size: 0.85rem;
    color: #aaa;
}
</style>


@endsection