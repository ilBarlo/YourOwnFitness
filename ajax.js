<script type="text/javascript">

	$(document).ready(function () {
		$('#button_progress0').click(function (e) {
            e.preventDefault();
			$.ajax({
			method: "post",
			url: "update_progress.php",
			data: $('#my_training0').serialize(),
			dataType: "text",
			success: function(){
				move(myBar0);
			}
			})
		})
    });

	$(document).ready(function () {
		$('#button_progress1').click(function (e) {
            e.preventDefault();
			$.ajax({
			method: "post",
			url: "update_progress.php",
			data: $('#my_training1').serialize(),
			dataType: "text",
			success: function(){
				move(mybar1);
			}
			})
		})
    });
	$(document).ready(function () {
		$('#button_progress2').click(function (e) {
            e.preventDefault();
			$.ajax({
			method: "post",
			url: "update_progress.php",
			data: $('#my_training2').serialize(),
			dataType: "text",
			success: function(result){
				move(mybar2);
			}
			})
		})
    });
	$(document).ready(function () {
		$('#button_progress3').click(function (e) {
            e.preventDefault();
			$.ajax({
			method: "post",
			url: "update_progress.php",
			data: $('#my_training3').serialize(),
			dataType: "text",
			success: function(result){
				move(mybar3);
			}
			})
		})
    });
	$(document).ready(function () {
		$('#button_progress4').click(function (e) {
            e.preventDefault();
			$.ajax({
			method: "post",
			url: "update_progress.php",
			data: $('#my_training4').serialize(),
			dataType: "text",
			success: function(result){
				move(mybar4);
			}
			})
		})
    });
	$(document).ready(function () {
		$('#button_progress5').click(function (e) {
            e.preventDefault();
			$.ajax({
			method: "post",
			url: "update_progress.php",
			data: $('#my_training5').serialize(),
			dataType: "text",
			success: function(result){
				move(mybar5);
			}
			})
		})
    });
	$(document).ready(function () {
		$('#button_progress6').click(function (e) {
            e.preventDefault();
			$.ajax({
			method: "post",
			url: "update_progress.php",
			data: $('#my_training6').serialize(),
			dataType: "text",
			success: function(result){
				move(mybar6);
			}
			})
		})
    });

	$(document).ready(function () {
		$('#button_progress7').click(function (e) {
            e.preventDefault();
			$.ajax({
			method: "post",
			url: "update_progress.php",
			data: $('#my_training7').serialize(),
			dataType: "text",
			success: function(result){
				move(mybar7);
			}
			})
		})
    });
	$(document).ready(function () {
		$('#button_progress8').click(function (e) {
            e.preventDefault();
			$.ajax({
			method: "post",
			url: "update_progress.php",
			data: $('#my_training8').serialize(),
			dataType: "text",
			success: function(result){
				move(mybar8);
			}
			})
		})
    });

	$(document).ready(function () {
		$('#button_progress9').click(function (e) {
            e.preventDefault();
			$.ajax({
			method: "post",
			url: "update_progress.php",
			data: $('#my_training9').serialize(),
			dataType: "text",
			success: function(result){
				move(mybar9);
			}
			})
		})
    });

	$(document).ready(function () {
		$('#button_progress10').click(function (e) {
            e.preventDefault();
			$.ajax({
			method: "post",
			url: "update_progress.php",
			data: $('#my_training10').serialize(),
			dataType: "text",
			success: function(result){
				move(mybar10);

			}
			})
		})
    });

$(document).ready(function () {
		$('#button_dimagrimento1').click(function (e) {
			$.ajax({
				method: "post",
				url: "store_training.php",
				data: $('#my_training_dimagrimento1').serialize(),
				dataType: "text",
				success: function(result){
					alert(result);
	
				}
				}) 
		})
    });

$(document).ready(function () {
		$('#button_dimagrimento2').click(function (e) {
			$.ajax({
				method: "post",
				url: "store_training.php",
				data: $('#my_training_dimagrimento2').serialize(),
				dataType: "text",
				success: function(result){
					alert(result);
	
				}
				}) 
		})
    });

$(document).ready(function () {
	$('#button_scheda1').click(function (e) {
		$.ajax({
			method: "post",
			url: "store_training.php",
			data: $('#my_training_scheda1').serialize(),
			dataType: "text",
			success: function(result){
				alert(result);

			}
			}) 
	})
});

$(document).ready(function () {
	$('#button_scheda2').click(function (e) {
		$.ajax({
			method: "post",
			url: "store_training.php",
			data: $('#my_training_scheda2').serialize(),
			dataType: "text",
			success: function(result){
				alert(result);

			}
			}) 
	})
});

$(document).ready(function () {
		$('#button_scheda3').click(function (e) {
			$.ajax({
				method: "post",
				url: "store_training.php",
				data: $('#my_training_scheda3').serialize(),
				dataType: "text",
				success: function(result){
					alert(result);
	
				}
				}) 
		})
    });

$(document).ready(function () {
		$('#button_scheda4').click(function (e) {
			$.ajax({
				method: "post",
				url: "store_training.php",
				data: $('#my_training_scheda4').serialize(),
				dataType: "text",
				success: function(result){
					alert(result);
	
				}
				}) 
		})
    });

