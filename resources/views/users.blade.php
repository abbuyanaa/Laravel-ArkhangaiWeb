@extends('layout.master')

@section('content')

<?php if (Session::get('userid') == 1) : ?>
<div class="md-card">
	<div class="md-card-content">
		<div class="uk-grid" data-uk-grid-margin="">
			<div class="uk-width-medium-8-10">
				<label for="product_search_name">Хайх</label>
				<input type="text" class="md-input" id="product_search_name">
			</div>
			<div class="uk-width-medium-1-10 uk-text-center">
				<a href="" class="md-btn md-btn-primary uk-margin-small-top">Хайх</a>
			</div>
			<div class="uk-width-medium-1-10 uk-text-center">
				<a href="{{asset('user-nemeh')}}" class="md-btn md-btn-primary uk-margin-small-top">Нэмэх</a>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<?php
$msg = Session::get('msg');
if (isset($msg)) { echo $msg; }
Session::forget('msg');
?>
<div class="md-card">
	<div class="md-card-content">
		<div class="uk-grid" data-uk-grid-margin>
			<div class="uk-width-1-1">
				<div class="uk-overflow-container">
					<table class="uk-table uk-table-align-vertical">
						<thead>
							<tr>
								<th width="5%">№</th>
								<th width="10%">Нэр</th>
								<th width="50%">Цахим хаяг</th>
								<th width="20%">Утасны дугаар</th>
								<?php if (Session::get('userid') == 1): ?>
									<th width="10%">Үйлдэл</th>
								<?php endif; ?>
							</tr>
						</thead>
						<tbody>
							<?php $i=1; ?>
							@foreach($users as $row)
								<tr>
									<td><?php echo $i++; ?></td>
									<td class="uk-text-large uk-text-nowrap">{{$row->first_name}}</td>
									<td>{{$row->email}}</td>
									<td>{{$row->phone}}</td>
									<?php if (Session::get('userid') == 1): ?>
										<td class="uk-text-nowrap">
											<a href="{{asset('/user-zasah/'.$row->id)}}"><i class="material-icons md-24">&#xE254;</i></a>
											<a href="{{asset('/users/'.$row->id)}}" class="uk-margin-left" onclick="return confirm('Are you sure want to Delete?');"><i class="material-icons md-24">&#xE872;</i></a>
										</td>
									<?php endif; ?>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
