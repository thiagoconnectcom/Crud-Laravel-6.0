@extends('parent')

@section('main')
    <div class="float-right mb-2">
        <a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
    </div>

    <form method="post" action="{{ route('crud.update', $data->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group mb-3">
            <label class="col-md-4 text-right">Enter First Name</label>
            <div class="col-md-8" style="margin:auto">
                <input type="text" name="first_name" value="{{$data->first_name}}" class="form-control input-lg" />
            </div>
        </div>
        <div class="form-group mb-3">
            <label class="col-md-4 text-right">Enter Last Name</label>
            <div class="col-md-8" style="margin:auto">
                <input type="text" name="last_name" value="{{$data->last_name}}" class="form-control input-lg" />
            </div>
        </div>
        <div class="form-group mb-3">
            <label class="col-md-4 text-right">Select Profile Image</label>
            <div class="col-md-8 d-flex justify-content-center" style="margin:auto">
                <input type="file" name="image"/>
                <img src="{{ URL::to('/') }}/images/{{$data->image}}" class="img-thumbnail" width='100' />
                <input type="hidden" name="hidden_image" value="{{ $data->image }}" />
            </div>
        </div>
        <div class="form-group mb-3 text-center">
            <input type="submit" name="edit" class="btn btn-primary input-lg" value="Editar" />
        </div>
    </form>
@endsection
