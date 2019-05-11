<template>
    <div class="container-fluid mt--7">


 <!-- Page content -->


<tabla-liquidadoras> </tabla-liquidadoras>


<tabla-usuarios>         </tabla-usuarios>



 <!-- Page content -->


    </div>
</template>

<script>
    export default {

        mounted() {
            console.log('configuracion.')
        },

data () {


return {


user: [],
liquidadoras:[],
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


}
</script>
