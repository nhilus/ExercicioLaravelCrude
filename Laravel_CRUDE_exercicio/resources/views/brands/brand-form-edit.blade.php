<form method="POST" action="{{ url('brands/' . $brand->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group col-xl-5 col-lg-6 col-md-8 col-sm-12 mx-auto text-left form p-4">
        <h1>Edit Player</h1>
        <div class="form-group">
            <label for="name">Name</label>
            <input
                value="{{$brand->name}}"
                type="text"
                id="name"
                name="name"
                autocomplete="name"
                placeholder="Type your name"
                class="form-control
             @error('name') is-invalid @enderror"
                value="{{ old('name') }}"
                required
                aria-describedby="nameHelp">
            @error('name')
            <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <button type="update" class="mt-2 mb-5 btn btn-primary">Update</button>

    </div>

</form>
