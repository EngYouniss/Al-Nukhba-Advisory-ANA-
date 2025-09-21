@extends('admin.layout.master')
@section('content')
<h1>{{ $page->title }}</h1>
<div class="content">
  {!! $page->content !!} {{-- HTML من TinyMCE --}}
</div>


@endsection