$(document).ready(function () {
		$('#button_scheda5').click(function (e) {
			$.ajax({
				method: "post",
				url: "store_training.php",
				data: $('#my_training_scheda3').serialize(),
				dataType: "text",
				success: function(result){
					alert(result);
	
				}
				}) 
		})
    });


$(document).ready(function () {
		$('#button_scheda6').click(function (e) {
			$.ajax({
				method: "post",
				url: "store_training.php",
				data: $('#my_training_scheda6').serialize(),
				dataType: "text",
				success: function(result){
					alert(result);
	
				}
				}) 
		})
    });

$(document).ready(function () {
		$('#button_scheda7').click(function (e) {
			$.ajax({
				method: "post",
				url: "store_training.php",
				data: $('#my_training_scheda7').serialize(),
				dataType: "text",
				success: function(result){
					alert(result);
	
				}
				}) 
		})
    });

$(document).ready(function () {
		$('#button_scheda8').click(function (e) {
			$.ajax({
				method: "post",
				url: "store_training.php",
				data: $('#my_training_scheda8').serialize(),
				dataType: "text",
				success: function(result){
					alert(result);
	
				}
				}) 
		})
    });

$(document).ready(function () {
		$('#button_scheda9').click(function (e) {
			$.ajax({
				method: "post",
				url: "store_training.php",
				data: $('#my_training_scheda9').serialize(),
				dataType: "text",
				success: function(result){
					alert(result);
	
				}
				}) 
		})
    });

$(document).ready(function () {
		$('#button_scheda10').click(function (e) {
			$.ajax({
				method: "post",
				url: "store_training.php",
				data: $('#my_training_scheda10').serialize(),
				dataType: "text",
				success: function(result){
					alert(result);
	
				}
				}) 
		})
    });

$(document).ready(function () {
		$('#button_potenziamento1').click(function (e) {
			$.ajax({
				method: "post",
				url: "store_training.php",
				data: $('#my_training_potenziamento1').serialize(),
				dataType: "text",
				success: function(result){
					alert(result);
	
				}
				}) 
		})
    });

$(document).ready(function () {
		$('#button_potenziamento2').click(function (e) {
			$.ajax({
				method: "post",
				url: "store_training.php",
				data: $('#my_training_potenziamento2').serialize(),
				dataType: "text",
				success: function(result){
					alert(result);
	
				}
				}) 
		})
    });

$(document).ready(function () {
		$('#button_forma1').click(function (e) {
			$.ajax({
				method: "post",
				url: "store_training.php",
				data: $('#my_training_forma1').serialize(),
				dataType: "text",
				success: function(result){
					alert(result);
	
				}
				}) 
		})
    });
	$(document).ready(function () {
		$('#button_forma2').click(function (e) {
			$.ajax({
				method: "post",
				url: "store_training.php",
				data: $('#my_training_forma2').serialize(),
				dataType: "text",
				success: function(result){
					alert(result);
	
				}
				}) 
		})
    });

$(document).ready(function () {
		$('#button_legpocalypse').click(function (e) {
			$.ajax({
				method: "post",
				url: "store_training.php",
				data: $('#my_training_legpocalypse').serialize(),
				dataType: "text",
				success: function(result){
					alert(result);
	
				}
				}) 
		})
    });


$(document).ready(function () {
		$('#Bdieta1').click(function (e) {
			e.preventDefault();
			alert("CIAO");
			$.ajax({
				method: "post",
				url: "store_diete.php",
				data: $('#formDieta1').serialize(),
				dataType: "text",
				success: function(result){
					alert(result);
				}
				}) 
		})
    });

$(document).ready(function () {
		$('#Bdieta2').click(function (e) {
			e.preventDefault();
			$.ajax({
				method: "post",
				url: "store_diete.php",
				data: $('#formDieta2').serialize(),
				dataType: "text",
				success: function(result){
					alert(result);
				}
				}) 
		})
    });

$(document).ready(function () {
		$('#Bdieta3').click(function (e) {
			e.preventDefault();
			$.ajax({
				method: "post",
				url: "store_diete.php",
				data: $('#formDieta3').serialize(),
				dataType: "text",
				success: function(result){
					alert(result);
				}
				}) 
		})
    });

$(document).ready(function () {
		$('#Bdieta4').click(function (e) {
			e.preventDefault();
			$.ajax({
				method: "post",
				url: "store_diete.php",
				data: $('#formDieta4').serialize(),
				dataType: "text",
				success: function(result){
					alert(result);
				}
				}) 
		})
    });

$(document).ready(function () {
		$('#Bdieta5').click(function (e) {
			e.preventDefault();
			$.ajax({
				method: "post",
				url: "store_diete.php",
				data: $('#formDieta5').serialize(),
				dataType: "text",
				success: function(result){
					alert(result);
				}
				}) 
		})
    });

$(document).ready(function () {
		$('#Bdieta6').click(function (e) {
			e.preventDefault();
			$.ajax({
				method: "post",
				url: "store_diete.php",
				data: $('#formDieta6').serialize(),
				dataType: "text",
				success: function(result){
					alert(result);
				}
				}) 
		})
    });
</script>
