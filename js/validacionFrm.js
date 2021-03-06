$(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {

      form.addEventListener('submit', function(event) {      	
        if (form.checkValidity() === false || $("#contrasena").value != $("#contrasena2").value ) {
          event.preventDefault();
          event.stopPropagation();
        }        
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
});

$("#contrasena").keyup(function(){
	if($("#contrasena").val().match(/^[a-zA-Z0-9]{5,}$/)){
		if($("#contrasena").val() != $("#contrasena2").val()){
			$("#contrasena").css("borderColor","#dc3545");
			$("#contrasena").next().css("display","block");
			$("#contrasena2").css("borderColor","#dc3545");
			$("#contrasena2").next().css("display","block");
		}else{
			$("#contrasena").css("borderColor","#28a745");
			$("#contrasena").next().css("display","none");
			$("#contrasena2").css("borderColor","#28a745");
			$("#contrasena2").next().css("display","none");
		}
	}else{
		$("#contrasena").css("borderColor","#dc3545");
		$("#contrasena").next().css("display","block");
		$("#contrasena2").css("borderColor","#dc3545");
		$("#contrasena2").next().css("display","block");
	}
});

$("#contrasena2").keyup(function(){
	if($("#contrasena2").val().match(/^[a-zA-Z0-9]{5,}$/)){
		if($("#contrasena").val() != $("#contrasena2").val()){
			$("#contrasena").css("borderColor","#dc3545");
			$("#contrasena").next().css("display","block");
			$("#contrasena2").css("borderColor","#dc3545");
			$("#contrasena2").next().css("display","block");
		}else{
			$("#contrasena").css("borderColor","#28a745");
			$("#contrasena").next().css("display","none");
			$("#contrasena2").css("borderColor","#28a745");
			$("#contrasena2").next().css("display","none");
		}
	}else{
		$("#contrasena").css("borderColor","#dc3545");
		$("#contrasena").next().css("display","block");
		$("#contrasena2").css("borderColor","#dc3545");
		$("#contrasena2").next().css("display","block");
	}
});



