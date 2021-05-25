@extends('layout.master')

@section('content')

<div class="md-card">
	<div class="md-card-content">
		<div class="uk-grid" data-uk-grid-margin>
			<div class="uk-width-1-1">
				<div class="uk-overflow-container">
					<table class="uk-table uk-table-align-vertical">
						<thead>
							<tr>
								<th>Image</th>
								<th>Product Name</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Status</th>
								<th>Active</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><img class="img_thumb" src="assets/img/ecommerce/s6_edge_3.jpg" alt=""></td>
								<td class="uk-text-large uk-text-nowrap"><a href="ecommerce_product_details.html">Adipisci quia error.</a></td>
								<td class="uk-text-nowrap">$ 514.00</td>
								<td>74</td>
								<td class="uk-text-nowrap"><span class="uk-badge uk-badge-success">In stock</span></td>
								<td></td>
								<td class="uk-text-nowrap">
									<a href="ecommerce_product_details.html"><i class="material-icons md-24">&#xE8F4;</i></a>
									<a href="#" class="uk-margin-left"><i class="material-icons md-24">&#xE872;</i></a>
								</td>
							</tr>
							<tr>
								<td><img class="img_thumb" src="assets/img/ecommerce/s6_edge_2.jpg" alt=""></td>
								<td class="uk-text-large uk-text-nowrap"><a href="ecommerce_product_details.html">Qui aspernatur.</a></td>
								<td class="uk-text-nowrap">$ 507.00</td>
								<td>79</td>
								<td class="uk-text-nowrap"><span class="uk-badge uk-badge-success">In stock</span></td>
								<td><i class="material-icons md-color-light-blue-600 md-24">&#xE86C;</i></td>
								<td class="uk-text-nowrap"><a href="ecommerce_product_details.html"><i class="material-icons md-24">&#xE8F4;</i></a>
									<a href="#" class="uk-margin-left"><i class="material-icons md-24">&#xE872;</i></a>
								</td>
							</tr>
							<tr>
								<td><img class="img_thumb" src="assets/img/ecommerce/s6_edge_3.jpg" alt=""></td>
								<td class="uk-text-large uk-text-nowrap"><a href="ecommerce_product_details.html">Impedit ducimus ut.</a></td>
								<td class="uk-text-nowrap">$ 594.00</td>
								<td>54</td>
								<td class="uk-text-nowrap"><span class="uk-badge uk-badge-muted">Ships in 3-5 days</span></td>
								<td></td>
								<td class="uk-text-nowrap">
									<a href="ecommerce_product_details.html"><i class="material-icons md-24">&#xE8F4;</i></a>
									<a href="#" class="uk-margin-left"><i class="material-icons md-24">&#xE872;</i></a>
								</td>
							</tr>
							<tr>
								<td><img class="img_thumb" src="assets/img/ecommerce/s6_edge_2.jpg" alt=""></td>
								<td class="uk-text-large uk-text-nowrap"><a href="ecommerce_product_details.html">Laudantium magni tempora hic.</a></td>
								<td class="uk-text-nowrap">$ 522.00</td>
								<td>14</td>
								<td class="uk-text-nowrap"><span class="uk-badge uk-badge-danger">Out of stock</span></td>
								<td><i class="material-icons md-color-light-blue-600 md-24">&#xE86C;</i></td>
								<td class="uk-text-nowrap">
									<a href="ecommerce_product_details.html"><i class="material-icons md-24">&#xE8F4;</i></a>
									<a href="#" class="uk-margin-left"><i class="material-icons md-24">&#xE872;</i></a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<ul class="uk-pagination uk-margin-medium-top uk-margin-medium-bottom">
					<li class="uk-disabled"><span><i class="uk-icon-angle-double-left"></i></span></li>
					<li class="uk-active"><span>1</span></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><span>&hellip;</span></li>
					<li><a href="#">20</a></li>
					<li><a href="#"><i class="uk-icon-angle-double-right"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

@endsection
