import mercadopago
sdk = mercadopago.SDK("PROD_ACCESS_TOKEN")

request = {
	"items": [
		
	],
}

preference_response = sdk.preference().create(request)
preference = preference_response["response"]