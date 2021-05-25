@extends('layout.master')

@section('content')

<div class="uk-grid">
	<div class="uk-width-medium-12 uk-container-center">
		<div class="md-card">
			<div class="md-card-content large-padding">
				<?php
				$msg = Session::get('msg');
				if (isset($msg)) {echo $msg;}
				Session::put('msg', null);
				?>
				<h2 class="heading_b">Санал асуулга үүсгэх</h2>
				@foreach($ques_data as $qrow)
				<form action="{{asset('/vote-zasah/'.$qrow->id)}}" method="post">
					{{ csrf_field() }}
					<div class="uk-grid uk-grid-divider uk-margin-medium-bottom" data-uk-grid-margin>
						<div class="uk-width-medium-12">
							<div class="uk-grid" data-uk-grid-margin>
								<div class="uk-width-1-1">
									<textarea class="tinymce" name="body" cols="30" rows="5">{{$qrow->title}}</textarea>
								</div>
							</div>
						</div>
						<br/>
						<br/>
						<div class="uk-width-medium-12">
							<div class="uk-grid" data-uk-grid-margin>
								<div class="uk-width-1-1">
									<label class="uk-form-label">Datepicker</label>
									<input type="date" value="{{ $qrow->end_time }}" name="timeleft" />
								</div>
							</div>
						</div>
						<br/>
						<br/>

						<div class="uk-width-medium-12">
							<?php $i=1; ?>
							@foreach($ans_data as $arow)
							<div class="uk-grid" data-uk-grid-margin>
								<div class="uk-width-medium-12">
									<label>Хариулт <?php echo $i++; ?></label>
									<input type="text" class="md-input" name="answer[]" value="{{$arow->answer}}" />
									<input type="hidden" name="answerid[]" value="{{$arow->id}}" />
								</div>
							</div>
							@endforeach
						</div>
					</div>
					<hr class="uk-grid-divider">

					<div class="uk-grid uk-margin-large-top" data-uk-grid-margin>
						<div class="uk-width-medium-1-1">
							<button class="md-btn md-btn-large md-btn-primary" type="submit">Засах</button>
						</div>
					</div>
				</form>
				@endforeach

			</div>
		</div>
	</div>
</div>

@endsection
