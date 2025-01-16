@extends('layout.app')

@section('content')
<div class="card p-3">
	<div class="card-header">
		<div class="row">
			<div class="col">
				<h2> Simulasi Penjadwalan </h2>
			</div>
			<div class="col text-right">
				@if (Auth::user())
					<button class="btn btn-success" data-toggle="modal" data-target="#addModal">
						Tambah Event
					</button>
				@endif
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mt-2">
			<div class="col-md-6">
				<div id="calendar"> </div>
			</div>
			<div class="col-md-6">
				@include('jawaban.NomorTiga.index')
			</div>
		</div>
	</div>
</div>

@include('jawaban.NomorDua.index')

@endsection

@section ('addon-script')
	@include('home.script')
	@include('jawaban.NomorTiga.script')
	@include('jawaban.NomorEmpat.script')
@endsection

<!-- FullCalendar CSS -->
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css" rel="stylesheet">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- FullCalendar JS -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
