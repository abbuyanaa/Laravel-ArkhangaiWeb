@extends('layout.master')

@section('content')

<div class="uk-grid">
	<div class="uk-width-medium-12 uk-container-center">
		<div class="md-card">
			<div class="md-card-content large-padding">
				<?php
				$msg = Session::get('msg');
				if (isset($msg)) {
					echo $msg;
				}
				Session::put('msg', null);
				?>
				<h2 class="heading_b">Санал асуулга үүсгэх</h2>
				<form action="{{ asset('/vote-nemeh') }}" method="post">
					{{ csrf_field() }}
					<div class="uk-grid uk-grid-divider uk-margin-medium-bottom" data-uk-grid-margin>
						<div class="uk-width-medium-12">
							<div class="uk-grid" data-uk-grid-margin>
								<div class="uk-width-1-1">
									<textarea class="tinymce" name="body" cols="30" rows="5"></textarea>
								</div>
							</div>
						</div>
						<br/>
						<br/>
						<div class="uk-width-medium-12">
							<div class="uk-grid" data-uk-grid-margin>
								<div class="uk-width-1-1">
									<label class="uk-form-label">Datepicker</label>
									<input type="date" name="timeleft" />
								</div>
							</div>
						</div>
						<br/>
						<br/>

						<div class="uk-width-medium-12">
							<div class="uk-grid" data-uk-grid-margin>
								<div class="uk-width-medium-12">
									<label>Хариулт 1</label>
									<input type="text" class="md-input" name="answer[0]" />
								</div>
							</div>
							<div class="uk-grid" data-uk-grid-margin>
								<div class="uk-width-medium-12">
									<label>Хариулт 2</label>
									<input type="text" class="md-input" name="answer[1]" />
								</div>
							</div>
							<div class="uk-grid" data-uk-grid-margin>
								<div class="uk-width-medium-12">
									<label>Хариулт 3</label>
									<input type="text" class="md-input" name="answer[2]" />
								</div>
							</div>
						</div>
					</div>
					<hr class="uk-grid-divider">

					<div class="uk-grid uk-margin-large-top" data-uk-grid-margin>
						<div class="uk-width-medium-1-1">
							<button class="md-btn md-btn-large md-btn-primary" type="submit">Нэмэх</button>
						</div>
					</div>
					</form

				</div>
			</div>
		</div>
	</div>

	@endsection
