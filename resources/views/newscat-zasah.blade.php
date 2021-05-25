@extends('layout.master')

@section('content')

<div class="uk-grid">
	<div class="uk-width-medium-4-5 uk-container-center">
		<div class="md-card">
			<div class="md-card-content large-padding">

				<h2 class="heading_b">Мэдээний төрөл нэмэх</h2>
          @foreach($newscat_data as $row)
            <form action="{{asset('/newscat-zassan/'.$row->id)}}" method="post">
              {{ csrf_field() }}
              <div class="uk-grid uk-grid-divider uk-margin-medium-bottom" data-uk-grid-margin>
                <div class="uk-width-medium-12">
                  <div class="uk-grid">
                    <div class="uk-width-1-1">
                      <label>Төрөл</label>
                      <input type="text" class="md-input" name="name" value="{{ $row->name }}" />
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

			</div>
		</div>
	</div>
</div>

@endsection
