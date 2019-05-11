<template>
    <div class="">



 <!-- USUARIOS -->
      <div class="row mt-5" >      <!-- Table -->
   
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">

              <h3 class="mb-0">Usuarios</h3>
            </div>
            <div class="table-responsive" >
       


   <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>

                   
                    <th scope="col">Nombre</th>

                    <th scope="col">Rol</th>
                    <th scope="col">Liquidadora</th>
                    <th scope="col">Estatus</th>
                 
                    <th scope="col"> 




<createuser @todosusers="getUsers()"  > </createuser>




                  </th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="user in users" >

                    <th scope="row">
                   <div class="media align-items-center">
                        <a href="" class="avatar rounded-circle mr-3">
                     
    
                   <img  width="48" height="48" v-if="user.img" class="rounded-circle"  :src="'/img/fotos/'+user.img" >
                   <img  width="48" height="48"  v-else   class="rounded-circle"  src="img/icons/user.svg" >


</a>
                       <div class="media-body">
                          <a href="">
                          <span class="mb-0 text-sm">  
                           {{user.name}} {{user.lastname}}

                          </span>
                           </a>
                        </div>
                    </div>
                    </th>
                    <td>


          <span v-show="user.rol =='3'"> Inspector</span>
          <span v-show="user.rol == '2'"> Analista</span>
          <span v-show="user.rol =='1'"> Supervisor</span>
          <span v-show="user.rol == '0'"> Administrador</span>
      
      
                  </td>
                  <td>

                    <span v-if="user.liquidadora===null">
                    Sin asignar
                    </span>

                    <span v-else="">
                   {{user.liquidadora.nombre}}
                    </span>
                   
                   


                  </td>
                  <td>
                 <span class="badge badge-dot mr-4">
          <i   v-bind:class="{ 'bg-success': user.estatus == '1','bg-warning': user.estatus == '0' }"></i> 

          <span v-show="user.estatus == '1'"> Activo</span>
          <span v-show="user.estatus == '0'"> Inactivo</span>

                 </span>
                 </td>
             
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a  @click="edit(user)" class="dropdown-item" >Editar</a>
                          <a @click="confirmar(user)" class="dropdown-item"  >Eliminar</a> 
                        </div>
                      </div>
                    </td>
                  </tr>

                </tbody>
              </table>

            </div>
            <div class="card-footer py-4">




        <nav     aria-label="...">
                <ul v-show="pagination.total>5" class="pagination justify-content-end mb-0">
                  <li v-if="pagination.current_page >1" class="page-item ">



                    <a   @click.prevent="changePage(pagination.current_page - 1)"   class="page-link">




                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>


                  <li v-for="page in  pagesNumber"  v-bind:class="'page-item '+[page== isActived ?  'active': '' ]"  >
                  <a @click.prevent="changePage(page)" class="page-link" href=""> {{page}} 
                  </a>
                  </li>



                  <li  v-if="pagination.current_page <pagination.last_page"  class="page-item">
                  <a  @click.prevent="changePage(pagination.current_page + 1)"    class="page-link">
                  <i class="fas fa-angle-right"></i>
                  <span class="sr-only">Next</span>
                    </a>
                  </li>



                </ul>
              </nav>



            </div>
          </div>
        </div>
      </div>



<!-- EDITAR USUARIO -->
<!-- Modal -->


<div class="modal fade"   id="UserEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<form class="" autocomplete="off" v-on:submit.prevent="update()"  role="form"  method="PUT" >
<div class="modal-header">  
<button     type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="container">
<h4>Editar usuario </h4>
<div class="">
<div class="col-sm-12 ">
        <a href="">
         <img  width="180" height="180" v-if="user.img" class="rounded-circle rounded mx-auto d-block"  :src="'/img/fotos/'+user.img" >
         <img  width="180" height="180"  v-else   class="rounded-circle mx-auto d-block" :src="'/img/user.png'"> 
        </a>
</div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail4">Nombre</label>
<input required="" type="text" class="form-control" v-model="user.nombre"  placeholder="Nombre">
</div>

<div class="form-group col-md-6">
<label for="inputPassword4">Apellido</label>
<input required="" type="text" class="form-control"  v-model="user.apellido"  placeholder="Apellido">
</div>
<div class="form-group col-md-6">
<label for="inputEmail4">Telefono</label>
<input type="text" class="form-control"  v-model="user.telefono"  placeholder="Telefono">
</div>

<div class="form-group col-md-6">
<label for="inputEmail4"> Email</label>
<input type="email" class="form-control" autocomplete="ÑÖcompletes" v-model="user.email"    placeholder="Email">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail4">Compañia liquidadora</label>
<select  v-model="user.liquidadora_id"  class="form-control form-control"> 

<option selected="" value="">Seleccione liquidadora</option>

<option v-for="liquidadora in $store.state.liquidadoras"  :value="liquidadora.id"> {{liquidadora.nombre}} </option>

</select>
 </div>


