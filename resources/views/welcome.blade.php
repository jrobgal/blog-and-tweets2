@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
			<h1 class="col-md-4">Last Entries</h1>
			@foreach($entries as $entry)
            <div class="card col-mb-4">
                <div class="card-header">
					{{ $entry->id }} . {{ $entry->title }}
				</div>
                
				<div class="card-body">
					<p>{{ $entry->content }}</p>
				</div>
            </div>

			<div class="card-footer">
				Autor: 
				<a href="{{ url('@'.$entry->user->username) }}">
					{{ $entry->user->name }}
				</a>
			</div>
			@endforeach
			<br>
			{{ $entries->links() }}
        </div>
    </div>
</div>
@endsection

