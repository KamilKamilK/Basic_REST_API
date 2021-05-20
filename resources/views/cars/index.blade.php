@extends('main')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
        </div>
        <h1 class="display-3">Samochody</h1>
        <div>
            <a style="margin:19px" href="{{route('cars.create') }}" class="btn btn-primary">Nowy samochód</a>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>Typ</td>
                <td>Marka</td>
                <td>Model</td>

            </tr>
            </thead>
            <tbody>
            @foreach($cars as $car)
                <tr>
                    <td>{{$car->id}}</td>
                    <td>{{$car->typ}} </td>
                    <td>{{$car->marka}}</td>
                    <td>{{$car->model}}</td>

                    <td>
                        <a href="{{ route('cars.edit',$car->id)}}" class="btn btn-primary">Edytuj</a>
                    </td>
                    <td>
                        <form action="{{ route('cars.destroy', $car->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Usuń</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
