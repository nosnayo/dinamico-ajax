//Especificar lista de musica segun el ID

//Se espesifica que es por ID
//obtener el evento change, se va a crar una opcion a la que se le va a pasar el evento
//Hacer peticion AJAX mediante el verbo GET, se le va especificar la ruta donde se va a ir
//ademas el id



$(document).ready(function(){
	$("#lista_reproduccion")on('musica',function(event){
//$("#lista_reproduccion").change(function(event){
	$.get("videos/"+event.target.value+"",function(response, lista_reproduccion){


	//uso del evente que se esta recibiendo en la funcion
	//con event.target lo que hace es obtener el componente en el cual se esta generando el evento
	//entonces al obtener ese componente , yo puedo  obtener el value.
	//el value sera basicamente el ID. el id que tiene nuestro video.
	//luego una funcion en donde se va  a tener una respuesta y el video
		//console.log("hola"); //vista de prueba en la web por consola
		$("#video").empty();
		for(i=0; i<response.lenght; i++){
			$("#video").append("<option value='"+response[i].id+"'> "+response[i].name+"</opcion>");
		}
	});
	});
});
/*
$("#lista_reproduccion").change(event => {
	$.get('videos/${event.target.value}', function(res, sta){



	//uso del evente que se esta recibiendo en la funcion
	//con event.target lo que hace es obtener el componente en el cual se esta generando el evento
	//entonces al obtener ese componente , yo puedo  obtener el value.
	//el value sera basicamente el ID. el id que tiene nuestro video.
	//luego una funcion en donde se va  a tener una respuesta y el video
		//console.log("hola"); //vista de prueba en la web por consola
		$("#video").empty();
		res.forEach(element => {
			$("#video").append('<option value=${element.id}> ${<element></element>.nombre} </opcion>');
		});
	});
});*/