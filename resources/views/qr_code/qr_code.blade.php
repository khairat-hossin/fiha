@extends('layouts.app')
@section('content')
<div class="text-center">
    <h1>Hello QR Code Generator</h1>
    {!! QrCode::size(250)->generate('This is a test QR Code') !!}
</div>
@endsection
