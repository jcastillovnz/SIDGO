<template>
    <div >


 <!-- Page content -->


   <!-- Page content -->
           <div class="container-fluid mt--7">


 

           <div class="row" id="Liquidadora">
           <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">

            <div class="card card-profile shadow">
            <div class="row justify-content-center">
            <div class="col-lg-3 order-lg-2">
            <div class="card-profile-image">

            <a href="#">
            <img title="Logotipo" width="200" height="auto" class="" v-if="liquidadora.img"  :src="'/img/liquidadoras/logos/'+liquidadora.img"  >

            
            <img  title="Logotipo" width="200" height="auto" class="" v-else=""  :src="preview" >
            </a>



            </div>
            </div>
            </div>









            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
         
            <a title="Actualizar logo" @click="$refs.foto.click()"   class="btn btn-sm btn-success text-white mr-4"><i class="fas fa-sync-alt"></i>
            </a>  
            <a title="Eliminar logo" @click="confirmar_delete_logo()"    class="btn btn-sm btn-danger text-white  float-right"><i class="fas fa-trash"></i>
            </a>


              </div>
            </div>

 <input ref="foto" type="file"  @change="cargar_logo()"  class="invisible" >









            <div class="card-body pt-0 pt-md-4">
            <div class="row">
            <div class="col">
            <div class="card-profile-stats d-flex justify-content-center mt-md-2">
<span class="small text-center">
  Sube tu logotipo con una imagen de dimensiones de 120 x 70 pixeles en formato PNG O JPG

</span>
            <div>

         
            </div>
            </div>
            </div>
            </div>






            <div class="text-center">

     
            </div>
            </div>
           </div>
           </div>









          <div class="col-xl-8 order-xl-1">





<div class="nav-wrapper">
    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="fas fa-suitcase"></i>   Liquidadora </a>
        </li>
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="fas fa-users"></i>  Miembros</a>
        </li>

        <li class="nav-item">
            <a  @click="GetAseguradoras()" class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-aseguradora" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="fas fa-users"></i> Aseguradoras</a>
        </li>


    </ul>
