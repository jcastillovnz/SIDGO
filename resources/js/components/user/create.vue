<template>
<div class="">


<button @click="show()"  class="btn btn-primary btn-sm float-right"> 
<i class="fas fa-plus-circle text-white"></i> 
</button>



<!-- Modal -->
<div class="modal fade" id="UserCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

  <h4>Registrar usuario </h4>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre</label>
      <input required="" type="text" class="form-control" v-model="user.nombre"  placeholder="Nombre">
    </div>


    <div class="form-group col-md-6">
      <label for="inputPassword4">Apellido</label>



      <input required="" type="text" class="form-control" v-model="user.apellido"  placeholder="Apellido">

   
    </div>

     <div class="form-group col-md-6">
      <label for="inputEmail4">Telefono</label>
      <input type="text" class="form-control" v-model="user.telefono"  placeholder="Telefono">
    </div>

 <div class="form-group col-md-6">
      <label for="inputEmail4"> Email</label>

      <input type="email" class="form-control" autocomplete="ÑÖcompletes" v-model="user.email"  v-on:keyup="monitor(this)"   placeholder="Email">
    </div>


  </div>


<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail4">Compañia liquidadora</label>
 <select  class="form-control" v-model="user.liquidadora_id" >
 <option selected="" value="">Seleccione liquidadora</option>
 <option v-for="liquidadora in $store.state.liquidadoras" :value="liquidadora.id"> 
 {{liquidadora.nombre}}  {{liquidadora.id}}                 </option>
 </select>
 </div>


<div class="form-group col-md-6">
<label for="inputEmail4">Rol de usuario</label>

<select required="" v-model="user.rol"  class="form-control form-control"> 
<option selected="" value="">Seleccione Rol</option>
  <option value="2"> Analista </option>
                        <option value="3"> Inspector </option>
                        <option value="2"> Analista </option>
                        <option value="1"> Supervisor </option>
                        <option value="0"> Administrador </option>
</select>

</div>
</div>

<div class="form-row">

<div class="form-group col-md-6">
<label for="inputEmail4">Estatus</label>
<select required="" v-model="user.estatus"  class="form-control form-control"> 
<option               value="">Seleccione estatus</option>
<option value="1">Activo</option>
<option value="0">Inactivo</option>
</select>
 </div>

<div class="form-group col-md-6">
<label for="inputEmail4">Contraseña</label>
<input autocomplete="new-password" value="" class="form-control" type="password" v-model="user.password"   placeholder="Contraseña">
</div>

</div>


</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
<button  type="submit" class="btn btn-primary">

<i  v-if="user.loader==1"  class="spinner-border spinner-border-sm"></i>
<i v-else="user.loader==0" class="fas fa-save"   ></i>


 </button>
</div>


</form>
</div>
</div>
</div>







    </div>
</template>

<script>

import Vue from 'vue'
import Vuex from 'vuex'
Vue.use(Vuex)

import Swal from 'sweetalert2/dist/sweetalert2.js'



    export default {
        mounted() {
    
        },

data () {


return {


user: { 
    'id':'',
    'img':'',
    'nombre':'',
    'apellido':'',
    'telefono':'',
    'email':'',
    'rol':'',
    'estatus':'',
    'password':'',
    'loader':'0',
    'state': '0',
    'confirmPassword':'',
    ////////////////
    'liquidadora_id':''
   },



pagination:{
'total': 0,
'current_page': 0,
'per_page': 0,
'last_page': 0,
'from': 0,
'to': 0
}
}

}
, 

methods : {

...Vuex.mapMutations(['getliquidadoras']),

show: function()  {
this.getliquidadoras();
$('#UserCreate').modal('show');
 },
create: function() {

var that = this;
this.user.loader="1";


axios.post('/user/create', {

nombre: this.user.nombre,
apellido: this.user.apellido,
email: this.user.email,
telefono: this.user.telefono,
liquidadora_id: this.user.liquidadora_id,
rol: this.user.rol,
estatus: this.user.estatus,
password: this.user.password


  })
  .then(function (response) {


if (response.data == "true") {

$('#UserCreate').modal('hide')

that.$emit('todosusers')
Swal.fire({
 type: 'success',
 showConfirmButton: false,
  timer: 1200
})




that.clear();

that.user.loader="0";

}
else{


$('#UserCreate').modal('hide')

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
    console.log(error);
  });




},


clear: function(){
this.user.id       = '';
this.user.img      = '';
this.user.nombre   = '';
this.user.apellido = '';
this.user.email   = '';
this.user.telefono = '';
this.user.rol    = '';
this.user.estatus    = '';
this.user.liquidadora_id= '';
this.user.password= '';

 },




monitor: function(e) {
var that = this;

axios({
url: '/user/monitor/',
method: 'get',
params: {
email: this.user.email
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
