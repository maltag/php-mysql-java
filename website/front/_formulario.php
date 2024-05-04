
	<section class="container p-5 d-flex justify-content-center">
		<div class="formu_registro  inline-flex ">
				<div class="titleContacto">
					<h3>hola.mundo</h3>
					<p>
					+ Si sos artista y queres formar parte de la base de datos y colaborar con el proyecto <br>
					Te invitamos a que completes el siguiente formulario. <br>
					</p>
				</div>
	
				<div class="formu01 px-4 ">
					<form id="form"	class="formu" action="?p=toma_registros" method="POST">
							<!--Name ok-->
								<div class="form_elemento">
										<label for="name01">Nombre</label>
										<input type="text" 	id="name01" name="name01" required="required"/>
										<i class="bi bi-check"></i>
										<i class="bi bi-exclamation"></i>
										<small id="nameError" class="nameError"> Error: Campos incorrectos</small>
								</div>
							
							<!--Apellido ok-->
							<div class="form_elemento">
										<label for="apellido01">Apellido</label>
										<input type="text" id="apellido01" name="apellido01" required="required"/>
										<i class="bi bi-check"></i>
										<i class="bi bi-exclamation"></i>
										<small id="nameError" class="nameError"> Error: Campos incorrectos</small>
							</div>
							
							<!--EMAIL FORM-->
							 <div class="form_elemento">
								 <label for="mail01">Email</label>
								 <input type="Email"  id="mail01" name="mail01" aria-describedby="emailHelp" required="required"/>
								 <i class="bi bi-check"></i>
								 <i class="bi bi-exclamation"></i>
								 <small id="mailError" class="mailError">Error: Campos incorrectos</small>
							  </div>

							
						<!--Lugar_residencia-->

							<div class="form_elemento">
								<label for="lugar_residencia">	Lugar de residencia</label>
								<select id="lugar_residencia" name="lugar_residencia" class="form-select" required>
								<option selected>Seleccionar</option>
										<option value="extra">Fuera de Argentina</option>
										<option value="bsas">Buenos Aires</option>
										<option value="cat">Catamarca</option>
										<option value="cha">Chaco</option>
										<option value="chu">Chubut</option>
										<option value="cord">Córdoba</option>
										<option value="corr">Corrientes</option>
										<option value="er">Entre Ríos</option>
										<option value="form">Formosa</option>
										<option value="jujuy">Jujuy</option>
										<option value="lapam">La Pampa</option>
										<option value="lario">La Rioja</option>
										<option value="misi">Misiones</option>
										<option value="neu">Neuquén</option>
										<option value="rione">Río Negro</option>
										<option value="sal">Salta</option>
										<option value="sanju">San Juan</option>
										<option value="sanlu">San Luis</option>
										<option value="sancru">Santa Cruz</option>
										<option value="sanfe">Santa Fe</option>
										<option value="sgo">Santiago del Estero</option>
										<option value="tdelfue">Tierra del Fuego</option>
										<option value="tucu">Tucuman</option>
								</select>
									<i class="bi bi-exclamation"></i>
									<small id="provError" class="provError">Error: Campos incorrectos</small>
							</div>

							  <!--Region-->
							  <!-- <div class="form_elemento">
										<label for="region_origen">
										Region
										</label>
										<select id="region_origen" name="region_origen" required="required">
										<option value="seleccionar">Seleccionar</option>
										<option value="noa">Noroeste</option>
										<option value="cuyo">Cuyo</option>
										<option value="nea">Noreste</option>
										<option value="lito">Litoral</option>
										<option value="pyc">Pampa & Centro</option>
										<option value="pata">Patagonia</option>
									</select>
									<i class="bi bi-exclamation"></i>
									<small id="provError" class="provError">Error: Campos incorrectos</small>
									</div> -->

							<!--ProvinciaOrigen-->
						  	 <div class="form_elemento">
										<label for="prov_origen">
										Lugar de nacimiento
										</label>
										<select id="prov_origen" name="prov_origen" class="form-select" required>
										<option selected>Seleccionar</option>
										<option value="extra">Fuera de Argentina</option>
										<option value="bsas">Buenos Aires</option>
										<option value="cat">Catamarca</option>
										<option value="cha">Chaco</option>
										<option value="chu">Chubut</option>
										<option value="cord">Córdoba</option>
										<option value="corr">Corrientes</option>
										<option value="er">Entre Ríos</option>
										<option value="form">Formosa</option>
										<option value="jujuy">Jujuy</option>
										<option value="lapam">La Pampa</option>
										<option value="lario">La Rioja</option>
										<option value="misi">Misiones</option>
										<option value="neu">Neuquén</option>
										<option value="rione">Río Negro</option>
										<option value="sal">Salta</option>
										<option value="sanju">San Juan</option>
										<option value="sanlu">San Luis</option>
										<option value="sancru">Santa Cruz</option>
										<option value="sanfe">Santa Fe</option>
										<option value="sgo">Santiago del Estero</option>
										<option value="tdelfue">Tierra del Fuego</option>
										<option value="tucu">Tucuman</option>
									</select>
									<i class="bi bi-exclamation"></i>
									<small id="provError" class="provError">Error: Campos incorrectos</small>
									</div>
							  
							<!--Disciplina-->
							  <div class="form_elemento">
										<label for="disci">
										Disciplina artistica
										</label>
										<select id="disci" name="disci" class="form-select" required>
										<option selected>Seleccionar</option>
										<option value="Performance">Performance</option>
										<option value="Realidad aumentada">Realidad aumentada</option>
										<option value="Realidad virtual">Realidad virtual</option>
										<option value="Video arte">Video arte</option>
										<option value="3D">3D</option>
										<option value="Net-art">Net-art</option>
										<option value="Live-codding">Live-codding</option>
										<option value="Game-art">Game-art</option>
										<option value="Musica experimental">Musica experimental</option>
										<option value="DJ">DJ</option>
										<option value="VJ">VJ</option>
										<option value="Site specific">Site specific</option>
									</select>
									<i class="bi bi-exclamation"></i>
									<small id="provError" class="provError">Error: Campos incorrectos</small>
									</div>	
							<!--Exposicion-->
							<div class="form_elemento">
								<label for="expos">	¿Expusiste alguna vez?</label>
								<select id="expos" name="expos" class="form-select"required>
										<option selected>Seleccionar</option>
										<option value="si_expo">Si</option>
										<option value="no_expo">No</option>
								</select>
									<i class="bi bi-exclamation"></i>
									<small id="provError" class="provError">Error: Campos incorrectos</small>
							</div>
							
							<!--Expo_origen-->
							<div class="form_elemento">
								<label for="expo_origen">	¿Cuantas expos fueron en tu lugar de nacimiento?</label>
								<select id="expo_origen" name="expo_origen" class="form-select" required>
										<option selected >Seleccionar</option>
										<option value="todas_expo">Todas</option>
										<option value="non_expo">Ninguna</option>
										<option value="arriba_mitad">+ de la mitad</option>
										<option value="abajo_mitad">- de la mitad</option>
								</select>
									<i class="bi bi-exclamation"></i>
									<small id="provError" class="provError">Error: Campos incorrectos</small>
							</div>
								
								<!--Button envio FORM-->
								<div class="btn_form">
									<div class="form_elemento">
										<button type="submit"> Enviar </button>
									</div>
								</div>
					
							
							
							</form>
							
				</div>
					
		</div>
				
		
	</section>

	
		
	
