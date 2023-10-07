@extends('layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-start">
            <h2>Edit Pelanggan</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-primary" href="{{ route('customers.index') }}"> Kembali</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Error!</strong> Ada input yang tidak sesuai.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('customers.update', $customer->id) }}" method="POST">
    @csrf
    @method('PUT')
     <div class="row">
        <div class="col-md-12 mt-2">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="name" value="{{ $customer->name }}" class="form-control" autofocus>
            </div>
        </div>
        <div class="col-md-12 mt-2">
            <div class="form-group">
                <strong>Jenis Kelamin:&nbsp;</strong>
                <input type="radio" name="gender" value="Laki-laki" {{ $customer->gender == 'Laki-laki' ? 'checked' : '' }}>Laki-laki&nbsp;
                <input type="radio" name="gender" value="Perempuan" {{ $customer->gender == 'Perempuan' ? 'checked' : '' }}>Perempuan
            </div>
        </div>
        <div class="col-md-12 mt-2">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="email" name="email" value="{{ $customer->email }}" class="form-control">
            </div>
        </div>
        <div class="col-md-12 mt-2">
            <div class="form-group">
                <strong>Telepon:</strong>
                <input type="number" name="phone" value="{{ $customer->phone }}" class="form-control">
            </div>
        </div>
        <div class="col-12 mt-2 mb-2 text-center">
            <button type="reset" class="btn btn-warning col-5">Reset</button>
            <button type="submit" class="btn btn-primary col-6">Update</button>
        </div>
    </div>
</form>
@endsection