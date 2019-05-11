<template>
    <div class="">




<div class="modal fade" id="create-siniestro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

<form class="" role="form" method="GET" >


      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <div class="modal-body">



<div class="container">



  <h4>Datos siniestro</h4>




  <div class="form-row">

 <div class="form-group col-md-6">
<label for="inputEmail4">Compañia aseguradora</label>

<select required="" class="form-control form-control"> 
<option  value="">Compañia</option>
<option selected="" value="Zurich">Zurich</option>
</select>
 </div>



 <div class="form-group col-md-6">
<label for="inputEmail4">Analista</label>

<select required="" class="form-control form-control"> 
<option selected="">Analista</option>
<option value="Omar villareal">Omar Villareal</option>


</select>
 </div>




  </div>

  <div class="form-row">

   <div class="form-group col-md-6">
      <label for="inputEmail4">N° Poliza</label>
      <input required="" type="text" class="form-control form-control"  placeholder="Poliza">
    </div>

 <div class="form-group col-md-6">
      <label for="inputEmail4">N° Siniestro</label>
      <input required="" type="text" class="form-control form-control"  placeholder="Siniestro">
    </div>

 <div class="form-group col-md-6">
      <label for="inputEmail4">Fecha de denuncia</label>
      <input required="" type="date" class="form-control form-control"  placeholder="Fecha Siniestro">
    </div>




<div class="form-group col-md-6">
      <label for="inputEmail4">Fecha de siniestro</label>
      <input required="" type="date" class="form-control form-control"  placeholder="Fecha Siniestro">
    </div>



  </div>
  <h4>Asegurado</h4>


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre</label>
      <input required="" type="text" class="form-control" id="inputEmail4" placeholder="Nombre">
    </div>


    <div class="form-group col-md-6">
      <label for="inputPassword4">Apellido</label>
      <input required="" type="text" class="form-control" id="inputPassword4" placeholder="Apellido">
    </div>

     <div class="form-group col-md-6">
      <label for="inputEmail4">Dni</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Dni">
    </div>

 <div class="form-group col-md-6">
      <label for="inputEmail4"> Email</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Email">
    </div>


 <div class="form-group col-md-6">
      <label for="inputEmail4"> Telefono fijo</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Telefono fijo">
    </div>


 <div class="form-group col-md-6">
      <label for="inputEmail4"> Telefono celular</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Telefono celular">
    </div>




  </div>


  <h4>Ubicacion de riesgo</h4>


  <div class="form-row">

   <div class="form-group col-md-6">
      <label for="inputEmail4">Pais</label>

<select class="form-control form-control" >
  <option value="AF">Afganistán</option>
