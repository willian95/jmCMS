@extends("layouts.main")

@section("content")

    <div class="d-flex flex-column-fluid" id="dev-vacancy">
        
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
                <!--begin::Header-->
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Crear vacante
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body">
                    <div class="row">
                        
                        <div class="loader-cover-custom" v-if="loading == true">
                            <div class="loader-custom"></div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Título</label>
                                <input type="text" class="form-control" v-model="title">
                                <small style="color:red" v-if="errors.hasOwnProperty('title')">@{{ errors['title'][0] }}</small>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Países</label>
                                <select class="form-control" v-model="country">
                                    <option :value="country.id" v-for="country in countries">@{{ country.name }}</option>
                                </select>
                                <small style="color:red" v-if="errors.hasOwnProperty('country')">@{{ errors['country'][0] }}</small>
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Descripción</label>
                                <textarea rows="3" id="editor1"></textarea>
                                <small style="color:red" v-if="errors.hasOwnProperty('description')">@{{ errors['description'][0] }}</small>
                                
                            </div>
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-12">
                            <p class="text-center">
                                <button class="btn btn-success" @click="store()">Crear</button>
                            </p>
                        </div>
                    </div>


                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->


    </div>

@endsection

@push("scripts")

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    <script>
        
        const app = new Vue({
            el: '#dev-vacancy',
            data(){
                return{
                    title:"",
                    description:"",
                    country:"",
                    errors:[],
                    countries:[],
                    loading:false,
                }
            },
            methods:{
                
                fetchCountries(){

                    axios.get("{{ url('/countries/all') }}").then(res => {

                        this.countries = res.data.countries

                    })

                },
                store(){

                    this.description = CKEDITOR.instances.editor1.getData()

                    this.loading = true
                    axios.post("{{ url('/vacancies/store') }}", {title:this.title, description: this.description, "country": this.country}).then(res => {
                    this.loading = false
                        if(res.data.success == true){

                            swal({
                                title: "Excelente!",
                                text: res.data.msg,
                                icon: "success"
                            }).then(function() {
                                window.location.href = "{{ url('/vacancies') }}";
                            });
                            

                        }else{
                            
                            swal({

                                text: res.data.msg,
                                icon: "error"
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

                let options = {
                    filebrowserUploadUrl:"{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
                    filebrowserUploadMethod: 'form',
                    language:"es"
                }

                CKEDITOR.replace('editor1', options);

                this.fetchCountries()

            }
        })
    
    </script>

@endpush