@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Borang Pendaftaran Ahli Darussyifa' Semalaysia</div>

                <div class="panel-body">
                  <!-- @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                    @endif -->

                    <form class="form-horizontal" method="POST" action="{{ route('wujudAhli') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="nama" class="col-md-4 control-label">Nama</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}" {!--required--} autofocus>
                                {!! $errors->first('nama','<span class="text-danger">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('no_kp') ? ' has-error' : '' }}">
                            <label for="no_kp" class="col-md-4 control-label">No. Kad Pengenalan</label>

                            <div class="col-md-6">
                                <input id="no_kp" type="text" class="form-control" name="no_kp" value="{{ old('no_kp') }}" {!--required--} autofocus>
                                {!! $errors->first('no_kp','<span class="text-danger">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('no_ahli') ? ' has-error' : '' }}">
                            <label for="no_ahli" class="col-md-4 control-label">No. Ahli</label>

                            <div class="col-md-6">
                                <input id="no_ahli" type="text" class="form-control" name="no_ahli" value="{{ old('no_ahli') }}" {!--required--} autofocus>
                                {!! $errors->first('no_ahli','<span class="text-danger">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('no_telefon') ? ' has-error' : '' }}">
                            <label for="no_telefon" class="col-md-4 control-label">No. Telefon</label>

                            <div class="col-md-6">
                                <input id="no_telefon" type="text" class="form-control" name="no_telefon" value="{{ old('no_telefon') }}" {!--required--} autofocus>
                                {!! $errors->first('no_telefon','<span class="text-danger">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label for="alamat" class="col-md-4 control-label">Alamat</label>

                            <div class="col-md-6">
                                <textarea id="alamat" class="form-control" name="alamat" {!--required--} autofocus>{{ old('alamat') }}</textarea>
                                  {!! $errors->first('alamat','<span class="text-danger">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" {!--required--} autofocus>
                                  {!! $errors->first('email','<span class="text-danger">:message</span>') !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-danger">
                                    Hantar
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
