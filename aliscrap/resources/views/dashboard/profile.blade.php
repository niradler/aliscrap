@extends('layouts.app')

@section('content')
<div class="col-md-8 col-lg-8">
	<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Profile </h3>
										
									
										
										<h6 class="card-subtitle mb-2 text-muted"></h6>
										
										<form class="form-horizontal" action="{{ route('profile') }}" method="POST">
										 {{ csrf_field() }}
											<fieldset>
												<!-- Name input-->
												<div class="form-group">
													<label class="col-12 control-label no-padding" for="name">Name</label>
													
													<div class="col-12 no-padding">
														<input id="name" name="name" type="text" placeholder="Your name" value="{{$user->name}}" class="form-control">
													</div>
												</div>
											
												<!-- Email input-->
												<div class="form-group">
													<label class="col-12 control-label no-padding" for="email">Your E-mail</label>
													
													<div class="col-12 no-padding">
														<input id="email" name="email" type="text" placeholder="Your email" value="{{$user->email}}" class="form-control">
													</div>
												</div>

													<div class="form-group">
													<label class="col-12 control-label no-padding" for="email">Key</label>
													
													<div class="col-12 no-padding">
														<input id="Key" name="Key" type="text" placeholder="Key" value="{{$user->key}}" class="form-control" disabled>
													</div>
												</div>

												<!-- Form actions -->
												<div class="form-group">
													<div class="col-6 widget-left no-padding">
														  <a href="{{ route('logout') }}" class="btn btn-warning btn-md float-left"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           Logout
                                        </a>
														
													</div>
													<div class="col-6 widget-right no-padding">
														<button type="submit" class="btn btn-primary btn-md float-right">Update</button>
													</div>
												</div>
											</fieldset>
										</form>
									</div>
								</div>
							
							
							</div>
@endsection
