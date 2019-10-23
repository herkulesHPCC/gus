	<?php
	header("Content-type:application/json;charset=utf-8");

			
			
			// nip24 api
			require_once 'NIP24/NIP24Client.php';
			
			\NIP24\NIP24Client::registerAutoloader();
			
			
			//Uzywaj tego nipu: 7171642051
			
			// Utworzenie obiektu klienta usługi serwisu testowego
			$nip24 = new \NIP24\NIP24Client();
			
			$nip = $_POST['nip'];
			
			$invoice = $nip24->getInvoiceDataExt(\NIP24\Number::NIP, $nip);

			
			$data['response'] = "success";
			$data['company'] = $invoice->name;
			$data['imie'] = $invoice->firstname;
			$data['nazwisko'] = $invoice->lastname;
			$data['miasto'] = $invoice->postCity;
			$data['ulica'] = $invoice->street;
			$data['postcode'] = $invoice->postCode;
			echo json_encode($data);
				
			
			// Wywołanie metody zwracającej dane do faktury
			
			// if ($invoice) {
			// 	echo '<p>Nazwa: ' . $invoice->name . '</p>';
			// 	echo '<p>Imię i nazwisko: ' . $invoice->firstname . ' ' . $invoice->lastname . '</p>';
			// 	echo '<p>Adres: ' . $invoice->postCode . ' ' . $invoice->postCity . ' ' . $invoice->street
			// 		. ' ' . $invoice->streetNumber . '</p>';
			// 	echo '<p>NIP: ' . $invoice->nip . '</p>';
			// }
			// else {
			// 	echo '<p>Błąd: ' . $nip24->getLastError() . '</p>';
			// }
			
			
		?>
	