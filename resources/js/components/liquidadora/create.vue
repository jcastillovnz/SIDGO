<template>
<div class="">

<button @click="show()"  class="btn btn-primary btn-sm float-right"> 
<i class="fas fa-plus-circle text-white"></i> 
</button>






<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="liquidadoraCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

<form class="" autocomplete="off"  role="form" v-on:submit.prevent="create()" method="POST" >


      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


<div class="modal-body">

<div class="container">

  <h4>Registrar liquidadora </h4>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre de empresa</label>
      <input required="" type="text" class="form-control" v-model="liquidadora.nombre"  placeholder="Nombre de empresa">
    </div>


    <div class="form-group col-md-6">
      <label for="inputPassword4">Telefono fijo</label>
      <input required="" type="text" class="form-control" v-model="liquidadora.telefono_fijo"  placeholder="Telefono fijo">
    </div>


  <div class="form-group col-md-6">
      <label for="inputPassword4">Telefono celular</label>
      <input required="" type="text" class="form-control" v-model="liquidadora.telefono_celular"  placeholder="Telefono celular">
    </div>



 <div class="form-group col-md-6">
      <label for="inputEmail4"> Email</label>

      <input type="email" class="form-control" autocomplete="ÑÖcompletes" v-model="liquidadora.email"   v-on:keyup="monitor(this)"   placeholder="Email">
    </div>


  </div>





<div class="form-row">

<div class="form-group col-md-6">
<label for="inputEmail4">Ciudad</label>

  <input type="text" class="form-control"  v-model="liquidadora.ciudad"     placeholder="Ciudad">


 </div>


<div class="form-group col-md-6">
<label for="inputEmail4">Codigo postal</label>

  <input type="text" class="form-control"  v-model="liquidadora.codigo_postal"    placeholder="Codigo postal">
</div>










<div class="form-group col-md-12">
<label for="inputEmail4">Direccion</label>

  <input type="text" class="form-control"  v-model="liquidadora.direccion"    placeholder="Direccion">
</div>




</div>









</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
<button  type="submit" class="btn btn-primary">


<i  v-if="liquidadora.loader==1"  class="spinner-border spinner-border-sm"></i>
<i v-else="liquidadora.loader==0" class="fas fa-save"   ></i>

</button>
</div>
</form>
</div>
</div>
</div>







    </div>
</template>

<script>
import Swal from 'sweetalert2/dist/sweetalert2.js'



    export default {
        mounted() {
      
        },

data () {


return {


liquidadora: { 
    'id':'',
    'img':'',
    'nombre':'',
    'telefono_fijo':'',
    'telefono_celular':'',
    'email':'',
    'ciudad':'',
    'codigo_postal':'',
    'direccion':'',
    'loader':'0',
    ////////////////
    'users_id':''
   },

}

}
, 

methods : {



show: function()  {
$('#liquidadoraCreate').modal('show');
 },



create: function(e) {
this.liquidadora.loader="1";
var that =this;
axios.post('/liquidadora/create', {

nombre: this.liquidadora.nombre,
telefono_fijo: this.liquidadora.telefono_fijo,
telefono_celular: this.liquidadora.telefono_celular,
email: this.liquidadora.email,
ciudad: this.liquidadora.ciudad,
codigo_postal: this.liquidadora.codigo_postal,
direccion: this.liquidadora.direccion,
password: this.liquidadora.password,
 })
  .then(function (response) {

if (response.data == "true") {
$('#liquidadoraCreate').modal('hide')
Swal.fire({
 type: 'success',
 showConfirmButton: false,
  timer: 1200
})

that.$emit('todasliquidadoras');

that.liquidadora.loader="0";
that.clear();
}
else{
$('#liquidadoraCreate').modal('hide')

Swal.fire({
 type: 'error',
  text: "Hubo un problema, intenta mas tarde!",
  icon: "info",
 showConfirmButton: false,
  timer: 2000
})
that.clear();
that.user.loader="0";
}

})
  .catch(function (error) {
  });
},

clear: function()  {


this.liquidadora.id       = '';
this.liquidadora.img      = '';
this.liquidadora.nombre   = '';
this.liquidadora.email    = '';
this.liquidadora.telefono_fijo    = '';
this.liquidadora.telefono_celular    = '';
this.liquidadora.ciudad    = '';
this.liquidadora.direccion    = '';
this.liquidadora.codigo_postal    = '';
this.liquidadora.users_id= '';

 },




monitor: function(e) {
var that = this;

axios({
url: '/liquidadora/monitor/',
method: 'get',
params: {
email: this.liquidadora.email
}
}).then(function (response) {
if (response.data =="true") {
that.user.email = '';
Swal.fire({
 type: 'error',
  text: "Ya existe este email, intenta con otro!",
  icon: "info",
 showConfirmButton: false,
  timer: 1500
})
}
})


},




}
}
</script>
