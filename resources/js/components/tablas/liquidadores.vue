<template>
    <div class="">


      <!-- Table -->
      <div  class="row">

        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">

              <h3 class="mb-0">Liquidadoras</h3>


            </div>
            <div   class="table-responsive"   >

             <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Nombre  </th>
                
                    <th scope="col">Email</th>
     
                        <th scope="col">Telefono fijo</th>
                    <th scope="col">Ciudad</th>
                
                 
                    <th scope="col"> 

<createliquidadora @todasliquidadoras="getLiquidadoras()"  > </createliquidadora>

</th>
                  </tr>
                </thead>
                <tbody>
                  <tr  v-for="liquidadora in liquidadoras">

    <th scope="row">
   <div class="media align-items-center">


     <router-link  class="avatar rounded-circle mr-3" tag="a" :to="{ name: 'liquidadora', params: { id: liquidadora.id}}">

               
                   <img  width="48" height="48" v-if="liquidadora.img" class="rounded-circle"  :src="'/img/fotos/'+liquidadora.img" >
                   <img  width="48" height="48"  v-else   class="rounded-circle"  src="img/icons/user.svg" >
       </router-link>
                       <div class="media-body">
                            <router-link   tag="a" :to="{ name: 'liquidadora', params: { id: liquidadora.id}}">

                          <span class="mb-0 text-sm">  
                           {{liquidadora.nombre}} 

                          </span>
                            </router-link>
                        </div>


                    </div>
                    </th>
                    <th scope="row">
                 {{liquidadora.email}} 
                    </th>
                    <td>
                  {{liquidadora.telefono_fijo}} 
                    </td>
                    <td>

                  {{liquidadora.ciudad}} 
                    </td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a  @click="edit(liquidadora)"  class="dropdown-item" >Editar</a>
                          <a  @click="confirmar(liquidadora)" class="dropdown-item">Eliminar</a>
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






<!-- EDITAR LIQUIDADORA -->



<!-- Modal -->
<div class="modal fade" id="liquidadoraEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<form class="" autocomplete="off"  role="form" v-on:submit.prevent="update()" method="POST" >
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="container">
 <h4>Editar liquidadora </h4>
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



<!-- EDITAR LIQUIDADORA -->











    </div>
</template>

<script>
import Swal from 'sweetalert2/dist/sweetalert2.js'


    export default {
        mounted() {

         this.getLiquidadoras();
        },
data () {

return {

liquidadoras : [],
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
pagination:{
'total': 0,
'current_page': 0,
'per_page': 0,
'last_page': 0,
'from': 0,
'to': 0
}



 }


  },

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


edit: function(liquidadora)  {

$('#liquidadoraEdit').modal('show');
this.liquidadora.id       = liquidadora.id;
this.liquidadora.img      = liquidadora.img;
this.liquidadora.nombre   = liquidadora.nombre;
this.liquidadora.email    = liquidadora.email;
this.liquidadora.telefono_fijo    = liquidadora.telefono_fijo;
this.liquidadora.telefono_celular   = liquidadora.telefono_celular;
this.liquidadora.ciudad    = liquidadora.ciudad;
this.liquidadora.direccion    = liquidadora.direccion ;
this.liquidadora.codigo_postal   = liquidadora.codigo_postal ;
this.liquidadora.users_id= liquidadora.users_id;
},
monitor: function(e) {
	var that =this;
axios({
url: '/liquidadora/monitor/',
method: 'get',
params: {
email: this.liquidadora.email
}
}).then(function (response) {
if (response.data =="true") {

that.liquidadora.email = '';

Swal.fire({
 type: 'error',
  text: "Ya existe este email, intenta con otro!",
  icon: "info",
 showConfirmButton: false,
  timer: 1000
})

}
})
},
update: function(user)  {
var that = this;
this.liquidadora.loader="1";

axios.put('/liquidadora/update', { 
id: this.liquidadora.id,
nombre: this.liquidadora.nombre,
telefono_fijo: this.liquidadora.telefono_fijo,
telefono_celular: this.liquidadora.telefono_celular,
email: this.liquidadora.email,
ciudad: this.liquidadora.ciudad,
codigo_postal: this.liquidadora.codigo_postal,
direccion: this.liquidadora.direccion,



  })
  .then(function (response) {

if (response.data == "true") {
$('#liquidadoraEdit').modal('hide')

Swal.fire({
 type: 'success',
 showConfirmButton: false,
  timer: 1200
})

that.getLiquidadoras();
that.liquidadora.loader="0";

}
else{


$('#liquidadoraEdit').modal('hide');

Swal.fire({
 type: 'error',
  text: "Hubo un problema, intenta mas tarde!",
  icon: "info",
 showConfirmButton: false,
  timer: 2000
})
liquidadorasComponent.clear();
liquidadorasComponent.liquidadora.loader="0";
}

})
  .catch(function (error) {


  });
 },

confirmar: function(liquidadora) {
var that =  this;
const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-primary',
    cancelButton: 'btn btn-secundary'
  },
  buttonsStyling: false,
})
swalWithBootstrapButtons.fire({
  title: '¿Estas seguro?',
  text: '¿Quieres eliminar a '+liquidadora.nombre+  'y todos sus usuarios ?',

  showCancelButton: true,
  confirmButtonText: 'Si, Eliminarlo!',
  cancelButtonText: 'No, cancelar!',
  reverseButtons: false
}).then((result) => {
  if (result.value) {
 that.eliminar(liquidadora);
} else if (
    // Read more about handling dismissals
    result.dismiss === Swal.DismissReason.cancel
  ) {
  }
})
},

eliminar: function(liquidadora)  {
var that =  this;
axios.get('/liquidadora/delete/'+liquidadora.id+'')
  .then(function (response) {

if (response.data.dato == 1) {
Swal.fire({
 type: 'success',
 showConfirmButton: false,
  timer: 700
})

that.getLiquidadoras();


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
getLiquidadoras: function(dato)  {
axios.get('/liquidadoras/todas-liquidadoras/').then(response => {
this.liquidadoras   = response.data.liquidadoras.data;
this.pagination=  response.data.pagination;

});
 },
changePage: function (page) {
this.pagination.current_page=page;
this.paginar(page);
}
,
paginar: function (page) {
axios({


  url: '/liquidadoras/todas-liquidadoras?page='+page,
  method: 'get',
  params: {
id: ''
  }
}).then(response => {
this.liquidadoras   = response.data.liquidadoras.data;
  this.pagination=  response.data.pagination
});
},






}














    }
</script>
