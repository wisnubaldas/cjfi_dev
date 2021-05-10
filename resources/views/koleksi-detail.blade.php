@extends('layout.index')
@section('content')
@php($opt = session('option'))
<br>
<div class="row">
    @include('partial.left-tumbnail')
    <div class="col-md-10 col-xs-12">
      <h1>detail</h1>
  </div>
</div>
@endsection

@push('script')
    
@endpush

@push('css')
    
@endpush