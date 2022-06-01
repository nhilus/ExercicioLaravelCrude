<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Car Stand</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link" href="{{url('cars')}}">Cars List</a>
            <a class="nav-link" href="{{url('cars/create')}}">Add Car</a>
            <a class="nav-link" href="{{url('brands')}}">Brands List</a>
            <a class="nav-link" href="{{url('brands/create')}}">Add Brand</a>
        </div>
    </div>
    <form action="{{url('brands')}}" method="GET" role="search" class="form-inline my-2 my-lg-0">
        @csrf
        <input  name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>
