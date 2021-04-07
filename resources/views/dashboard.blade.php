@extends("layouts.main")

@section("content")

    <div class="d-flex flex-column-fluid" id="dev-format">
        <div class="container">

            <div class="row" style="margin-top: 10px; margin-bottom: 10px;">
                
                <div class="col-md-6">
                    
                    <div class="card card-custom bg-gray-100 card-stretch gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0 bg-primary py-5">
                            <h3 class="card-title font-weight-bolder text-white">Vacancies: {{ App\Models\Vacancy::count() }}</h3>
                            
                        </div>
                        <!--end::Header-->
                       
                    </div>

                </div>
                <div class="col-md-6">
                    
                    <div class="card card-custom bg-gray-100 card-stretch gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0 bg-primary py-5">
                            <h3 class="card-title font-weight-bolder text-white">Vacancies replied: {{ App\Models\Appliance::count() }}</h3>
                            
                        </div>
                        <!--end::Header-->
                       
                    </div>

                </div>

                
            </div>
                    
        </div>
    </div>

@endsection