<option value="AL">Albania</option>
<option value="DE">Alemania</option>
<option value="AD">Andorra</option>
<option value="AO">Angola</option>
<option value="AI">Anguilla</option>
<option value="AQ">Antártida</option>
<option value="AG">Antigua y Barbuda</option>
<option value="AN">Antillas Holandesas</option>
<option value="SA">Arabia Saudí</option>
<option value="DZ">Argelia</option>
<option value="AR" selected="">Argentina</option>
<option value="AM">Armenia</option>
<option value="AW">Aruba</option>
<option value="AU">Australia</option>
<option value="AT">Austria</option>
<option value="AZ">Azerbaiyán</option>
<option value="BS">Bahamas</option>
<option value="BH">Bahrein</option>
<option value="BD">Bangladesh</option>
<option value="BB">Barbados</option>
<option value="BE">Bélgica</option>
<option value="BZ">Belice</option>
<option value="BJ">Benin</option>
<option value="BM">Bermudas</option>
<option value="BY">Bielorrusia</option>
<option value="MM">Birmania</option>
<option value="BO">Bolivia</option>
<option value="BA">Bosnia y Herzegovina</option>
<option value="BW">Botswana</option>
<option value="BR">Brasil</option>
<option value="BN">Brunei</option>
<option value="BG">Bulgaria</option>
<option value="BF">Burkina Faso</option>
<option value="BI">Burundi</option>
<option value="BT">Bután</option>
<option value="CV">Cabo Verde</option>
<option value="KH">Camboya</option>
<option value="CM">Camerún</option>
<option value="CA">Canadá</option>
<option value="TD">Chad</option>
<option value="CL">Chile</option>
<option value="CN">China</option>
<option value="CY">Chipre</option>
<option value="VA">Ciudad del Vaticano (Santa Sede)</option>
<option value="CO">Colombia</option>
<option value="KM">Comores</option>
<option value="CG">Congo</option>
<option value="CD">Congo, República Democrática del</option>
<option value="KR">Corea</option>
<option value="KP">Corea del Norte</option>
<option value="CI">Costa de Marfíl</option>
<option value="CR">Costa Rica</option>
<option value="HR">Croacia (Hrvatska)</option>
<option value="CU">Cuba</option>
<option value="DK">Dinamarca</option>
<option value="DJ">Djibouti</option>
<option value="DM">Dominica</option>
<option value="EC">Ecuador</option>
<option value="EG">Egipto</option>
<option value="SV">El Salvador</option>
<option value="AE">Emiratos Árabes Unidos</option>
<option value="ER">Eritrea</option>
<option value="SI">Eslovenia</option>
<option value="ES">España</option>
<option value="US">Estados Unidos</option>
<option value="EE">Estonia</option>
<option value="ET">Etiopía</option>
<option value="FJ">Fiji</option>
<option value="PH">Filipinas</option>
<option value="FI">Finlandia</option>
<option value="FR">Francia</option>
<option value="GA">Gabón</option>
<option value="GM">Gambia</option>
<option value="GE">Georgia</option>
<option value="GH">Ghana</option>
<option value="GI">Gibraltar</option>
<option value="GD">Granada</option>
<option value="GR">Grecia</option>
<option value="GL">Groenlandia</option>
<option value="GP">Guadalupe</option>
<option value="GU">Guam</option>
<option value="GT">Guatemala</option>
<option value="GY">Guayana</option>
<option value="GF">Guayana Francesa</option>
<option value="GN">Guinea</option>
<option value="GQ">Guinea Ecuatorial</option>
<option value="GW">Guinea-Bissau</option>
<option value="HT">Haití</option>
<option value="HN">Honduras</option>
<option value="HU">Hungría</option>
<option value="IN">India</option>
<option value="ID">Indonesia</option>
<option value="IQ">Irak</option>
<option value="IR">Irán</option>
<option value="IE">Irlanda</option>
<option value="BV">Isla Bouvet</option>
<option value="CX">Isla de Christmas</option>
<option value="IS">Islandia</option>
<option value="KY">Islas Caimán</option>
<option value="CK">Islas Cook</option>
<option value="CC">Islas de Cocos o Keeling</option>
<option value="FO">Islas Faroe</option>
<option value="HM">Islas Heard y McDonald</option>
<option value="FK">Islas Malvinas</option>
<option value="MP">Islas Marianas del Norte</option>
<option value="MH">Islas Marshall</option>
<option value="UM">Islas menores de Estados Unidos</option>
<option value="PW">Islas Palau</option>
<option value="SB">Islas Salomón</option>
<option value="SJ">Islas Svalbard y Jan Mayen</option>
<option value="TK">Islas Tokelau</option>
<option value="TC">Islas Turks y Caicos</option>
<option value="VI">Islas Vírgenes (EEUU)</option>
<option value="VG">Islas Vírgenes (Reino Unido)</option>
<option value="WF">Islas Wallis y Futuna</option>
<option value="IL">Israel</option>
<option value="IT">Italia</option>
<option value="JM">Jamaica</option>
<option value="JP">Japón</option>
<option value="JO">Jordania</option>
<option value="KZ">Kazajistán</option>
<option value="KE">Kenia</option>
<option value="KG">Kirguizistán</option>
<option value="KI">Kiribati</option>
<option value="KW">Kuwait</option>
<option value="LA">Laos</option>
<option value="LS">Lesotho</option>
<option value="LV">Letonia</option>
<option value="LB">Líbano</option>
<option value="LR">Liberia</option>
<option value="LY">Libia</option>
<option value="LI">Liechtenstein</option>
<option value="LT">Lituania</option>
<option value="LU">Luxemburgo</option>
<option value="MK">Macedonia, Ex-República Yugoslava de</option>
<option value="MG">Madagascar</option>
<option value="MY">Malasia</option>
<option value="MW">Malawi</option>
<option value="MV">Maldivas</option>
<option value="ML">Malí</option>
<option value="MT">Malta</option>
<option value="MA">Marruecos</option>
<option value="MQ">Martinica</option>
<option value="MU">Mauricio</option>
<option value="MR">Mauritania</option>
<option value="YT">Mayotte</option>
<option value="MX">México</option>
<option value="FM">Micronesia</option>
<option value="MD">Moldavia</option>
<option value="MC">Mónaco</option>
<option value="MN">Mongolia</option>
<option value="MS">Montserrat</option>
<option value="MZ">Mozambique</option>
<option value="NA">Namibia</option>
<option value="NR">Nauru</option>
<option value="NP">Nepal</option>
<option value="NI">Nicaragua</option>
<option value="NE">Níger</option>
<option value="NG">Nigeria</option>
<option value="NU">Niue</option>
<option value="NF">Norfolk</option>
<option value="NO">Noruega</option>
<option value="NC">Nueva Caledonia</option>
<option value="NZ">Nueva Zelanda</option>
<option value="OM">Omán</option>
<option value="NL">Países Bajos</option>
<option value="PA">Panamá</option>
<option value="PG">Papúa Nueva Guinea</option>
<option value="PK">Paquistán</option>
<option value="PY">Paraguay</option>
<option value="PE">Perú</option>
<option value="PN">Pitcairn</option>
<option value="PF">Polinesia Francesa</option>
<option value="PL">Polonia</option>
<option value="PT">Portugal</option>
<option value="PR">Puerto Rico</option>
<option value="QA">Qatar</option>
<option value="UK">Reino Unido</option>
<option value="CF">República Centroafricana</option>
<option value="CZ">República Checa</option>
<option value="ZA">República de Sudáfrica</option>
<option value="DO">República Dominicana</option>
<option value="SK">República Eslovaca</option>
<option value="RE">Reunión</option>
<option value="RW">Ruanda</option>
<option value="RO">Rumania</option>
<option value="RU">Rusia</option>
<option value="EH">Sahara Occidental</option>
<option value="KN">Saint Kitts y Nevis</option>
<option value="WS">Samoa</option>
<option value="AS">Samoa Americana</option>
<option value="SM">San Marino</option>
<option value="VC">San Vicente y Granadinas</option>
<option value="SH">Santa Helena</option>
<option value="LC">Santa Lucía</option>
<option value="ST">Santo Tomé y Príncipe</option>
<option value="SN">Senegal</option>
<option value="SC">Seychelles</option>
<option value="SL">Sierra Leona</option>
<option value="SG">Singapur</option>
<option value="SY">Siria</option>
<option value="SO">Somalia</option>
<option value="LK">Sri Lanka</option>
<option value="PM">St Pierre y Miquelon</option>
<option value="SZ">Suazilandia</option>
<option value="SD">Sudán</option>
<option value="SE">Suecia</option>
<option value="CH">Suiza</option>
<option value="SR">Surinam</option>
<option value="TH">Tailandia</option>
<option value="TW">Taiwán</option>
<option value="TZ">Tanzania</option>
<option value="TJ">Tayikistán</option>
<option value="TF">Territorios franceses del Sur</option>
<option value="TP">Timor Oriental</option>
<option value="TG">Togo</option>
<option value="TO">Tonga</option>
<option value="TT">Trinidad y Tobago</option>
<option value="TN">Túnez</option>
<option value="TM">Turkmenistán</option>
<option value="TR">Turquía</option>
<option value="TV">Tuvalu</option>
<option value="UA">Ucrania</option>
<option value="UG">Uganda</option>
<option value="UY">Uruguay</option>
<option value="UZ">Uzbekistán</option>
<option value="VU">Vanuatu</option>
<option value="VE">Venezuela</option>
<option value="VN">Vietnam</option>
<option value="YE">Yemen</option>
<option value="YU">Yugoslavia</option>
<option value="ZM">Zambia</option>
<option value="ZW">Zimbabue</option>


