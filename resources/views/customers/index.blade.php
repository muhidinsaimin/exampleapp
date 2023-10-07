@extends('layout')

@section('content')
    <div class="row">
        <div class="col-12 margin-tb">
            <div class="float-start">
                <h3>Daftar Pelanggan</h3>
            </div>
            <div class="float-end">
                <a class="btn btn-info" href="{{ route('customers.create') }}"> Tambah Pelanggan</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Email</th>
            <th>Telepon</th>
            <th width="280px">Aksi</th>
        </tr>

        @foreach ($customers as $customer)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->gender }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->phone }}</td>
            <td>
                <form action="{{ route('customers.destroy',$customer->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('customers.show',$customer->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('customers.edit',$customer->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $customers->links() !!}
@endsection