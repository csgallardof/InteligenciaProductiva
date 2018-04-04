
function getSelectValue(){

				var selectedValue= document.getElementById("select-provincia").value;
				alert(selectedValue);
				console.log(selectedValue);
			$.get('/api/provincia/'+selectedValue+'/cantones',function(data){
				var html_select = '<option value="">Seleccione Canton</option>';
				//console.log(data)
				
				
				//console.log(canton);
				
				for (var i = 0; i <data.length; i++) {

					 	html_select += '<option value="'+data[i].id+'">'+data[i].nombre_canton+'</option>';
					 //html_select += '<option value="'+data[i].id+'">'+data[i].nombre_canton+'</option>';
				}
				document.getElementById("select-canto").innerHTML = html_select;
				console.log(html_select);
			});
			}



