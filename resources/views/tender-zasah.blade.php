@extends('layout.master')

@section('content')

<div class="uk-grid">
	<div class="uk-width-medium-4-5 uk-container-center">
		<div class="md-card">
			<div class="md-card-content large-padding">
				@foreach($edit_tender as $trow)
				<form action="{{ asset('/tender-zasah/'.$trow->id) }}" method="post" enctype="multipart/form-data">
					
					<?php
					$message = Session::get('msg');
					if(isset($message)) { echo $message; }
					?>
					
					{{ csrf_field() }}
					<h2 class="heading_b">Тендер нэмэх</h2>
					<div class="uk-grid uk-grid-divider uk-margin-medium-bottom" data-uk-grid-margin>
						<div class="uk-width-medium-10">
							<div class="uk-grid">
								<div class="uk-width-1-1">
									<label>Гарчиг</label>
									<input type="text" class="md-input" name="etitle" value="{{ $trow->title }}" />
									<input type="hidden" value="{{ $trow->file }}" name="getfile">
								</div>
							</div>

							<div class="uk-grid" data-uk-grid-margin>
								<div class="uk-width-1-1">
									<textarea class="tinymce" name="ebody" cols="30" rows="10">{{ $trow->body }}</textarea>
								</div>
							</div>
							<div class="uk-grid" data-uk-grid-margin>
								<div class="uk-width-10">
									<select id="select_demo_4" data-md-selectize name="ecat">
										<option value="0">Категори сонгох</option>
										@foreach($tender_torol as $row)
										<option value="{{ $row->id }}" <?php if($trow->torol_id == $row->id){echo 'selected';} ?> >{{ $row->name }}</option>
										@endforeach
									</select>
								</div>
							</div>

							<div class="uk-grid" data-uk-grid-margin>
								<div class="uk-width-medium-1-2">
									<label>Файл хуулах :</label>
									<input type="file" name="efile" />
								</div>
							</div>
						</div>
					</div>

					<div class="uk-grid uk-margin-large-top" data-uk-grid-margin>
						<div class="uk-width-medium-1-1">
							<button class="md-btn md-btn-large md-btn-primary" type="submit">Засах</button>
						</div>
					</div>
				</form>
				@endforeach
				<?php Session::put('msg', null); ?>
			</div>
		</div>
	</div>
</div>

@endsection
