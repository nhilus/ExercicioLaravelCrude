@extends('master.main')
@section('content')
    <div class="table">
        <h1>Brands</h1>

        @if (session('status'))<div class="alert alert-success alert-dismissible fade show" role="alert">{{ session('status') }}<button type="button" class="close" data-dismiss="alert" aria-label="Close">            <span aria-hidden="true">&times;</span>        </button>    </div>@endif

        <table class="table table-bordered table-dark col-6" >
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($brands as $brand)
                <tr>
                    <td> {{$brand->id}}</td>
                    <td> {{$brand->name}}</td>
                    <td>
                        <a href="{{url('brands/' . $brand->id)}}"><button type="button" class="btn btn-light">Show</button></a>
                        @auth
                            @if(Auth::user()->isAdmin())
                                <a href="{{url('brands/' . $brand->id . '/edit')}}" type="button"class="btn btn-primary">Edit</a>
                                <form action="{{url('brands/' . $brand->id)}}" method="POST">@csrf    @method('DELETE')<button type="submit" class="btn btn-danger">Delete</button></form>
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
                    <form action="{{url('brands/export')}}" method="GET"><button type="submit" class="btn btn-dark">Export Table</button></form>
                    <form action="{{url('brands/truncate')}}" method="GET"><button type="submit" class="btn btn-danger">Delete Table</button></form>
                @endif
            @endauth
        </td>
        <br>
        <td>
        {{$brands->links()}}
        </td>
    </div>
@endsection
