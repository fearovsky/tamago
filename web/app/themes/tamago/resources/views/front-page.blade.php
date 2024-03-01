{{--
  Template Name: Homepage
--}}

@extends('layouts.app')

@section('content')
  @if ($builder)

    @foreach ($builder as $block)
      @include('builder.' . $block['acf_fc_layout'], ['block' => $block])
    @endforeach

  @endif
@endsection
