@extends('layout.master')

@section('content')

<div class="uk-grid">
	<div class="uk-width-medium-4-5 uk-container-center">
		<div class="md-card">
			<div class="md-card-content large-padding">

				<h2 class="heading_b">Youtube холбоос</h2>
				@foreach($select as $row)
				<form action="{{ asset('/youtube') }}" method="post">
					{{ csrf_field() }}
					<div class="uk-grid uk-grid-divider uk-margin-medium-bottom" data-uk-grid-margin>
						<div class="uk-width-medium-12">
							<div class="uk-grid">
								<div class="uk-width-1-1">
									<label>url address</label>
									<input type="text" class="md-input" name="url" value="{{$row->link}}" />
									<input type="hidden" name="id" value="{{$row->id}}">
								</div>
							</div>
						</div>
					</div>
					<?php if (Session::get('permission') == 0) { ?>
						<div class="uk-grid uk-margin-large-top" data-uk-grid-margin>
							<div class="uk-width-medium-1-1">
								<button class="md-btn md-btn-large md-btn-primary" type="submit">Шинэчилэх</button>
							</div>
						</div>
					<?php } ?>
				</form>
				@endforeach

			</div>
		</div>
	</div>
</div>

@endsection
