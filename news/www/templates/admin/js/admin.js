function getData(obj_form)
{
	var hData = {};
	$('input, textarea, select', obj_form).each(function()
	{
		if (this.name && this.name!='') 
		{
			hData[this.name] = this.value;
			console.log('hData[' + this.name + '] = ' + hData[this.name]);
		}
	});
	return hData;
};



function addProduct() {
	var itemName = $('#newItemName').val();
    var itemDesc = $('#newItemDesc').val();


    var postData =
    {
    	itemName: itemName,
    	itemDesc: itemDesc
    };

    $.ajax({
        type: 'POST',
        url: "/admin/addproduct/",
        data: postData,
        dataType: 'json', 
        success: function(data){
        	alert(data['message']);
             if(data['success']){
				$('#newItemName').val('');
				$('#newItemDesc').val('');
			}
        }
    });

}

function updateProduct(itemId) {
	var itemName =   $('#itemName_' + itemId).val();
    var itemDesc =   $('#itemDesc_' + itemId).val();


    var postData =
    {
    	itemId:     itemId,
    	itemName:   itemName,
    	itemDesc:   itemDesc,
    };

       $.ajax({
        type: 'POST',
        url: "/admin/updateproduct/",
        data: postData,
        dataType: 'json', 
        success: function(data){
        	alert(data['message']);
        }
    });
}




