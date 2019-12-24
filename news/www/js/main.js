function addToCart(itemId)
{
	console.log("js - addToCart()");// Отладочная функция (Удалить)
	$.ajax({// Джеквари функция для аякс запросов.
		type: 'POST',// Тип запроса метод POST.
		//async: false,//(Запрос не асинхронен)
		url: "/cart/addtocart/" + itemId + '/',//Куда идёт обращение, передача гет параметра itemId
		dataType: 'json',//Тип данных json

		success: function(data)//json_encode($resData) 
		{
			if(data['success'])
			{
				$('#cartCntItems').html(data['cntItems']);//Кол-во элементов в массиве.

				$('#addCart_'+ itemId).hide();// Добавить 
				$('#removeCart_'+ itemId).show(); // Удалить 
			}
		}
	});
}