</select>







    </div>

 <div class="form-group col-md-6">
      <label for="inputEmail4">Provincia</label>

<select  class="form-control">
  <option value=""  >Seleccione Provincia</option>

   <option value="Buenos aires" >Buenos Aires</option>
  <option value="Catamarca" >Catamarca</option>
  <option value="Chaco" >Chaco</option>
  <option value="Chubut"  >Chubut</option>
  <option value="Cordoba" selected="" >Córdoba</option>
 <option value="Corrientes"  >Corrientes</option>
  <option value="Entre Rios"  >Entre Ríos</option>
  <option value="Formosa" >Formosa</option>
 <option value="Jujuy"  >Jujuy</option>
  <option value="La pampa"  >La Pampa</option>
  <option value="La Rioja">La Rioja</option>
 <option value="Mendoza">Mendoza</option>
  <option value="Misiones" >Misiones</option>
  <option value="Neuquén" >Neuquén</option>
<option value="Rio negro"  >Río Negro</option>
  <option value="Salta" >Salta</option>
  <option value="San Juan">San Juan</option>
<option value="San Luis" >San Luis</option>
<option value="Santa  Cruz" >Santa Cruz</option>
  <option value="Santa Fe" >Santa Fe</option>
  <option value="Santiago del Estero" >Santiago del Estero</option>
