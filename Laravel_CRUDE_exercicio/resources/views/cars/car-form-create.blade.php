<form method="POST" action="{{ url('cars') }}">
    @csrf
    <div class="form-group col-xl-5 col-lg-6 col-md-8 col-sm-12 mx-auto text-left form p-4">
        <h1>Add Car</h1>
        <div class="form-group">
            <label for="registration">Registration</label>
            <input
                type="text"
                id="registration"
                name="registration"
                autocomplete="registration"
                placeholder="Type the license plate of the car"
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
                type="text"
                id="year_of_registration"
                name="year_of_registration"
                autocomplete="year_of_registration"
                placeholder="Type registration date"
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
                autocomplete="description"></textarea>
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
                   <option value="{{$brand->id}}">
                       {{$brand->name}}
                   </option>
                @endforeach
            </select>
            <br><br>
        </div>


        <br>
        <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>

    </div>

    </form>
