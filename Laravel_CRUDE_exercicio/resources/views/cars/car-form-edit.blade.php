<form method="POST" action="{{ url('cars/' . $car->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group col-xl-5 col-lg-6 col-md-8 col-sm-12 mx-auto text-left form p-4">
        <h1>Edit Car</h1>
        <div class="form-group">
            <label for="registration">Registration</label>
            <input
                value="{{$car->registration}}"
                type="text"
                id="registration"
                name="registration"
                autocomplete="registration"
                placeholder="Type car license plate"
                class="form-control
             @error('registration') is-invalid @enderror"
                value="{{ old('registration') }}"
                required
                aria-describedby="nameHelp">
            <p id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</p>
            @error('registration')
            <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="year_of_registration">Year of Registration</label>
            <input
                value="{{$car->year_of_registration}}"
                type="text"
                id="year_of_registration"
                name="year_of_registration"
                autocomplete="year_of_registration"
                placeholder="Type your address"
                class="form-control
            @error('year_of_registration') is-invalid @enderror"
                value="{{ old('year_of_registration') }}"
                required
                aria-describedby="nameHelp">
            @error('year_of_registration')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="color">Color</label>
            <textarea
                class="form-control"
                name="color"
                id="color"
                rows="5"
                value="{{ old('color') }}"
                placeholder="Type your description"
                autocomplete="description">{{$car->color}}</textarea>
            @error('color')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div>
            <label for="brands">Brand:</label>
            <select name="brands" id="brands">
                @foreach($brands as $brand)
                    <option value="{{$brand->id}}" @if($brand->id == $car->brand->id) selected @endif>
                        {{$brand->name}}
                    </option>
                @endforeach
            </select>
            <br><br>
        </div>
        <button type="update" class="mt-2 mb-5 btn btn-primary">Update</button>

    </div>

</form>
