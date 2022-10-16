@extends('layouts.app')
@section('content')
<div class="text-center">
    <h1>Hello Bar Code Gengerator</h1>
    @php
        echo DNS1D::getBarcodeSVG('4445645656', 'PHARMA2T', 3, 33, 'green', false);
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<img src="data:image/png;base64,' . DNS1D::getBarcodePNG('987654321', 'C39+', 1, 33, [1, 1, 1], false) . '" alt="barcode"   />';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<img src="data:image/png;base64,' . DNS1D::getBarcodePNG('123456', 'C39+', 1, 33, [1, 1, 1], false) . '" alt="barcode"   />';
        echo DNS1D::getBarcodeHTML('4445645656', 'C39');
        echo DNS1D::getBarcodeHTML('4445645656', 'C39+');
        echo '<br>';
        echo '<br>';
    @endphp
</div>
@endsection