</div>
<div class="">
    <div class="">
        <div class="tab-content" >
            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
              



              <!-- CONTENIDO -->

          <div class="card bg-secondary shadow">
          <div class="card-header bg-white border-0">
          <div class="row align-items-center">


          <div class="col-8">
          <h3 class="mb-0">Liquidadora</h3>
          </div>

          <div class="col-4 text-right">
          <a     @click="edit()"  class="btn btn-sm btn-primary text-white"><i class="fas fa-pencil-alt"></i></a>
          <a     @click="update()"  class="btn btn-sm btn-success text-white "><i class="fas fa-save"></i> </a>
          </div>

          </div>
          </div>



            <div class="card-body">
            <form>
            <h6 class="heading-small text-muted mb-4">Informacion de liquidadora</h6>
            <div class="pl-lg-4">


            <div class="row">
            <div class="col-lg-12">
            <div class="form-group">
            <label class="form-control-label" for="input-first-name">Nombre</label>
            <input   :disabled="liquidadora.edicion==0"   type="text" id="input-first-name" v-model="liquidadora.nombre" class="form-control form-control-alternative" placeholder="Nombre" value="">
            </div>
            </div>

            <div class="col-lg-6">
            <div class="form-group">
            <label class="form-control-label" for="input-last-name">Supervisor      </label>
            <input   disabled=""  type="text" v-model="supervisor.nombre"  class="form-control form-control-alternative"placeholder="Nombre" >
            </div>
            </div>


   <div class="col-lg-6">
            <div class="form-group">
            <label class="form-control-label" for="input-last-name"><br>  </label>
            <input   disabled=""  type="text" v-model="supervisor.apellido"  class="form-control form-control-alternative"placeholder="Apellido" >
            </div>
            </div>





        

              <div class="col-sm">
              <p class="small" >Para cambiar el supervisor de la empresa liquidadora, contactese con el administrador del sistema. </p>
              </div>

              </div>
              </div>





             <!-- INFORMACION DE CONTACTO -->

                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">INFORMACION DE CONTACTO</h6>
                <div class="pl-lg-4">
                <div class="row">



                <div class="col-lg-6">
                <div class="form-group">
                <label class="form-control-label" >Email</label>
                <input :disabled="liquidadora.edicion==0"   type="text"  v-model="liquidadora.email"   class="form-control form-control-alternative" placeholder="Email" value="">
                </div>
                </div>

                <div class="col-lg-6">
                <div class="form-group">
                <label class="form-control-label" for="">Telefono fijo</label>
                <input   :disabled="liquidadora.edicion==0"    type="text"  v-model="liquidadora.telefono_fijo" class="form-control form-control-alternative" placeholder="Telefono" value="">
                </div>
                </div>


                <div class="col-lg-6">
                <div class="form-group">
                <label class="form-control-label" >Telefono Celular</label>
                <input  :disabled="liquidadora.edicion==0"  type="text" v-model="liquidadora.telefono_celular" class="form-control form-control-alternative" placeholder="Telefono" value="">
                </div>
                </div>

                 

                <div class="col-md-12">
                <div class="form-group">
                <label class="form-control-label" for="input-address">Direccion</label>
                <input :disabled="liquidadora.edicion==0"   class="form-control form-control-alternative" v-model="liquidadora.direccion" type="text" placeholder="Direccion">
                </div>
                </div>
                </div>
                  
                <div class="row">
                <div class="col-lg-6">
                <div class="form-group">
                <label class="form-control-label" for="input-city">Ciudad</label>
                <input :disabled="liquidadora.edicion==0"  class="form-control form-control-alternative" v-model="liquidadora.ciudad" placeholder="Ciudad" >
                </div>
                </div>
               
                <div class="col-lg-6">
                <div class="form-group">
                <label class="form-control-label" for="input-country">Codigo postal</label>
                <input  :disabled="liquidadora.edicion==0"  class="form-control form-control-alternative"  v-model="liquidadora.codigo_postal"  placeholder="Codigo postal">
                </div>
                </div>
                </div>
                </div>
                <hr class="my-4" />
                         
         



          </form>
          </div>
          </div>


              <!-- CONTENIDO -->





            </div>
            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">

              <!-- CONTENIDO -->



          <div class="card bg-secondary shadow">
          <div class="card-header bg-white border-0">
          <div class="row align-items-center">


          <div class="col-8">
          <h3 class="mb-0">Miembros</h3>
          </div>

          <div class="col-4 text-right">
     
          </div>

          </div>
          </div>



            <div class="card-body">
            <form>
            <h6 class="heading-small text-muted mb-4">Miembros que hacen parte de la empresa  @{{liquidadora.nombre}}  </h6>
            <div class="pl-lg-4">


            <div class="row">
     
   <div class="col-sm-12">
              <p class="small" >Para cambiar la informacion del supervisor de la empresa, contactese con el administrador del sistema. </p>




              </div>


          <div class="col-lg-6">
            <div class="form-group">
            <label class="form-control-label" for="input-last-name">     </label>
            <input   disabled=""  type="text" v-model="supervisor.nombre"  class="form-control form-control-alternative"placeholder="Nombre" value="">
            </div>
            </div>


            <div class="col-lg-6">
            <div class="form-group">
            <label class="form-control-label" for="input-last-name"></label>
              <input   disabled=""  type="text" v-model="supervisor.apellido"  class="form-control form-control-alternative" placeholder="Apellido" >
              </div>
              </div>

        



              </div>
              </div>





             <!-- INFORMACION DE CONTACTO -->

<hr class="my-4" />
<!-- Address -->
<h6 class="heading-small text-muted mb-4">MIEMBROS</h6>
<div class="">

    <p class="small" >Para agregar nuevos miembros a su liquidadora, contactese con el administrador del sistema. </p>

       
