<?php
	try {
		// Создание SOAP-клиента
		$client = new SoapClient("http://www.site.local/demo/soap/stock.wsdl");
		
		// Посылка SOAP-запроса c получением результат
		$result = $client->getStock("5");
		echo "Текущий запас на складе: ", $result;
	} catch (SoapFault $exception) {
		echo $exception->getMessage();
	}
?>