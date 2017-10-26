@extends('layouts.app')

@section('content')
<div class="col-md-8 col-lg-8">
	<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Databse Configuration</h3>
										
									
										
										<h6 class="card-subtitle mb-2 text-muted"></h6>
										
										<form class="form-horizontal" action="{{ route('databases') }}" method="POST">
										 {{ csrf_field() }}
											<fieldset>
											<div class="row">
											<div class="col-6">
											@if(isset($db) && isset($db->name))
												<div class="form-group">
													<label class="col-12 control-label no-padding" for="name">Name</label>
													
													<div class="col-12 no-padding">
														<input id="name" name="dname" type="text" placeholder="Name" class="form-control" required value="{{$db->name}}">
													</div>
												</div>

												<div class="form-group">
													<label class="col-12 control-label no-padding" for="name">Host</label>
													
													<div class="col-12 no-padding">
														<input id="host" name="host" type="text" placeholder="Host" class="form-control" required value="{{$db->host}}">
													</div>
												</div>

																								<div class="form-group">
													<label class="col-12 control-label no-padding" for="name">Port</label>
													
													<div class="col-12 no-padding">
														<input id="port" name="port" type="text" placeholder="Port" class="form-control" required value="{{$db->port}}">
													</div>
												</div>


											</div>
										
											<div class="col-6">
												<div class="form-group">
													<label class="col-12 control-label no-padding" for="name">Username</label>
													
													<div class="col-12 no-padding">
														<input id="username" name="username" type="text" placeholder="Username" class="form-control" required value="{{$db->username}}">
													</div>
												</div>

												<div class="form-group">
													<label class="col-12 control-label no-padding" for="name">Password</label>
													
													<div class="col-12 no-padding">
														<input id="password" name="password" type="password" placeholder="Password" class="form-control"  required >
													</div>
												</div>
												@else
																<div class="form-group">
													<label class="col-12 control-label no-padding" for="name">Name</label>
													
													<div class="col-12 no-padding">
														<input id="name" name="dname" type="text" placeholder="Name" class="form-control" required >
													</div>
												</div>

												<div class="form-group">
													<label class="col-12 control-label no-padding" for="name">Host</label>
													
													<div class="col-12 no-padding">
														<input id="host" name="host" type="text" placeholder="Host" class="form-control" >
													</div>
												</div>

																								<div class="form-group">
													<label class="col-12 control-label no-padding" for="name">Port</label>
													
													<div class="col-12 no-padding">
														<input id="port" name="port" type="text" placeholder="Port" class="form-control" required >
													</div>
												</div>


											</div>
										
											<div class="col-6">
												<div class="form-group">
													<label class="col-12 control-label no-padding" for="name">Username</label>
													
													<div class="col-12 no-padding">
														<input id="username" name="username" type="text" placeholder="Username" class="form-control" required >
													</div>
												</div>

												<div class="form-group">
													<label class="col-12 control-label no-padding" for="name">Password</label>
													
													<div class="col-12 no-padding">
														<input id="password" name="password" type="password" placeholder="Password" class="form-control"  required >
													</div>
												</div>
										@endif
											</div>

											</div>
									
												<!-- Name input-->

												<!-- Form actions -->
												<div class="form-group">
									
													<div class="col-6 widget-right no-padding">
														<button type="submit" class="btn btn-primary btn-md float-right">Save</button>
													</div>
												</div>
											</fieldset>
										</form>
									</div>
								</div>
							
							
							</div>

@endsection
