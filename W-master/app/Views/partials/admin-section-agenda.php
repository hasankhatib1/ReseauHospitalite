
				<!-- ///////////// Ajouté par Hasan ///////////// -->


<div class="box" id='calendar'></div>

<div class="container">  <!-- modal créer un événement -->
	<form type="post" action="" id = "idFormCreat" >
		<div class="modal fade" id="ModalCreat" role="dialog">   <!-- Modal -->
			<div class="modal-dialog">
			    <div class="modal-content">  <!-- Modal Content-->

			        <div class="modal-header"> <!-- Modal Header-->
			        	<button type="button" class="close" data-dismiss="modal">&times;</button>
			        	<h6 class="modal-title text-center titrsPage">Créer votre événement <span id="eventDate"> </span></h6>
			        </div> <!-- Fin Modal Header-->

			        <div class="modal-body"> <!-- Modal Body-->
				        <label for="eventTitle" class="col-sm-2 control-label"> Titre </label>
				        <div class="col-sm-10">
				        	<input type="text" name="eventTitle" id="idEventTitle" class="form-control"> <br/>
						</div>

				        <label for="eventDescrip" class="col-sm-2 control-label"> Description </label>
				        <div class="col-sm-10">
				        	<textarea rows="4" cols="50" name="eventDescrip" id="idEventDescrip" class="form-control"> </textarea> <br/>
				        </div>

				        <label for="eventStart" class="col-sm-2 control-label"> De </label>
				        <div class="col-sm-10">
				        	<input type="time" name="eventStart" id="idEventStart" placeholder="00:00" class="form-control"> <br/>
				        </div>

				        <label for="eventEnd" class="col-sm-2 control-label"> A </label>
				        <div class="col-sm-10">
				        	<input type="time" name="eventEnd" id="idEventEnd" placeholder="00:00" class="form-control"> <br/>
				        </div>
			        </div> <!-- Fin Modal Body-->
					<div class="clearfix "></div>
			        <div class="modal-footer"> <!-- Modal Footer-->
			        	<input type="submit" value="Créer" id="idBtnCreat" class="btn btn-success">
			        	<button type="button" class="btn-default btn" data-dismiss="modal">Fermer</button>
			        
			        </div> <!-- Fin Modal Footer-->

		    	</div> <!-- Fin Modal content-->
	      
	    	</div>
	  	</div>
	</form> 
</div>

<div class="container">   <!-- modal modifier ou supprimer un événement -->
	<form type="post" action="" id = "idFormUpdate">
		<div class="modal fade" id="ModalUpdate" role="dialog">   <!-- Modal -->
	    	<div class="modal-dialog">
	      		<div class="modal-content">   <!-- Modal content-->

	        		<div class="modal-header"> <!-- Modal Header-->
	          			<button type="button" class="close" data-dismiss="modal">&times;</button>
	          			<h6 class="modal-title text-center titrsPage">Modifier votre événement : </h6>
	        		</div> <!-- Fin Modal Header-->

	        		<div class="modal-body"> <!-- Modal Body-->
	        			<label for="eventTitleUp" class="col-sm-2 control-label"> Titre </label>
	        			<div class="col-sm-10">
	        				<input type="text" name="eventTitleUp" id="idEventTitleUp" class="form-control"> <br/>
						</div>

				        <label for="eventDescripUp" class="col-sm-2 control-label"> Description </label>
				        <div class="col-sm-10">
				        	<textarea rows="4" cols="50" name="eventDescripUp" id="idEventDescripUp" class="form-control"> </textarea> <br/>
				        </div>

				        <label for="eventDateStartUp" class="col-sm-2 control-label"> De </label>
				        <div class="col-sm-10">
					        <input type="date" name="eventDateStartUp" id="idEventDateStartUp" class="form-control"> 
					        <input type="time" name="eventStartUp" id="idEventStartUp" class="form-control"> <br/>
					    </div>

				        <label for="eventDateEndUp" class="col-sm-2 control-label"> A </label>
				        <div class="col-sm-10">
					        <input type="date" name="eventDateEndUp" id="idEventDateEndUp" class="form-control">
					        <input type="time" name="eventEndUp" id="idEventEndUp" class="form-control"> <br/>
					    </div>
	        		</div> <!-- Fin Modal Body-->
					<div class="clearfix "></div>
	        		<div class="modal-footer"> <!-- Modal Footer-->
	          			<input type="button"  id="idBtnUpdate" class="btn btn-success" value="Modifier">
	          			<input type="button" id="idBtnDelete" class="btn btn-danger" value= "Supprimer l'événement">
	          			<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>

	        		</div> <!-- Fin Modal Footer-->
	      		</div> <!-- Fin Modal content-->
	      
	    	</div>
	  	</div>
	</form> 
</div>

<div class="modal fade" id="ModalMsgUpdate" role="dialog" >   <!-- Modal -->
	<div class="modal-dialog" style="width:20em;">
	    <div class="modal-content">   <!-- Modal content-->
	    <div class="modal-body"> <!-- Modal Body-->
	    	<p class="text-center"> Evénement modifié </p>
	    </div>
	    <div class="modal-footer" style="text-align: center;"> <!-- Modal Footer-->
	    	<button type="button" class="btn btn-default" data-dismiss="modal" >Fermer</button>
	    </div>
	    </div>
	</div>
</div>


<div class="modal fade" id="ModalMsgDelete" role="dialog" >   <!-- Modal -->
	<div class="modal-dialog" style="width:20em;">
	    <div class="modal-content">   <!-- Modal content-->
	    <div class="modal-body"> <!-- Modal Body-->
	    	<p class="text-center"> Evénement supprimé </p>
	    </div>
	    <div class="modal-footer" style="text-align: center;"> <!-- Modal Footer-->
	    	<button type="button" class="btn btn-default" data-dismiss="modal" >Fermer</button>
	    </div>
	    </div>
	</div>
</div>

<br/>
<div class="clearfix"></div>