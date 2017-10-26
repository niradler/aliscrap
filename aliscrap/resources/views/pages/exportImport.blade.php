@extends('layouts.app')

@section('content')
<div class="col-md-8 col-lg-8">
	<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Export Configuration</h3>
										
									
										
										<h6 class="card-subtitle mb-2 text-muted"></h6>
										
										<form class="form-horizontal" action="{{ route('exportImport') }}/exportCsv" method="GET">
										 {{ csrf_field() }}
											<fieldset>
						
									
												<!-- Name input-->

												<!-- Form actions -->
												<div class="form-group">
									
													<div class="col-6 widget-right no-padding">
														<button type="submit" class="btn btn-primary btn-md float-right">Export</button>
													</div>
												</div>
											</fieldset>
										</form>
									</div>
								</div>
							
							
							</div>

@endsection
