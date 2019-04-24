<template>
    <div>
        <div class="d-flex align-items-center">
            <div class="text-uppercase mt-10">
                <a href="javascript:void(0)" class="primary_btn" data-toggle="modal" data-target="#consultant">
                    Бесплатная консультация
                </a>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="consultant" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="margin-top: 10%;" role="document">
                <div class="modal-content">

                    <div class="d-flex justify-content-end mr-3 mt-3">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="col-lg-12">
                            <form class="row contact_form" method="post"  @submit.prevent="storeConsultForm">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Ваше имя *" v-model="formData.name" required>
                                        <div class="error" v-show="errors.name">
                                           Минимум 3 символа
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Ваш контактный номер *"  v-model="formData.phone" required>
                                        <div class="error" v-show="errors.phone">
                                             Минимум 7 символов
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="organization_name" name="organization_name" placeholder="Название организации"  v-model="formData.organization_name">
                                        <div class="error" v-show="errors.organization_name">
                                             Максимум 255 символов
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" id="message" rows="1" placeholder="Сообщение"  v-model="formData.message"></textarea>
                                        <div class="error" v-show="errors.message">
                                             Максимум 255 символов
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input  type="file" ref="consult_file" v-on:change="handleFileUpload" class="form-control pl-3" style="line-height: initial" name="consult_file" id="consult_file">
                                        <div class="error" v-show="errors.consult_file">
                                             Максимум 255 символов
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 text-right">
                                    <button type="submit" value="submit" class="primary_btn">Отправить заявку</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ConsultForm",
        data(){
            return{
                formData:{
                    name:'',
                    phone:'',
                    organization_name:'',
                    message:'',
                },
                consult_file:'',
                errors:[]
            }
        },
        methods:{
            storeConsultForm(){
                let formData = new FormData();
                formData.append('name',this.formData.name);
                formData.append('phone',this.formData.phone);
                formData.append('organization_name',this.formData.organization_name);
                formData.append('message',this.formData.message);
                formData.append('consult_file', this.consult_file);
                axios.post('/consult/form/submit',
                        formData,
                        {
                            headers: {
                                'Content-Type': 'multipart/form-data'
                            }
                        }
                    )
                    .then( (response) => {
                       if(response.data.status === 'success'){
                           // show thank you message.
                           console.log(response.data.status);
                           console.log(response.data.path);
                           formData.set('consilt_file',response.data.path)
                           axios.get('https://script.google.com/macros/s/AKfycbxvtxzf7YS0DUX7CVxpaIzFzW_Yd7bneJ9wa7E3HXU0g_L7oFTn/exec',formData.serialize).then( (response_2) => {
                               console.log(response_2.data);
                           });
                       }else{
                           // show errors.
                           console.log(response.data);
                           this.errors = response.data;
                       }
                    });
            },
            handleFileUpload(){
                this.consult_file = this.$refs.consult_file.files[0];
            },
        }
    }
</script>

<style scoped>
    .error{
        color: red;
        font-size: smaller;
    }
</style>