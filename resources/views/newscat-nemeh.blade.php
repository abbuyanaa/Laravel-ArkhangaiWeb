@extends('layout.master')

@section('content')

<div class="uk-grid">
	<div class="uk-width-medium-4-5 uk-container-center">
		<div class="md-card">
			<div class="md-card-content large-padding">

				<h2 class="heading_b">Мэдээний төрөл нэмэх</h2>
        <?php
        $msg = Session::get('msg');
        if ($msg) {echo $msg;}
        ?>
				<form action="{{ asset('/newscat_nemeh') }}" method="post">
					{{ csrf_field() }}
          <div class="uk-grid uk-grid-divider uk-margin-medium-bottom" data-uk-grid-margin>
            <div class="uk-width-medium-12">
              <div class="uk-grid">
                <div class="uk-width-1-1">
                  <label>Төрөл</label>
                  <input type="text" class="md-input" name="name" />
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

			</div>
		</div>
	</div>
</div>

@endsection
