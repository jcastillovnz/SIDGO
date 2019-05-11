<template>





 <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row" >
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">


     
       
                   <img width="180" height="180" v-if="user.img" class="rounded-circle"  :src="'/img/fotos/'+user.img" >
                   <img width="180" height="180"  v-else   class="rounded-circle"  :src="preview" >

        


            </div>
            </div>
            </div>



            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
            <div class="d-flex justify-content-between">
         


            <a title="Actualizar foto" @click="$refs.foto.click()"   class="btn btn-sm btn-success text-white mr-4">
<i v-if="user.loader_img== 0" class="fas fa-sync-alt"></i> 
                   <i v-else="" class="spinner-border spinner-border-sm"></i>
     

            </a>  


            <a title="Eliminar foto"  @click="delete_img()"   class="btn btn-sm btn-danger text-white  float-right"><i class="fas fa-trash"></i>
            </a>


            </div>
            </div>


           <input ref="foto" type="file"  @change="cargar_img()" class="invisible" >





            <div class="card-body pt-0 pt-md-0">
              <div class="row">
                <div class="col">
             
                </div>
              </div>
              <div class="text-center">
            
         <span class="font-weight-light">,
        </span>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i> 
                </div>
                <div class="h5 mt-4">

                  <i class="ni business_briefcase-24 mr-2"></i>

        




                </div>
                <div>
                  <i class="ni education_hat mr-2"></i> 
                </div>


              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Mi cuenta</h3>
                </div>
                <div class="col-4 text-right">
               <a   @click="show()"  class="btn btn-sm btn-primary text-white"><i class="fas fa-pencil-alt"></i></a>

                   <a  v-bind:class="{ 'disabled': user.edicion == 0}"   @click="update()"  class="btn btn-sm btn-success text-white "><i v-if="user.loader== 0" class="fas fa-save"></i> 
                   <i v-else="" class="spinner-border spinner-border-sm"></i>

                   </a>

                </div>
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">Informacion de usuario</h6>
                <div class="pl-lg-4">


                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Nombre</label>
                        <input :disabled="user.edicion==0"  v-model="user.nombre"  class="form-control form-control-alternative" placeholder="Nombre" >
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Apellido</label>
                        <input  :disabled="user.edicion==0"  v-model="user.apellido" class="form-control form-control-alternative" placeholder="Apellido" >
                      </div>
                    </div>

            




                           <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Estatus</label>
                     
                            
               <select  :disabled="user.edicion==0"  class="form-control"  v-model="user.estatus" >
                       <option  :selected="user.estatus==''" value=""> Seleccione estatus </option>



                        <option value="1"> Activo </option>
                        <option value="0"> Inactivo </option>
                               
                        </select>

                      </div>
                    </div>



                       <div class="col-lg-6">
                       <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Rol</label>
                   
      <select  :disabled="user.edicion==0"  class="form-control"  v-model="user.tipo" >
                       <option  :selected="user.tipo==''" value=""> Seleccione rol </option>

                        <option value="3"> Inspector </option>
                        <option value="2"> Analista </option>
                        <option value="1"> Supervisor </option>
                        <option value="0"> Administrador </option>
                               
                        </select>





                      </div>
                    </div>

                    
                  <div class="col-lg-12">
                      <div class="form-group">
                      <label class="form-control-label"   for="input-last-name">Liquidadora a la que pertenece</label>
                     

                       <select  :disabled="user.edicion==0"  class="form-control" v-model="user.liquidadora" >

                        <option  :selected="user.liquidadora=='' " value=""> Seleccione liquidadora  </option>

                        <option v-for="liquidadora in liquidadoras" :value="liquidadora.id"> {{liquidadora.nombre}}  {{liquidadora.id}} </option>
                      
                      </select>





                      </div>
                    </div>











                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">INFORMACION DE CONTACTO</h6>
                <div class="pl-lg-4">
                  <div class="row">



                  <div class="col-lg-6">
                      <div class="form-group">





