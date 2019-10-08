@extends('parent')

@section('main')
    <div class="float-right mb-3">
        <a href="{{route('crud.create')}}" class="btn btn-success btn-sm" >Create</a>
    </div>

    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <tr>
            <th width="10%">Image</th>
            <th width="35%">First Name</th>
            <th width="35%">Last Name</th>
            <th width="30%">Action</th>
        </tr>
        @foreach($data as $row)
            <tr>
                <td><img src="{{URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75"/></td>
                <td>{{$row->first_name}}</td>
                <td>{{$row->last_name}}</td>
                <td>
                    <a href="{{route('crud.show', $row->id )}}" class="btn btn-primary">Show</a>
                    <a href="{{route('crud.edit', $row->id )}}" class="btn btn-warning">Edit</a>
                    <form action="{{route('crud.destroy', $row->id)}}" method='post'>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class='btn btn-danger'>Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