<option  value="Tierra del Fuego" >Tierra del Fuego</option>
  <option value="Tucuman"  >Tucumán</option>
 
</select>





</div>


 <div class="form-group col-md-6">
      <label for="inputEmail4">Ciudad</label>
      <input type="text" class="form-control form-control" value="Cordoba"  placeholder="Ciudad">
</div>


 <div class="form-group col-md-6">
      <label for="inputEmail4">Calle</label>
      <input type="text" class="form-control form-control"  placeholder="Calle">
</div>


 <div class="form-group col-md-6">
      <label for="inputEmail4">Numero</label>
      <input type="text" class="form-control form-control"  placeholder="Numero">
</div>





  </div>





 <div class="form-group ">
<label for="inputEmail4">Caracteristicas del siniestro</label>

<select class="form-control form-control"> 
<option selected="">Caracteristicas del siniestro</option>
<option value="Robo">Robo</option>
<option value="Hurto">Hurto</option>
<option value="Incendio">Incendio</option>
<option value="Responsabilidad civil">Responsabilidad civil</option>
<option value="Alimentos en freezer">Alimentos en freezer</option>
<option value="Daño por tension">Daño por tension</option>
<option value="Daño por vendaval">Daño por vendaval</option>
<option value="Daño por granizo">Daño por granizo</option>

</select>
 </div>


<h4>
Estimacion de daños</h4>
 <div class="form-row">


   <div class="form-group col-md-6">
<label for="inputAddress">Moneda</label>
<select required="" class="form-control form-control"> 
<option  value="USD">USD</option>
<option selected=""  value="ARS">ARS</option>


</select>


  </div>

   <div class="form-group col-md-6">
<label for="inputAddress">Importe estimado</label>
<input type="number" step="any" class="form-control" name="" placeholder="Importe estimado">
  </div>



  </div>



  <div class="form-group">
    <label for="inputAddress">Descripcion del siniestro</label>
<textarea class="form-control" rows="5"> </textarea>
  </div>


   <div class="form-group ">
   ¿A quien desea derivar este siniestro?
</div>

   <div class="form-group ">

<label for="inputAddress">Analista interino</label>
<select required="" class="form-control form-control"> 
<option  value="USD">MENGANO</option>
<option selected=""  value="ARS">MENGANITO</option>


</select>
  </div>






</div>



   


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
        <button  type="submit" class="btn btn-primary"><i class="fas fa-save"></i> </button>
      </div>
      
    </div>
</form>

  </div>



</div>







    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Nuevo siniestro')
        }












        
    }
</script>
