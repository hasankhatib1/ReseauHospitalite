

$(document).ready(function() 
	{
		$('#calendar').fullCalendar({

			header: 
			{
				left: 'prev,next today',
				center: 'title',
				right: 'agendaDay,agendaWeek,month,listMonth'
			},

			defaultView: 'agendaWeek',
			aspectRatio: 1.35,
			defaultDate: new Date(),
			theme: true,
			editable: true,
			navLinks: true, // can click day/week names to navigate views
			selectable: true,
			selectHelper: true,
			eventLimit: true, // allow "more" link when too many events

			

			// Ajouter un evnment sur l'genda :
			select: function(start, end, event) {
				
				$eventStartTime = $.fullCalendar.formatDate(start, "HH:mm") ;
				$("#idEventStart").val($eventStartTime)  ;

        		$("#ModalCreat").modal();

        		$StartDate = $.fullCalendar.formatDate(start, "DD/MM/YYYY") ;
        		$("#eventDate").html($StartDate) ;

        		$(document).ready(function(){
				$('#idFormCreat').submit(function(){
				
			 	var titleVar = $("#idEventTitle").val();
			 	var descripVar = $("#idEventDescrip").val();
			 	var startHms = $("#idEventStart").val();
			 	var endHms = $("#idEventEnd").val();

				if (titleVar) 
				{
					 startDate = $.fullCalendar.formatDate(start, "Y-M-D");
					 endDate   = startDate ;
					 
					 startVar = startDate+' '+startHms+':00' ;
					 endVar   = endDate+' '+endHms+':00' ;

					 $.ajax({  // envoyer une requete AJAX au fichier add_events.php
					 url: 'http://localhost/Projet_Exemples/fullcalendar/php/add_events.php',
					 data: 'title='+ titleVar+'&description='+ descripVar+'&start='+ startVar +'&end='+ endVar,
					 type: "POST",
					 success : function() 
						{
							$("#idEventTitle").val('')     ;
							$("#idEventDescrip").val('')   ;
							$("#idEventStart").val('')     ;
							$("#idEventEnd").val('')       ;
							$("#ModalCreat").modal('hide') ;
							$('#calendar').fullCalendar('refetchEvents' );
						}
					 }); 
			           $('#calendar').fullCalendar('unselect');
			           return false   ;
			    }
			    }) ;
			    }) ;
			},

			
			// Modifier un evnment sur l'genda 
			eventClick: function(event) 
    		{
	        	$eventTitle = event.title ;
				$("#idEventTitleUp").val($eventTitle) ;
				$eventDescrip = event.description ;
				$("#idEventDescripUp").val($eventDescrip) ;

				$eventStartDate = $.fullCalendar.formatDate(event.start, "YYYY-MM-DD") ;
				$("#idEventDateStartUp").val($eventStartDate)  ;
				$eventStartTime = $.fullCalendar.formatDate(event.start, "HH:mm") ;
				$("#idEventStartUp").val($eventStartTime)  ;

				$eventEndDate = $.fullCalendar.formatDate(event.end, "YYYY-MM-DD") ;
				$("#idEventDateEndUp").val($eventEndDate)  ;
				$eventEndTime = $.fullCalendar.formatDate(event.end, "HH:mm") ;
				$("#idEventEndUp").val($eventEndTime)  ;


	        	$("#ModalUpdate").modal();
	        	$(document).ready(function(){
				$('#idBtnUpdate').click(function(){
					
				 	var titleVar = $("#idEventTitleUp").val()      ; 
				 	var descripVar = $("#idEventDescripUp").val()  ; 
				 	var startDate = $("#idEventDateStartUp").val() ; 
				 	var startHms = $("#idEventStartUp").val()      ;
				 	var endDate = $("#idEventDateEndUp").val()     ; 
				 	var endHms = $("#idEventEndUp").val()          ;

				 	startVar = startDate+' '+startHms+':00' ;
				 	endVar   = endDate+' '+endHms+':00' ;

					 $.ajax({
					 url: 'http://localhost/Projet_Exemples/fullcalendar/php/update_events.php',
					 data: 'title='+ titleVar+'&description='+ descripVar+'&start='+ startVar +'&end='+ endVar +'&id='+ event.id,
					 type: "POST",
					 success : function() 
						{
							$("#idEventTitleUp").val('')    ;
							$("#idEventDescripUp").val('')  ;
							$("#idEventDateStartUp").val('');
							$("#idEventStartUp").val('')    ;
							$("#idEventDateEndUp").val('')  ;
							$("#idEventEndUp").val('')      ;
							$("#ModalUpdate").modal('hide') ;
							$("#ModalMsgUpdate").modal('show') ;
							$('#calendar').fullCalendar('refetchEvents');
						}
					 });
					 $('#calendar').fullCalendar('unselect');
					 return false   ;
			    }) ;
			    }) ;

				$(document).ready(function(){
				$('#idBtnDelete').click(function(){
					$.ajax({
					 url: 'http://localhost/Projet_Exemples/fullcalendar/php/delete_events.php',
					 data: 'id='+ event.id,
					 type: "POST",
					 success : function() 
						{
							$("#ModalUpdate").modal('hide') ;
							$("#ModalMsgDelete").modal('show') ;
							$('#calendar').fullCalendar('refetchEvents' );
						}
					 });
					 $('#calendar').fullCalendar('unselect');
					 return false   ;

				}) ;
			    }) ;
			},


	    	// déplacer un evnment sur l'genda avec la souris
	    	eventDrop: function(event, delta) 
	    	{
				startVar = $.fullCalendar.formatDate(event.start, "Y-M-D HH:mm:ss");
				endVar = $.fullCalendar.formatDate(event.end, "Y-M-D HH:mm:ss");
				$.ajax({
				 url: 'http://localhost/Projet_Exemples/fullcalendar/php/update_events.php',
				 data: 'title='+ event.title+'&description='+ event.description+'&start='+ startVar +'&end='+ endVar +'&id='+ event.id,
				 type: "POST",
				 success: function() {
 					$("#ModalMsgUpdate").modal('show') ;
				 }
				});
			},


			// modifier les horairres d'un evnment sur l'genda avec la souris	
			eventResize: function(event) 
			{
				startVar = $.fullCalendar.formatDate(event.start, "Y-M-D HH:mm:ss");
				endVar = $.fullCalendar.formatDate(event.end, "Y-M-D HH:mm:ss");
				$.ajax({
				 url: 'http://localhost/Projet_Exemples/fullcalendar/php/update_events.php',
				 data: 'title='+ event.title+'&description='+ event.description+'&start='+ startVar +'&end='+ endVar +'&id='+ event.id ,
				 type: "POST",
				 success: function() {
 					$("#ModalMsgUpdate").modal('show') ;
				 }
				});
			},
	
			events: "http://localhost/Projet_Exemples/fullcalendar/php/events.php", // se connecter avec la base de données pour afficher les événements

		});
		
	});

