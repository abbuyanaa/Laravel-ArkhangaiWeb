@extends('layout.master')

@section('content')

<div class="md-card">
	<div class="md-card-content">
		<div class="uk-grid" data-uk-grid-margin="">
			<div class="uk-width-medium-8-10">
				<label for="product_search_name">Xайх</label>
				<input type="text" class="md-input" id="product_search_name">
			</div>
			<div class="uk-width-medium-1-10 uk-text-center">
				<a href="#" class="md-btn md-btn-primary uk-margin-small-top">Xайх</a>
			</div>
			<div class="uk-width-medium-1-10 uk-text-center">
				<a href="{{asset('tendertorol-nemeh')}}" class="md-btn md-btn-primary uk-margin-small-top">Нэмэх</a>
			</div>
		</div>
	</div>
</div>

<div class="md-card">
	<div class="md-card-content">
		<div class="uk-grid" data-uk-grid-margin>
			<div class="uk-width-1-1">
				<div class="uk-overflow-container">
					<table class="uk-table uk-table-align-vertical" id="dt_individual_search">
						<thead>
							<tr>
								<th width="5%">№</th>
								<th width="50%">Нэр</th>
								<th width="10%">Үйлдэл</th>
							</tr>
						</thead>
						<tbody>
							<?php
							if($check_torol->Total > 0) { $i=1;
								?>
								@foreach($get_tender_turul as $row)
								<tr>
									<td><?php echo $i++; ?></td>
									<td><?php echo $row->name; ?></td>
									<td class="uk-text-nowrap">
										<a href="{{ asset('/tendertorol-zasah/'.$row->id) }}"><i class="material-icons md-24">&#xE254;</i></a>
										<a href="{{ asset('/tendertorol-delid/'.$row->id) }}" class="uk-margin-left" onclick="return confirm('Are you sure want to delete?')"><i class="material-icons md-24">&#xE872;</i></a>
									</td>
								</tr>
								@endforeach
							<?php } else { ?>
								<tr><td colspan="3" align="center">Мэдээлэл байхгүй!</td></tr>
							<?php } ?>
							
						</tbody>
					</table>
				</div>
				
			</div>
		</div>
	</div>
</div>

@endsection
