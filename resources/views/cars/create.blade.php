
<x-main>
    <div class="row">
        <div class="col-12">
            <form action="{{ route('cars.store') }}" method="POST">
                @csrf
        
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Enter name">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
        
                <div class="form-group">
                    <label for="model">Model</label>
                    <input type="text" class="form-control" name="model"  value="{{old('model')}}" placeholder="Enter model">
                    @error('model')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
        
                <div class="form-group">
                    <label for="kw">Kw</label>
                    <input type="number" class="form-control" name="kw"  value="{{old('kw')}}" placeholder="Enter kw">
                    @error('kw')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
        
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" name="price" value="{{old('price')}}" placeholder="Enter price">
                    @error('price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
        
                <div class="form-group">
                    <label for="price">Description</label>
                    <div class="form-floating">
                        <textarea class="form-control" name="description" style="height: 100px">
                            {{old('description')}}
                        </textarea>
                        <label for="floatingTextarea2">Description</label>
                      </div>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
        
                <br>
        
                <button type="submit" class="btn btn-primary">Create Car</button>
            </form>
        </div>
    </div>

</x-main>