<div class="table-responsive">
    <table class="table align-items-center table-ligth">
    <thead class="thead-ligth">
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Estatus</th>
          <th scope="col">Rol</th>
     

            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <tr v-for="user in users" >
            <th scope="row">
                <div class="media align-items-center">
                    <a :href="'liquidadora/miembro/'+user.id" class="avatar rounded-circle mr-3">

                   <img  width="48" height="48" v-if="user.img" class="rounded-circle"  :src="'/img/fotos/'+user.img" >
                   <img  width="48" height="48"  v-else   class="rounded-circle"  src="" >

                    </a>
                    <div class="media-body">

                      <a :href="'liquidadora/miembro/'+user.id">
                        <span class="mb-0 text-sm"> @{{user.name}}  @{{user.lastname}}</span>

                        </a>
                    </div>
                </div>
            </th>
       
    
            <td class="text-right">
    
            <span class="badge badge-dot mr-4">
          <i   v-bind:class="{ 'bg-success': user.estatus == '1','bg-warning': user.estatus == '0' }"></i> 

          <span v-show="user.estatus == '1'"> Activo</span>
          <span v-show="user.estatus == '0'"> Inactivo</span>

                 </span>
            </td>


            <td class="text-right">
          <span v-show="user.tipo =='3'"> Inspector</span>
          <span v-show="user.tipo == '2'"> Analista</span>
          <span v-show="user.tipo =='1'"> Supervisor</span>
          <span v-show="user.tipo == '0'"> Administrador</span>
      
            </td>



            <td class="text-right">
                <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

                
                          <a class="dropdown-item" @click="edit(user)">Editar</a>
                          <a class="dropdown-item" @click="confirmar(user)" >Eliminar</a> 
                

                    </div>
                </div>
            </td>
        </tr>
   
    </tbody>
</table>

</div>

 
                </div>
                <hr class="my-4" />
                         
        
          </form>
          </div>
          </div>

@include('liquidadoras.users.edit')

              <!-- CONTENIDO -->

            </div>
          <div  class="tab-pane fade" id="tabs-aseguradora" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">

              <!-- CONTENIDO -->

          <div  class="card bg-secondary shadow">
          <div class="card-header bg-white border-0">
          <div  class="row align-items-center">


          <div  class="col-8">




          <h3 class="mb-0">Aseguradoras</h3>
          </div>

          <div  class="col-4 text-right">

          <a title="Agregar aseguradora"   @click="show_aseguradora()"  class="btn btn-sm btn-primary text-white"><i class="fas fa-plus"></i></a>

          </div>

          </div>
          </div>



            <div  class="card-body">
            <form>
            <h6 class="small text-muted mb-4"> 
            <center> 
            Agrega las compañias aseguradoras con las que trabaja tu empresa liquidadora
            </center>
            </h6>
    
<!-- INFORMACION DE CONTACTO -->

<hr class="my-4" />
<!-- Address -->
<h6 class="heading-small text-muted mb-4">Compañias aseguradoras </h6>
<div class="">
       
<div  class="table-responsive">
    <table class="table align-items-center table-ligth">
    <thead class="thead-ligth">
        <tr>
            <th scope="col">Aseguradora</th>
            <th scope="col">Email</th>
         
     

            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>



<tr v-for="aseguradora in aseguradoras" >
<th scope="row">
<div class="media align-items-center">
    

<a :href="'liquidadora/aseguradora/'+aseguradora.id"  class="avatar rounded-circle mr-3">


<img  width="48" height="48" v-if="aseguradora.img" class="rounded-circle" :src="'/img/aseguradoras/logos/'+aseguradora.img" >
<img  width="48" height="48"  v-else   class="rounded-circle"  src="" >



</a>



            <div class="media-body">
            <span class="mb-0 text-sm">
               <a :href="'/liquidadora/aseguradora/'+aseguradora.id ">
                @{{aseguradora.nombre}}
               </a>


             </span>
            </div>
            </div>
            </th>
       
    
            <td class="text-right">

              @{{aseguradora.email}}

            </td>
            <td class="text-right">
            <div class="dropdown">
            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-ellipsis-v"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">


                      <a class="dropdown-item"  @click="edit_aseguradora(aseguradora)" >Editar</a>
                      <a class="dropdown-item"  @click="delete_aseguradora(aseguradora)" >Eliminar</a>




        </div>
        </div>
        </td>
        </tr>
   
    </tbody>
