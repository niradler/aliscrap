@extends('layouts.app')

@section('content')
<div class="col-md-8 col-lg-8">
	<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Add new product </h3>
										
									
										
										<h6 class="card-subtitle mb-2 text-muted"></h6>
										
										<form class="form-horizontal" action="{{ route('products') }}" method="POST">
										 {{ csrf_field() }}
											<fieldset>
											<div class="row">
											<div class="col-6">
												<div class="form-group">
													<label class="col-12 control-label no-padding" for="name">Name</label>
													
													<div class="col-12 no-padding">
														<input id="name" name="pname" type="text" placeholder="Red t-shirt" class="form-control" required>
													</div>
												</div>

												<div class="form-group">
													<label class="col-12 control-label no-padding" for="name">Product page link</label>
													
													<div class="col-12 no-padding">
														<input id="link" name="link" type="url" placeholder="link" class="form-control" required>
													</div>
												</div>

																								<div class="form-group">
													<label class="col-12 control-label no-padding" for="name">Image url</label>
													
													<div class="col-12 no-padding">
														<input id="image" name="image" type="url" placeholder="" class="form-control" required>
													</div>
												</div>

																								<div class="form-group">
													<label class="col-12 control-label no-padding" for="name">Description</label>
													
													<div class="col-12 no-padding">
														<input id="Description" name="description" type="text" placeholder="kids red t-shirt" class="form-control" required>
													</div>
												</div>
											</div>
										
											<div class="col-6">
												<div class="form-group">
													<label class="col-12 control-label no-padding" for="name">Keywords</label>
													
													<div class="col-12 no-padding">
														<input id="Keywords" name="keywords" type="text" placeholder="red t-shirt, kids fashion" class="form-control" required>
													</div>
												</div>

												<div class="form-group">
													<label class="col-12 control-label no-padding" for="name">Price</label>
													
													<div class="col-12 no-padding">
														<input id="price" name="price" type="number" placeholder="5.26" class="form-control" step="0.001" required>
													</div>
												</div>

																								<div class="form-group">
													<label class="col-12 control-label no-padding" for="name">Currency</label>
													
													<div class="col-12 no-padding">
														<input id="Currency" name="currency" type="text" placeholder="USD $" class="form-control" required>
													</div>
												</div>

																								<div class="form-group">
													<label class="col-12 control-label no-padding" for="name">Site from</label>
													
													<div class="col-12 no-padding">
														<input id="site_name" name="site_name" type="url" placeholder="http://aliexpress.com" class="form-control" required>
													</div>
												</div>
											</div>

											</div>
									
												<!-- Name input-->

												<!-- Form actions -->
												<div class="form-group">
									
													<div class="col-6 widget-right no-padding">
														<button type="submit" class="btn btn-primary btn-md float-right">Add</button>
													</div>
												</div>
											</fieldset>
										</form>
									</div>
								</div>
							
							
							</div>
<div class="col-md-12 col-lg-12">
						
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Products</h3>
										
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
														<th>Action</th>
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
														<td>
														<form class="form-horizontal" action="{{ route('products') }}/{{$product->id}}" method="POST">
														<input name="_method" type="hidden" value="DELETE">
										 {{ csrf_field() }}
														<button type="submit" class="close " aria-label="Close">
														<span aria-hidden="true">&times;</span>
														</button> 
														</form>
														</td>
													</tr>
													@endforeach
													
													
												</tbody>
											</table>
										</div>
									</div>
								</div>
								
							
							
							</div>
@endsection
