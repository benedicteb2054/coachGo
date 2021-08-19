@extends('layouts.dashboard.layout')

@section('content')
    @include('layouts.others.mobile')
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid page">
            @include('menus.menu')
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            @include('menus.top-bar')
            <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
                        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                            <div class="d-flex align-items-center flex-wrap mr-2">
                                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Coopératives Agricoles</h5>
                                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="d-flex flex-column-fluid">
                        <div class="container-fluid">
                            
                            <div class="row">
                                
                                <div class="col-lg-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b">
											<div class="card-header">
												<div class="card-title">
													<h3 class="card-label">Charges Commercialisation</h3>
												</div>
											</div>
											<div class="card-body" style="position: relative;">
												<!--begin::Chart-->
    	                                            {!! $chartCC->container() !!}
                                                        <script src="{{ $chartCC->cdn() }}"></script>
                                                    {{ $chartCC->script() }}
												<!--end::Chart-->
											<div class="resize-triggers"><div class="expand-trigger"><div style="width: 471px; height: 317px;"></div></div><div class="contract-trigger"></div></div></div>
										</div>
										<!--end::Card-->
								</div>


                                <div class="col-lg-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b">
											<div class="card-header">
												<div class="card-title">
													<h3 class="card-label">Charges Production Animale</h3>
												</div>
											</div>
											<div class="card-body" style="position: relative;">
												<!--begin::Chart-->
    	                                            {!! $chartCPA->container() !!}
                                                            <script src="{{ $chartCPA->cdn() }}"></script>
                                                    {{ $chartCPA->script() }}
     
												<!--end::Chart-->
											<div class="resize-triggers"><div class="expand-trigger"><div style="width: 471px; height: 317px;"></div></div><div class="contract-trigger"></div></div></div>
										</div>
										<!--end::Card-->
								</div>
                            

                                <div class="col-lg-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b">
											<div class="card-header">
												<div class="card-title">
													<h3 class="card-label">Charges Production végétale</h3>
												</div>
											</div>
											<div class="card-body" style="position: relative;">
												<!--begin::Chart-->
    	                                            {!! $chartCPV->container() !!}
 
                                                            <script src="{{ $chartCPV->cdn() }}"></script>
                            
                                                    {{ $chartCPV->script() }}
     
												<!--end::Chart-->
											<div class="resize-triggers"><div class="expand-trigger"><div style="width: 471px; height: 317px;"></div></div><div class="contract-trigger"></div></div></div>
										</div>
										<!--end::Card-->
								</div>


                                <div class="col-lg-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b">
											<div class="card-header">
												<div class="card-title">
													<h3 class="card-label">Charges Transformation Agricole</h3>
												</div>
											</div>
											<div class="card-body" style="position: relative;">
												<!--begin::Chart-->
    	                                            {!! $chartCTA->container() !!} 
                                                            <script src="{{ $chartCTA->cdn() }}"></script>
                                                    {{ $chartCTA->script() }}
     
												<!--end::Chart-->
											<div class="resize-triggers"><div class="expand-trigger"><div style="width: 471px; height: 317px;"></div></div><div class="contract-trigger"></div></div></div>
										</div>
										<!--end::Card-->
								</div>


                                {{-- <div class="col-lg-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b">
											<div class="card-header">
												<div class="card-title">
													<h3 class="card-label">Vente Maraichere</h3>
												</div>
											</div>
											<div class="card-body" style="position: relative;">
												<!--begin::Chart-->
    	                                            {!! $chartVM->container() !!}
 
                                                            <script src="{{ $chartVM->cdn() }}"></script>
                            
                                                    {{ $chartVM->script() }}
     
												<!--end::Chart-->
											<div class="resize-triggers"><div class="expand-trigger"><div style="width: 471px; height: 317px;"></div></div><div class="contract-trigger"></div></div></div>
										</div>
										<!--end::Card-->
								</div> --}}
                            </div>
                           
                        </div>
                    </div>

















                                   





                    
                <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
                    <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted font-weight-bold mr-2">2020©</span>
                            <a href="#" target="_blank" class="text-dark-75 text-hover-primary">PAVPHA</a>
                        </div>
                        <div class="nav nav-dark">
                            <a href="#" target="_blank" class="nav-link pl-0 pr-5">Termes & Conditions</a>
                            <a href="#" target="_blank" class="nav-link pl-0 pr-0">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection