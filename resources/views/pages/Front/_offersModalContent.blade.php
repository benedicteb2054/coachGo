<div class="card card-custom gutter-b">
    <div class="card-body">
        @if(count($offers) > 0)
            @foreach($offers as $key=>$row)
                <div class="d-flex align-items-center flex-wrap">
                    <!--begin: Item-->
                    <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                        <span class="mr-4">
                            <i class="flaticon-piggy-bank icon-2x text-muted font-weight-bold"></i>
                        </span>
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-sm">Débit</span>
                            <span class="font-weight-bolder font-size-h5">
                            <span class="text-dark-50 font-weight-bold"></span>{{$row['title']}}</span>
                        </div>
                    </div>
                    <!--end: Item-->
                    <!--begin: Item-->
                    <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                        <span class="mr-4">
                            <i class="flaticon-confetti icon-2x text-muted font-weight-bold"></i>
                        </span>
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-sm">Prix</span>
                            <span class="font-weight-bolder font-size-h5">
                                {{ number_format($row['price'], '0', ',', ' ') }}
                            <span class="text-dark-50 font-weight-bold"> €</span>
                            </span>
                        </div>
                    </div>
                    <!--end: Item-->
                    <!--begin: Item-->
                    <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                        <span class="mr-4">
                            <i class="flaticon-pie-chart icon-2x text-muted font-weight-bold"></i>
                        </span>
                        <div class="d-flex flex-column text-dark-75">
                            <span class="font-weight-bolder font-size-sm">Durée</span>
                            <span class="font-weight-bolder font-size-h5">
                            <span class="text-dark-50 font-weight-bold"></span>1 Mois</span>
                        </div>
                    </div>
                    <!--end: Item-->
                    <!--begin: Item-->
                    <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                        <span class="mr-4">
                            {{-- <i class="flaticon-file-2 icon-2x text-muted font-weight-bold"></i> --}}
                        </span>
                        <div class="d-flex flex-column flex-lg-fill">
                            <div class="btn btt-lg btn-warning">
                                <i class="fas fa-shopping-cart"></i> Souscrire
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Bottom-->
                <div class="separator separator-solid my-7"></div>
            @endforeach
        @endif
    </div>
</div>
