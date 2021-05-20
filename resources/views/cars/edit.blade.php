@extends('main')
@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Popraw samochód</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
            @endif
            <form method="post" action="{{ route('cars.update', $car->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">

                    <label for="typ">Typ:</label>
                    <input type="text" class="form-control" name="typ" value={{ $car->typ }} />
                </div>

                <div class="form-group">
                    <label for="marka">Marka:</label>
                    <input type="text" class="form-control" name="marka" value={{ $car->marka }} />
                </div>

                <div class="form-group">
                    <label for="model">Model:</label>
                    <input type="text" class="form-control" name="model" value={{ $car->model }} />
                </div>

                <button type="submit" class="btn btn-primary btn-block">Zapisz</button>
            </form>
        </div>
    </div>
@endsection
