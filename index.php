<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<p>Używaj nipu: 7171642051</p>
<p>Jest to API do testów i działa tylko z tym nipem</p>
<form method="POST" action="example.php" id="contactForm">
NIP <input type="text" id="nip" name="nip"></br>
<input type="submit" value="pobierz dane z gus" id="btn_send"></br>
Nazwa firmy <input type="text" id="company" name="company"></br>
Imie <input type="text" id="imie" name="imie"></br>
Nazwisko <input type="text" id="nazwisko" name="nazwisko"></br>
Ulica <input type="text" id="ulica" name="ulica"></br>
Miasto <input type="text" id="miasto" name="miasto"></br>
Kod pocztowy <input type="text" id="postcode" name="postcode"></br>

</form>
<span class="response"></span>



<script>
$(function(){

	var form = $("#contactForm");

	form.submit(function (event){
		$(this).attr("disabled","disabled");
		event.preventDefault();

		$.ajax({
			type: form.attr("method"),
			url: form.attr('action'),
			data: form.serialize(),
			dataType: "json",
			success: function(data) {
				document.getElementById("company").value = data.company;
				document.getElementById("imie").value = data.imie;
				document.getElementById("nazwisko").value = data.nazwisko;
				document.getElementById("ulica").value = data.ulica;
				document.getElementById("miasto").value = data.miasto;
				document.getElementById("postcode").value = data.postcode;
			}

		});
	});

});
</script>