@extends('layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-start">
            <h2>Data Pelanggan</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-primary" href="{{ route('customers.index') }}"> Kembali</a>
        </div>
    </div>
</div>

<form action="#" method="POST">
    @csrf
     <div class="row">
        <div class="col-md-12 mt-2">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="name" value="{{ $customer->name }}" class="form-control" disabled>
            </div>
        </div>
        <div class="col-md-12 mt-2">
            <div class="form-group">
                <strong>Jenis Kelamin:&nbsp;</strong>
                <input type="radio" name="gender" value="Laki-laki" {{ $customer->gender == 'Laki-laki' ? 'checked' : '' }} disabled>Laki-laki&nbsp;
                <input type="radio" name="gender" value="Perempuan" {{ $customer->gender == 'Perempuan' ? 'checked' : '' }} disabled>Perempuan
            </div>
        </div>
        <div class="col-md-12 mt-2">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="email" name="email" value="{{ $customer->email }}" class="form-control" disabled>
            </div>
        </div>
        <div class="col-md-12 mt-2">
            <div class="form-group">
                <strong>Telepon:</strong>
                <input type="number" name="phone" value="{{ $customer->phone }}" class="form-control" disabled>
            </div>
        </div>
        <div class="col-12 mt-2 mb-2 text-center">
            <a class="btn btn-primary" href="{{ route('customers.index') }}"> Kembali</a>
        </div>
    </div>
</form>
@endsection