</table>

</div>



 
                </div>
                <hr class="my-4" />
                         
        

          </form>
          </div>
          </div>






     <!-- CONTENIDO -->
            </div>
        </div>
    </div>
</div>

     </div>
      </div>




 







    </div>
 <!-- Page content -->


    </div>
</template>

<script>

import Swal from 'sweetalert2/dist/sweetalert2.js'



export default {

        mounted() {
            console.log('DETALLE LIQUIDADORA. dsfssdfsf')

this.getLiquidadora();

        },

data () {


return {

supervisor:[],
preview: window.location.protocol +'//'+ window.location.hostname + '/img/user.png' ,
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
    'edicion': 0,
    ////////////////
    'users_id':''
   },


}
},


methods: {

getLiquidadora: function(dato)  {

axios.get('/liquidadora/show/'+this.$route.params.id).then(response => {
var datos  = response.data.liquidadora;




this.liquidadora.id       = datos.id;
this.liquidadora.img      = datos.img;
this.liquidadora.nombre   = datos.nombre;
this.liquidadora.email    = datos.email;
this.liquidadora.telefono_fijo    = datos.telefono_fijo;
this.liquidadora.telefono_celular   = datos.telefono_celular;
this.liquidadora.ciudad    = datos.ciudad;
this.liquidadora.direccion    = datos.direccion;
this.liquidadora.codigo_postal   = datos.codigo_postal ;


this.supervisor.id       = datos.supervisor.id ;
this.supervisor.nombre   = datos.supervisor.nombre ;
this.supervisor.apellido = datos.supervisor.apellido ;






});

 },
edit: function()  {

if (this.liquidadora.edicion===0) {
this.liquidadora.edicion= 1;
}
else {
this.liquidadora.edicion= 0;

}
 },

cargar_logo: function(e) {

const file = event.target.files[0];

//Convertir en archivo antes de enviar
/*this.liquidadora.img = file;*/
this.enviar_img(file);
},
enviar_img: function(file)  {

var that = this;
const formData = new FormData()
formData.append('foto', file, file.name)
axios.post('/subir/logo/'+this.liquidadora.id, formData).then(function(response){

that.liquidadora.img=response.data;
Swal.fire({
 type: 'success',
 showConfirmButton: false,
  timer: 1000
})

that.getLiquidadora();



})
.catch(function(error){

/*  
Swal.fire({
 type: 'error',
  text: "Hubo un problema, intenta mas tarde!",
  icon: "info",
 showConfirmButton: false,
  timer: 1000

})
*/

 });
 },
confirmar_delete_logo: function(file) {

var that = this;

const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-primary',
    cancelButton: 'btn btn-secundary'
  },
  buttonsStyling: false,
})
swalWithBootstrapButtons.fire({
  title: '¿Estas seguro?',
  text: 'Quieres eliminar el logotipo',

  showCancelButton: true,
  confirmButtonText: 'Si, Eliminarlo!',
  cancelButtonText: 'No, cancelar!',
  reverseButtons: false
}).then((result) => {
  if (result.value) {


that.delete_logo();



} else if (
    // Read more about handling dismissals
    result.dismiss === Swal.DismissReason.cancel
  ) {
  }
})
},


delete_logo: function()  {

var that = this;
axios.get('/delete/logo/'+this.liquidadora.id).then(function(response){

if( response.data == true) {

Swal.fire({
 type: 'success',
 showConfirmButton: false,
  timer: 500
})

that.getLiquidadora();


}

})
.catch(function(error){


/*Swal.fire({
 type: 'error',
  text: "Hubo un problema, intenta mas tarde!",
  icon: "info",
 showConfirmButton: false,
  timer: 1000})
*/


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






}

}
</script>
