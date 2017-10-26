@extends('layouts.app')

@section('content')
<div class="col-md-12 col-lg-12">
								<div class="jumbotron">
									<h1 class="mb-4">Hi DropShipper</h1>
									
									<p class="lead">
									Aliscrap is a simple solution to import products from aliexpress, at the moment we supporting wooCommerce site only.
									</p>
									
									<p>To start importing please install our chrome extension</p>
									
									<p class="lead"><a class="btn btn-primary btn-lg mt-2" href="https://chrome.google.com/webstore/detail/aliscrap/mdpaflbjhcjbmaojlnpejkhefodmjdbd" role="button" target="_blank">Install</a></p>
								</div>

								
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Recent Products</h3>
										
										{{--  <div class="dropdown card-title-btn-container">
											<button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> View All</button>
											
											<button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>
											
											<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
											    <a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
											    <a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a></div>
										</div>  --}}
										
										<div class="table-responsive">
											<table class="table table-striped">
												<thead>
													<tr>
														<th>Id</th>
														
														<th>Link</th>
														
														<th>Image</th>
														
														<th>Description</th>
														<th>From</th>
														<th>Price</th>
													</tr>
												</thead>
												
												<tbody>
												@foreach ($products as $product)
<tr>
														<td>#{{$product->id}}</td>
														
														<td> <a href="{{$product->link}}">Product link</a></td>
														
														<td> <img src="{{$product->image}}" alt="" height="55" width="55"></td>
														
														<td>
														<textarea rows="3" cols="40">{{$product->description}}</textarea>		
														
														</td>
														<td> <a href="{{$product->site_name}}">{{$product->site_name}}</a></td>
														<td>{{$product->price}} {{$product->priceCurrency}} </td>
													</tr>
													@endforeach
													
													
												</tbody>
											</table>
										</div>
									</div>
								</div>
								
							
							
							</div>
@endsection
