<form method="POST" action="{{ url('brands') }}">
    @csrf
    <div class="form-group col-xl-5 col-lg-6 col-md-8 col-sm-12 mx-auto text-left form p-4">
        <h1>Show Brand</h1>
        <fieldset disabled>
        <div class="form-group">
            <label for="name">Name</label>
            <input
                value="{{$brand->name}}"
                type="text"
                id="name"
                name="name"
                autocomplete="name"
                placeholder="Type your name"
                class="form-control">
        </div>
        <br>
        </fieldset>
        <div class="button col-xl-4 col-lg-6 col-md-8 col-sm-12 mx-auto text-left form p-4">

            <td><a class="btn btn-primary" href="{{url('brands')}}" role="button">Back</a></td>

            {{-- <button type="submit" class="mt-2 mb-5 btn btn-primary">Back</button> --}}

        </div>
    </div>

</form>
