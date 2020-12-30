<template>
     <div class="modal-body pt-0">
        <span class="text-modal text-black-50 font-italic d-block">Nos encantaria ayudar a lograr tus Objetivos.</span>
        <span class="text-modal text-black-50 font-italic">Completa el formulario y te responderemos en la brevedad posible</span>
        <form v-on:submit.prevent="onSubmit">
            <div class="form-group">
                <label for="Nombre">Nombre o Compañia</label>
                <input type="text" class="form-control" id="nombre" name="nombre" v-model="data.nombre">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" v-model="data.email">
            </div>

            <div class="form-group">
                <label for="telefono">Celular</label>
                <input type="text" class="form-control" id="telefono" name="telefono" v-model="data.telefono">
            </div>

            <div class="form-group">
                <label for="detalle">Detalle de su consulta</label>
                <textarea class="form-control" name="mensaje" rows="3" id="mensaje" v-model="data.mensaje"></textarea>
            </div>

            <div class="form-group pt-3">
                <!-- <input type="submit" class="btn btn-primary btn-block" value="Enviar Consulta"  @click.prevent="enviar"> -->
                <vue-button-spinner :is-loading="isLoading" :disabled="isLoading" :status="status"><span>ENVIAR</span></vue-button-spinner>
            </div>
        </form>

        <div class="alert alert-danger" role="alert" v-if="errors">
            <strong>Error!</strong> {{errors}}
        </div>
    </div>
</template>

<script>
import VueButtonSpinner from 'vue-button-spinner';

    export default {
        data(){
            return{
                data:{
                    nombre: '',
                    email: '',
                    telefono: '',
                    mensaje: ''
                },
                errors: '',
                valido: false,
                isLoading: false,
                status: '',
            }
        },
        components: {
            VueButtonSpinner
        },
        methods: {
            onSubmit(){
                this.validar();
                if(this.valido){
                    this.isLoading = true;
                    // Envio axios
                    axios.post('/contacto-mail', this.data)
                    .then(respuesta => {
                        this.$swal({
                            title: 'Gracias!!',
                            text: 'Su consulta ha sido enviada',
                            icon: 'success'
                        })
                        this.limpiar();
                    })
                    .catch(error => console.log(error))
                }
            },
            validar(){
                // Validacion del formulario
                const er = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                if (!this.data.nombre || !this.data.email || !this.data.telefono || !this.data.mensaje) {
                    this.errors = 'Todos los campos son obligatorios.';
                    setTimeout(() => this.errors = '', 3000);
                }else if (!er.test(this.data.email)) {
                    this.errors = 'El email debe ser valido'
                    setTimeout(() => this.errors = '', 3000);
                }else{
                    this.valido = true;
                }
            },
            limpiar(){
                $('#modalWeb').modal('hide');
                this.isLoading=false;
                this.data.nombre='';
                this.data.email='';
                this.data.telefono='';
                this.data.mensaje='';
            }
        }
    }
</script>

<style lang="scss" scoped>
    .vue-btn{
        width: 100%;
        background-color: #10C43F !important;
        color: #fff !important;
    }
</style>