<div class="form-group col-md-6">
<label for="inputEmail4">Tipo de usuario</label>
<select required=""  v-model="user.rol"  class="form-control form-control"> 
<option selected="" value="">Seleccione rol</option>
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
<select required="" v-model="user.estatus"   class="form-control form-control"> 
<option   value="">Seleccione estatus</option>
<option  value="1">Activo</option>
<option   value="0">Inactivo</option>
</select>
</div>

<div class="form-group col-md-6">
<label for="inputEmail4">Contraseña</label>
<input autocomplete="new-password" value="" class="form-control" type="password"    placeholder="Contraseña">
</div>

</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary"   data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
<button  type="submit" class="btn btn-primary">

<i  v-if="user.loader==1"  class="spinner-border spinner-border-sm"></i>
<i v-else="user.loader==0" class="fas fa-save"   ></i>


 </button>
</div>


</form>
</div>


</div>
</div>

<!-- EDITAR USUARIO -->


    </div>
</template>

<script>

import Vue from 'vue'
import Vuex from 'vuex'
Vue.use(Vuex)

import Swal from 'sweetalert2/dist/sweetalert2.js'


    export default {
        mounted() {
this.getUsers();

this.getliquidadoras();


        },

 props: ['new'],   

data () {

return {

liquidadoras : [],
users: [],
user: { 
    'id':'',
    'img':'',
    'nombre':'',
    'apellido':'',
    'telefono':'',
    'email':'',
    'tipo':'',
    'estatus':'',
    'password':'',
    'loader':'0',
    'state': '0',
  
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
computed:{
isActived: function () {
 return  this.pagination.current_page;
},
pagesNumber: function () {
if (!this.pagination.to) {
return [];
}
var from = this.pagination.current_page - 2;

if (from <1) {
  from=1;
}

var to = from + (2*2 );
if (to >=this.pagination.last_page) {

to =this.pagination.last_page

}

var pagesArray = [];

while ( from <= to){
pagesArray.push(from);
from++;
}
return pagesArray;

}

}
,
methods: {

...Vuex.mapMutations(['getliquidadoras','disminuir']),




getUsers: function(dato)  {
var urlUsers = '/users/get';
axios.get(urlUsers).then(response => {
this.users   = response.data.users.data;
this.pagination=  response.data.pagination;
this.liquidadoras=  response.data.liquidadoras;
});
},

edit: function(user)  {


$('#UserEdit').modal('show');
this.user.id       = user.id;
this.user.img      = user.img;
this.user.nombre   = user.name;
this.user.apellido = user.lastname;
this.user.email    = user.email;
this.user.telefono    = user.phone;
this.user.rol     = user.rol;
this.user.estatus     = user.estatus;
this.user.liquidadora_id= user.liquidadora_id;


},

update: function(user)  {
var that = this;
this.user.loader=1;

axios.put('user/update', { 
id: this.user.id,
nombre: this.user.nombre,
apellido: this.user.apellido,
email: this.user.email,
telefono: this.user.telefono,
rol: this.user.rol,
password: this.user.password,
ciudad : this.user.ciudad,
direccion:this.user.direccion,
codigo_postal:this.user.codigo_postal,
liquidadora_id:this.user.liquidadora_id,
estatus:this.user.estatus,


  })
  .then(function (response) {

$('#UserEdit').modal('hide');


if (response.data == "true") {
that.user.loader=0;
that.getUsers();
Swal.fire({
 type: 'success',
 showConfirmButton: false,
  timer: 1000
})

}
else{
Swal.fire({
 type: 'error',
  text: "Hubo un problema, intenta mas tarde!",
  icon: "info",
 showConfirmButton: false,
  timer: 1000
})
that.user.edicion=1;

that.getUsers();

}

}).catch(function (error) {


  });


 },




confirmar: function(user) {

var that =this;
const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-primary',
    cancelButton: 'btn btn-secundary'
  },
  buttonsStyling: false,
})
swalWithBootstrapButtons.fire({
  title: '¿Estas seguro?',
  text: 'Quieres eliminar a '+user.name+  ' '+user.lastname+ ' ?',

  showCancelButton: true,
  confirmButtonText: 'Si, Eliminarlo!',
  cancelButtonText: 'No, cancelar!',
  reverseButtons: false
}).then((result) => {
  if (result.value) {
that.deleteUser(user);
} else if (
    // Read more about handling dismissals
    result.dismiss === Swal.DismissReason.cancel
  ) {
  }
})
},

changePage: function (page) {
this.pagination.current_page=page;
this.paginar(page);
}
,
paginar: function (page) {
axios({
  url: '/users/get?page='+page,
  method: 'get',
  params: {
id: ''
  }
}).then(response => {
  this.users = response.data.users.data
  this.pagination=  response.data.pagination
});
},




deleteUser: function(user)  {
var that = this;

axios.get('/user/delete/'+user.id+'')
  .then(function (response) {

if (response.data.dato == 1) {
Swal.fire({
 type: 'success',
 showConfirmButton: false,
  timer: 700
})
that.getUsers();
}else

{
Swal.fire({
 type: 'error',
  text: "Hubo un problema, intenta mas tarde!",
  icon: "info",
 showConfirmButton: false,
  timer: 1500
})
}
});
 },





}














    }
</script>
