@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col.md.12">
				<ul class="breadcrumb">
					<i><a href="{{ url('/home') }}">Dashboard</a></i>
					<i><a href="{{ url('/admin/books') }}">Buku</a></i>
					<li class="active">Tambah Buku</li>
				</ul>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title">tambah Buku</h2>
					</div>	
					<div class="panel-body">
{!! Form::open(['url' => route('books.store'), 'method' => 'post', 'files' => 'true',  'class' =>'from-horizontal']) !!}
@include('books._form')
{!! Form::close() !!}

					</div>
				</div>
			</div>
		</div>
</div>

@endsection
