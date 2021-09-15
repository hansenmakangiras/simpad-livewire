@props(['alertTipe' => ''])
@php
  $alert = ['success','info','danger','warning','primary'];
  $tipe = '';
@endphp

@if(in_array($alertTipe,$alert))
  <div {{ $attributes->merge(['class' => 'alert alert-dismissible alert-'.$alertTipe.' fade show' ,'role' => 'alert']) }}>
    <div class="alert-body">
      <strong>{{ $alertTitle }}</strong>
      {{ $slot }}
    </div>
    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

