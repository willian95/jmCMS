@extends("layouts.main")

@section("content")

<div class="d-flex flex-column-fluid" id="dev-appliance-list">

<!--begin::Container-->
<div class="container">
    <!--begin::Card-->
    <div class="card card-custom">
        <!--begin::Header-->
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">Propuestas
            </div>
            <div class="card-toolbar">
                <!--begin::Dropdown-->
                {{--<div class="dropdown dropdown-inline mr-2">
                    <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="svg-icon svg-icon-md">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3"></path>
                                <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000"></path>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>Export</button>
                    <!--begin::Dropdown Menu-->
                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                        <!--begin::Navigation-->
                        <ul class="navi flex-column navi-hover py-2">
                            <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="la la-print"></i>
                                    </span>
                                    <span class="navi-text">Print</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="la la-copy"></i>
                                    </span>
                                    <span class="navi-text">Copy</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="la la-file-excel-o"></i>
                                    </span>
                                    <span class="navi-text">Excel</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="la la-file-text-o"></i>
                                    </span>
                                    <span class="navi-text">CSV</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                        <i class="la la-file-pdf-o"></i>
                                    </span>
                                    <span class="navi-text">PDF</span>
                                </a>
                            </li>
                        </ul>
                        <!--end::Navigation-->
                    </div>
                    <!--end::Dropdown Menu-->
                </div>--}}
                <!--end::Dropdown-->
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body">
            <!--begin: Datatable-->
            {{--<div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Ordenar por:</label>
                        <select class="form-control" v-model="orderBy" @change="fetch()">
                            <option value="desc">Recientes</option>
                            <option value="asc">Antiguos</option>
                        </select>
                    </div>
                </div>
            </div>--}}
            <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded" id="kt_datatable" style="">
                <table class="table">
                    <thead>
                        <tr >
                            <th class="datatable-cell datatable-cell-sort">
                                <span style="width: 250px;">Vacante</span>
                            </th>
                            <th class="datatable-cell datatable-cell-sort" style="width: 250px;">
                                <span style="width: 130px;">Nombre</span>
                            </th>
                            <th class="datatable-cell datatable-cell-sort">
                                <span style="width: 250px;">Email</span>
                            </th>
                            <th class="datatable-cell datatable-cell-sort">
                                <span style="width: 250px;">Tel??fono</span>
                            </th>
                            <th class="datatable-cell datatable-cell-sort">
                                <span style="width: 130px;">Acciones</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="appliance in appliances">
                            <td class="datatable-cell">
                                @{{ appliance.title }}
                            </td>
                            <td>
                                @{{ appliance.name }}
                            </td>
                            <td>
                                @{{ appliance.email }}
                            </td>
                            <td>
                                @{{ appliance.phone }}
                            </td>
                            <td>
                                <a :href="appliance.cv" target="_blank" class="btn btn-info">CV</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="kt_datatable_info" role="status" aria-live="polite">Mostrando p??gina @{{ page }} de @{{ pages }}</div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_full_numbers" id="kt_datatable_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="kt_datatable_previous" v-if="page > 1">
                                    <a href="#" aria-controls="kt_datatable" data-dt-idx="1" tabindex="0" class="page-link">
                                        <i class="ki ki-arrow-back"></i>
                                    </a>
                                </li>
                                <li class="paginate_button page-item active" v-for="index in pages">
                                    <a href="#" aria-controls="kt_datatable" tabindex="0" class="page-link":key="index" @click="fetch(index)" >@{{ index }}</a>
                                </li>
                                
                                <li class="paginate_button page-item next" id="kt_datatable_next" v-if="page < pages" href="#">
                                    <a href="#" aria-controls="kt_datatable" data-dt-idx="7" tabindex="0" class="page-link" @click="fetch(page + 6)">
                                        <i class="ki ki-arrow-next"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--end: Datatable-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Card-->
</div>
<!--end::Container-->

</div>

@endsection

@push("scripts")

    <script>
        
        const app = new Vue({
            el: '#dev-appliance-list',
            data(){
                return{
                    appliances:[],
                    pages:0,
                    page:1,
                    loading:false
                }
            },
            methods:{
                
                fetch(page = 1){

                    this.page = page

                    axios.get("{{ url('/appliances/fetch/') }}"+"/"+page)
                    .then(res => {

                        this.appliances = res.data.appliances
                        this.pages = Math.ceil(res.data.appliancesCount / res.data.dataAmount)

                    })
                    

                }


            },
            mounted(){
                
                this.fetch()

            }

        })
    
    </script>

@endpush