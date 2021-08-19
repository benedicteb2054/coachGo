<div class="container">
    <div class="main_title">
        <h2 class="mb-3">Ils en témoignent</h2>
        <p>
            Faites vous une idée des valeurs, compétences et l'expertise que regorge Coach&Go
        </p>
    </div>


    <div class="card card-custom gutter-b">
        <div class="card-body">
            <!--begin::Details-->
            <div class="d-flex mb-9">
                <div class="row">
                    @foreach ($reviews as $r)
                    <div class="col-lg-4">
                        <div class="col-lg-1Z">
                            <div class="d-flex mr-3">
                                <a href="#" class="text-dark-75 text-hover-primary font-size-h5 font-weight-bold mr-3">{{$r->user->firstname}} </a>
                                <a href="#">
                                    <i class="flaticon2-correct text-success font-size-h5"></i>
                                </a>
                            </div>
                            <div class="d-flex flex-wrap justify-content-between mt-1">
                                <div class="d-flex flex-column flex-grow-1 pr-8">
                                    <span class="font-weight-bold text-dark-50">
                                        {{$r->content}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach




                <!--end::Info-->
                </div>
            </div>
            <!--end::Details-->
            <div class="separator separator-solid"></div>
            <!--begin::Items-->
           





            <div class="separator separator-solid"></div>
            <!--begin::Items-->
            
        </div>
    </div>
</div>
