@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col.md.12">
<ul class="breadcrumb">
<i><a href="{{ url('/home') }}">Dashboard</a></i>
<li class="active">Buku</li>
</ul>
<div class="panel panel-default">
<div class="panel-heading">
<h2 class="panel-title">Buku</h2>
</div>

<div class="panel-body">
<p><a class="btn btn-primary" href="{{ url('/amin/books/create') }}">Tambah</a></p>
{!! $html->table(['class'=>'table-striped']) !!}

</div>
</div>
</div>
</div>
</div>

@endsection

@section('scripts')
{!! $html->scripts() !!}
@endsection