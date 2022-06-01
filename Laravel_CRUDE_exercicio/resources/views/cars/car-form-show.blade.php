<form method="POST" action="{{ url('cars') }}">
    @csrf
    <div class="form-group col-xl-5 col-lg-6 col-md-8 col-sm-12 mx-auto text-left form p-4">
        <h1>Show Car</h1>
        <fieldset disabled>
        <div class="form-group">
            <label for="name">Name</label>
            <input
                value="{{$car->registration}}"
                type="text"
                id="registration"
                name="registration"
                autocomplete="registration"
                placeholder="registration"
                class="form-control">
        </div>


        <div class="form-group">
            <label for="address">Year of Registration</label>
            <input
                value="{{$car->year_of_registration}}"
                type="text"
                id="year_of_registration"
                name="year_of_registration"
                autocomplete="year_of_registration"
                placeholder="Registration Date"
                class="form-control">

        </div>

        <div class="form-group">
            <label for="color">Color</label>
            <textarea
                value="{{$car->color}}"
                class="form-control"
                name="color"
                id="color"
                rows="5"
                value="{{ old('color') }}"
                placeholder="Type car color"
                autocomplete="description">{{$car->color}}</textarea>
            @error('color')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <br>
            <div>
                <label for="brands">Brand:</label>
                <select name="brands" id="brands">
                        <option value="{{$car->brand_id}}">
                            {{$car->brand->name}}
                        </option>
                </select>
                <br><br>
            </div>
        </fieldset>
        <div class="button col-xl-4 col-lg-6 col-md-8 col-sm-12 mx-auto text-left form p-4">

            <td><a class="btn btn-primary" href="{{url('cars')}}" role="button">Back</a></td>

            {{-- <button type="submit" class="mt-2 mb-5 btn btn-primary">Back</button> --}}

        </div>
    </div>

</form>
