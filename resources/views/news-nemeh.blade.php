@extends('layout.master')

@section('content')

<div class="uk-grid">
	<div class="uk-width-medium-12 uk-container-center">
		<div class="md-card">
			<div class="md-card-content large-padding">
				<?php
				$msg = Session::get('msg');
				if (isset($msg)){echo $msg;}
				?>
				<h2 class="heading_b">Мэдээ нэмэх</h2>
				
				<form action="{{ asset('/news-nemeh') }}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="uk-grid uk-grid-divider uk-margin-medium-bottom" data-uk-grid-margin>
						<div class="uk-width-medium-12">
							<div class="uk-grid">
								<div class="uk-width-1-1">
									<label>Гарчиг</label>
									<input type="text" class="md-input" name="title" required />
								</div>
							</div>
							
							<div class="uk-grid" data-uk-grid-margin>
								<div class="uk-width-1-1">
									<textarea class="tinymce" name="body" cols="30" rows="10" required>Test</textarea>
								</div>
							</div>
							<div class="uk-grid" data-uk-grid-margin>
								<div class="uk-width-10">
									<select id="select_demo_4" data-md-selectize name="cat" required>
										<option value="0">Категори сонгох</option>
										@foreach($cat_data as $row)
											<option value="{{$row->id}}">{{$row->name}}</option>
										@endforeach
									</select>
								</div>
							</div>

							<div class="uk-grid" data-uk-grid-margin>
								<div class="uk-width-medium-1-2">
									<div class="md-card">
										<div class="md-card-content">
											<h3>Зураг</h3>
											<input type="file" name="image" required />
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="uk-grid uk-margin-large-top" data-uk-grid-margin>
						<div class="uk-width-medium-1-1">
							<button class="md-btn md-btn-large md-btn-primary" type="submit">Нэмэх</button>
						</div>
					</div>
				</form>
				<?php Session::put('msg', null); ?>

			</div>
		</div>
	</div>
</div>

@endsection