<label class="form-control-label" for="input-last-name">Email</label>
                        <input  :disabled="user.edicion==0"  v-model="user.email" class="form-control form-control-alternative" placeholder="Email" value="">
                      </div>
                    </div>

                   <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Telefono</label>
                        <input  :disabled="user.edicion==0"  v-model="user.telefono" class="form-control form-control-alternative" placeholder="Telefono" value="">
                      </div>
                    </div>



                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Direccion</label>
                        <input :disabled="user.edicion==0"  v-model="user.direccion" class="form-control form-control-alternative" value="" type="text" placeholder="Direccion">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Ciudad</label>
                        <input :disabled="user.edicion==0"  v-model="user.ciudad" class="form-control form-control-alternative" placeholder="Ciudad" >
                      </div>
                    </div>
               
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Codigo postal</label>
                        <input :disabled="user.edicion==0"  v-model="user.codigo_postal" class="form-control form-control-alternative" placeholder="Codigo postal">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />

              </form>
            </div>
          </div>
        </div>
      </div>
</div>
</div>







 
</template>

<script>

import Swal from 'sweetalert2/dist/sweetalert2.js'

    export default {
       created() {

this.getUser();

},
data () {
return {

liquidadoras:[],
preview: 'img/user.png' ,
user: { 
    'id':'',
    'img':'',
    'loader_img':0,
    'nombre':'',
    'apellido':'',
    'telefono':'',
    'email':'',
    'tipo':'',
    'ciudad':'',
    'direccion':'',
    'codigo_postal':'',
    'estatus':'',
    'password':'',
    'loader':'0',
    'edicion': '0',
    'confirmPassword':'',
    ////////////////
    'liquidadora':''
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

methods: {

getUser: function()  {
axios.get('/user/').then(response => {
var datos = response.data.user;
this.liquidadoras = response.data.liquidadoras;
this.user.id = datos.id;
this.user.img = datos.img;
this.user.nombre = datos.name;
this.user.apellido = datos.lastname;
this.user.telefono = datos.phone;
this.user.email =   datos.email;
this.user.tipo =    datos.tipo;
this.user.estatus =  datos.estatus;
this.user.ciudad =  datos.ciudad;
this.user.direccion = datos.direccion;
this.user.codigo_postal= datos.codigo_postal;
this.user.liquidadora= datos.liquidadora.id;

});
 },

show: function(user)  {
if (this.user.edicion == 0) {
this.user.edicion = 1;
} else {
this.user.edicion = 0;
}
},


update: function(user)  {

 var that = this;
this.user.loader="1";

axios.put('/user/update', { 

id: this.user.id,
nombre: this.user.nombre,
apellido: this.user.apellido,
email: this.user.email,
telefono: this.user.telefono,
tipo: this.user.tipo,
password: this.user.password,
ciudad : this.user.ciudad,
direccion:this.user.direccion,
codigo_postal:this.user.codigo_postal,
liquidadora_id:this.user.liquidadora,
estatus:this.user.estatus,


  })
  .then(function (response) {

if (response.data == "true") {





Swal.fire({
 type: 'success',
 showConfirmButton: false,
  timer: 400
})
that.user.loader="0";
that.user.edicion="0";
that.getUser();

}
else{

Swal.fire({
 type: 'error',
  text: "Hubo un problema, intenta mas tarde!",
  icon: "info",
 showConfirmButton: false,
  timer: 1000
})


userComponent.user.edicion="1";
}

})
  .catch(function (error) {


  });


 },
delete_img: function()  {
var  that =  this;

axios.get('delete/img/'+this.user.id).then(function(response){


if( response.data == true) {



/*location.reload();*/

that.user.img='';
that.getUser();

Swal.fire({
 type: 'success',
 showConfirmButton: false,
  timer: 1000
})



}

})
.catch(function(error){


Swal.fire({
 type: 'error',
  text: "Hubo un problema, intenta mas tarde!",
  icon: "info",
 showConfirmButton: false,
  timer: 1000})



 });
 },

cargar_img: function()  {
var that = this;
const file = event.target.files[0];
//Convertir en archivo antes de enviar
this.foto = file;
this.user.loader_img=1;

const formData = new FormData()
formData.append('foto', file, file.name)
axios.post('/img/user/'+this.user.id, formData).then(function(response){
that.user.img = response.data;

Swal.fire({
 type: 'success',
 showConfirmButton: false,
  timer: 400
})

that.user.loader_img=0;

})
.catch(function(error){
Swal.fire({
 type: 'error',
  text: "Hubo un problema, intenta mas tarde!",
  icon: "info",
 showConfirmButton: false,
  timer: 1000
})
});












},









}


}
</script>
