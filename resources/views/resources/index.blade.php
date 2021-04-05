@extends("layouts.main")

@section("content")

    <div class="d-flex flex-column-fluid" id="dev-vacancy-list">

        <div class="loader-cover-custom" v-if="loading == true">
            <div class="loader-custom"></div>
        </div>

        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
                <!--begin::Header-->
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Recursos
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
                        <!--begin::Button-->
                        <a href="#" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#resourcesModal">
                        <span class="svg-icon svg-icon-md">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <circle fill="#000000" cx="9" cy="15" r="6"></circle>
                                    <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"></path>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>Nuevo recurso</a>
                        <!--end::Button-->
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin: Datatable-->
                    <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded" id="kt_datatable" style="">
                        <table class="table">
                            <thead>
                                <tr >
                                    <th class="datatable-cell datatable-cell-sort">
                                        <span style="width: 250px;">Titulo</span>
                                    </th>
                                    <th class="datatable-cell datatable-cell-sort">
                                        <span style="width: 130px;">Acciones</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="resource in resources">
                                    <td class="datatable-cell">
                                        @{{ resource.name }}
                                    </td>
                                    <td>
                                        <a class="btn btn-success" :href="resource.filePath" target="_blank"><i class="fas fa-download"></i></a>
                                        <button class="btn btn-secondary" @click="erase(resource.id)"><i class="far fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="kt_datatable_info" role="status" aria-live="polite">Mostrando página @{{ page }} de @{{ pages }}</div>
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

        <!-- Modal-->
        <div class="modal fade" id="resourcesModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Crear recurso</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"  v-show="pictureStatus != 'subiendo'">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">titulo</label>
                            <input type="text" class="form-control" id="name" v-model="name">
                            <small v-if="errors.hasOwnProperty('name')">@{{ errors['name'][0] }}</small>

                            <label for="type">Archivo</label>
                            <input type="file" class="form-control" ref="file" @change="onResourceFileChange" style="overflow: hidden;" id="fileInput">
                            <small v-if="errors.hasOwnProperty('file')">@{{ errors['file'][0] }}</small>

                            <div v-if="fileType != ''">
                                <div v-if="fileType == 'image'">
                                    <img :src="resourceFilePreview" alt="" class="w-100">
                                </div>
                                <div v-if="fileType == 'video'">
                                    <video controls class="w-100">
                                        <source :src="resourceFilePreview">
                                    </video>
                                </div>
                                <div v-if="fileType != 'image' && fileType != 'video'">
                                    <div class="w-100 text-center">
                                        <i class="far fa-file"></i>
                                    </div>
                                </div>
                            </div>

                            <div v-if="pictureStatus == 'subiendo'" class="progress-bar progress-bar-striped" role="progressbar" aria-valuemin="0" aria-valuemax="100" :style="{'width': `${imageProgress}%`}">
                                @{{ imageProgress }}%
                            </div>
                            
                            <p v-if="pictureStatus == 'subiendo' && imageProgress < 100">Subiendo</p>
                            <p v-if="pictureStatus == 'subiendo' && imageProgress == 100">Espere un momento</p>
                            <p v-if="pictureStatus == 'listo' && imageProgress == 100">Imágen lista</p>

                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal" v-show="pictureStatus != 'subiendo'">Cerrar</button>
                        <button type="button" class="btn btn-primary font-weight-bold"  @click="uploadResource()">Crear</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@push("scripts")

    <script>
        
        const app = new Vue({
            el: '#dev-vacancy-list',
            data(){
                return{
                    errors:[],
                    name:"",
                    resources:[],
                    pages:0,
                    page:1,
                    loading:false,

                    resourceFile:"",
                    file:"",
                    fileType:"",
                    fileName:"",
                    imageProgress:0,
                    pictureStatus:"",
                    finalPictureName:"",
                    finalType:""
                }
            },
            methods:{

                fetch(page = 1){

                    this.page = page

                    axios.get("{{ url('/resources/fetch/') }}"+"/"+page)
                    .then(res => {

                        this.resources = res.data.resources
                        this.pages = Math.ceil(res.data.resourcesCount / res.data.dataAmount)

                    })
                    

                },
                erase(id){

                    swal({
                        title: "¿Estás seguro?",
                        text: "Eliminarás este recurso!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            this.loading = true
                            axios.post("{{ url('/resources/delete/') }}", {id: id}).then(res => {
                                this.loading = false
                                if(res.data.success == true){
                                    swal({
                                        title: "Genial!",
                                        text: res.data.msg,
                                        icon: "success"
                                    });
                                    this.fetch()
                                }else{

                                    swal({
                                        title: "Lo sentimos!",
                                        text: res.data.msg,
                                        icon: "error"
                                    });

                                }

                            })

                        }
                    });

                },
                onResourceFileChange(e){
                    this.resourceFile = e.target.files[0];

                    
                    let files = e.target.files || e.dataTransfer.files;
                    if (!files.length)
                        return;
                    this.createResourceFile(files[0]);
                },

                createResourceFile(file) {

                    this.file = file
                    this.fileType = file['type'].split('/')[0]
                    this.fileName = file['name']
                    
                    if(this.fileType == "image" || this.fileType == "video"){
                        this.resourceFilePreview = URL.createObjectURL(this.resourceFile);
                    }

                    let reader = new FileReader();
                    let vm = this;
                    reader.onload = (e) => {
                        vm.resourceFile = e.target.result;
                    };
                    reader.readAsDataURL(file);
                },
                uploadResource(){
                    
                    this.imageProgress = 0;
                    
                    let formData = new FormData()
                    formData.append("file", this.file)

                    var _this = this
                    var fileName = this.fileName
                    this.pictureStatus = "subiendo";

                    var config = {
                        headers: { "X-Requested-With": "XMLHttpRequest" },
                        onUploadProgress: function(progressEvent) {
                            
                            var progressPercent = Math.round((progressEvent.loaded * 100.0) / progressEvent.total);
                        
                            _this.imageProgress = progressPercent
                            
                            
                        }
                    }

                    axios.post(
                        "{{ url('/upload/file') }}",
                        formData,
                        config                        
                    ).then(res => {
                        
                        this.pictureStatus = "listo";
                        this.finalPictureName = res.data.fileRoute
                        this.finalType = res.data.type
                        
                        this.storeResource()      
                

                    }).catch(err => {
                        
                        this.errors = err.response.data.errors

                        swal({

                            text: "Hay algunos campos que debes revisar",
                            icon: "error"
                        })
                    })

                },
                clearModal(){

                    this.pictureStatus = ""
                    this.finalPictureName = ""
                    this.resourceFile= ""
                    this.file=""
                    this.fileType=""
                    this.fileName=""
                    this.imageProgress=0,
                    this.pictureStatus=""
                    this.finalPictureName=""
                    this.name = ""
                    $("#fileInput").val(null)

                },
                closeModal(){
                    $("#resourcesModal").modal('hide')
                    $('.modal-backdrop').remove();
                },
                storeResource(){

                    this.loading = true
                    axios.post("{{ url('/resources-file/store') }}", {"name": this.name, "filePath": this.finalPictureName, "fileType": this.finalType}).then(res => {

                        this.loading = false

                        if(res.data.success == true){

                            swal({
                                text: res.data.msg,
                                icon:"success"
                            })

                            this.clearModal()
                            this.closeModal()

                        }else{
                            swal({
                                text: res.data.msg,
                                icon:"error"
                            })
                        }

                    }).catch(err => {

                        this.loading = false
                        this.errors = err.response.data.errors

                        swal({

                            text: "Hay algunos campos que debes revisar",
                            icon: "error"
                        })

                    })

                }



            },
            mounted(){
                
                this.fetch()

            }

        })
    
    </script>

@endpush