@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col.md.12">
			<ul class="breadcrumb">
<i><a href="{{ url('/home') }}">Dashboard</a></i>
<i><a href="{{ url('/admin/authors') }}">Penulis</a></i>
<li class="active">Ubah Penulis</li>
			</ul>
		<div class="panel panel-default">
	<div class="panel-heading">
<h2 class="panel-title">Ubah Penulis</h2>
</div>
<div class="panel-body">
{!! Form::model($author, ['url' => route('authors.update', $author->id), 'method'=>'put', 'class'=>'form-horizontal']) !!}
@include('authors._form')
{!! Form::close() !!}

</div>
</div>
</div>
</div>
</div>

@endsection
