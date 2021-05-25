@extends('layout.master')

@section('content')

<div class="uk-grid">
	<div class="uk-width-medium-4-5 uk-container-center">
		<div class="md-card">
			<div class="md-card-content large-padding">

				@foreach($select as $row)
				<h2 class="heading_b">{{$row->title}}</h2>
				<br/>
				<form action="{{ asset('/huniinoots-zasah/'.$row->id) }}" method="post">
					{{ csrf_field() }}
					<div class="uk-grid uk-grid-divider uk-margin-medium-bottom" data-uk-grid-margin>
						<div class="uk-width-medium-12">
							<div class="uk-grid">
								<div class="uk-width-1-1">
									<textarea class="tinymce" name="body" cols="30" rows="10" required>{{$row->body}}</textarea>
								</div>
							</div>
						</div>
					</div>

					<div class="uk-grid uk-margin-large-top" data-uk-grid-margin>
						<div class="uk-width-medium-1-1">
							<button class="md-btn md-btn-large md-btn-primary" type="submit">Шинэчилэх</button>
						</div>
					</div>
				</form>
				@endforeach

			</div>
		</div>
	</div>
</div>

@endsection
