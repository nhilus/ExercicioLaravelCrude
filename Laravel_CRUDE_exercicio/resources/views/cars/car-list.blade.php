@extends('master.main')
@section('content')
    <div class="table">
        <h1>Cars</h1>

        @if (session('status'))<div class="alert alert-success alert-dismissible fade show" role="alert">{{ session('status') }}<button type="button" class="close" data-dismiss="alert" aria-label="Close">            <span aria-hidden="true">&times;</span>        </button>    </div>@endif

        <table class="table table-bordered table-dark col-6">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Registration</th>
                <th scope="col">Year of registration</th>
                <th scope="col">Color</th>
                <th scope="col">Brand Name</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cars as $car)
                <tr>
                    <td> {{$car->id}}</td>
                    <td> {{$car->registration}}</td>
                    <td> {{$car->year_of_registration}}</td>
                    <td> {{$car->color}}</td>
                    <td> {{$car->brand->name}}</td>

                    <td>
                        <a href="{{url('cars/' . $car->id)}}"><button type="button" class="btn btn-light">Show</button></a>
                        @auth
                            @if(Auth::user()->isAdmin())
                                <a href="{{url('cars/' . $car->id . '/edit')}}" type="button"class="btn btn-primary">Edit</a>
                                <form action="{{url('cars/' . $car->id)}}" method="POST">@csrf    @method('DELETE')<button type="submit" class="btn btn-danger">Delete</button></form>
                            @endif
                        @endauth
                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
        <td>
            @auth
                @if(Auth::user()->isAdmin())
                    <form action="{{url('cars/truncate')}}" method="GET"><button type="submit" class="btn btn-danger">Delete Table</button></form>
                @endif
            @endauth
        </td>
        <br>
        <td>
        {{$cars->links()}}
        </td>
    </div>
@endsection
