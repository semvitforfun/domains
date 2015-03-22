
function multFloats(a,b){
  var atens = Math.pow(10,String(a).length - String(a).indexOf('.') - 1), 
      btens = Math.pow(10,String(b).length - String(b).indexOf('.') - 1); 
  var result = (a * atens) * (b * btens) / (atens * btens); 
  return result;
}



function calc(){
	var i = 0;
	var fields = document.getElementsByTagName('input');
	
	var field_1_1_1 = 0;
	var field_1_1_2 = 0;
	var field_1_1_3 = 0;
	
	var field_P2_1_1_1 = 0;
	var field_P2_1_1_2 = 0;
	
	var field_C_1_1_1 = 0;
	var field_C_1_1_2 = 0;
	var field_C_1_1_3 = 0;
	
	var field_D_1_1_1 = 0;
	var field_D_1_1_2 = 0;
	var field_D_1_1_3 = 0;
	var field_D_1_2_1 = 0;
	var field_D_1_2_2 = 0;
	var field_D_1_2_3 = 0;
	var field_D_1_2_4 = 0;
	var field_D_1_2_6 = 0;
	var field_D_2_1_1 = 0;
	var field_D_2_1_2 = 0;
	var field_D_2_2_1 = 0;
	var field_D_2_2_2 = 0;
	
	var field_D2_1_1_1 = 0;
	var field_D2_1_1_2 = 0;
	var field_D2_1_1_3 = 0;
	var field_D2_1_2_1 = 0;
	var field_D2_1_2_2 = 0;
	var field_D2_1_2_3 = 0;
	var field_D2_2_1_1 = 0;
	var field_D2_2_1_2 = 0;
	var field_D2_2_2_1 = 0;
	var field_D2_2_2_2 = 0;
	
	
	for (i=0; i < fields.length; ++i)
	{
	
		// B 1.1.1 
		if( (fields[i].name == '1_1_1_a') || 
			(fields[i].name == '1_1_1_b') ||  
			(fields[i].name == '1_1_1_c') || 
			(fields[i].name == '1_1_1_d') || 
			(fields[i].name == '1_1_1_e') || 
			(fields[i].name == '1_1_1_f') || 
			(fields[i].name == '1_1_1_g') || 
			(fields[i].name == '1_1_1_h') ||
            (fields[i].name == '1_1_1_i'))
		{
			if(true == isNumber(fields[i].value))
			{
                //list($num_int, $num_float) = split('\.', (fields[i].value));
                
                //$field_1_1_1_a = $field_1_1_1_a + num_int;
                //$field_1_1_1_b = $field_1_1_1_b + num_float;
                
                
                //field_1_1_1 = parseFloat((str)$field_1_1_1_a.".".(str)$field_1_1_1_b);
                
                //field_1_1_1 = multFloats(field_1_1_1, parseFloat(fields[i].value));
                
                var result = field_1_1_1 + parseFloat(fields[i].value);
                result = result.toFixed(12) ;
                field_1_1_1 = parseFloat(result);
			}
		}
		// B 1.1.2 
		if( (fields[i].name == '1_1_2_a1') || 
			(fields[i].name == '1_1_2_a2') ||  
			(fields[i].name == '1_1_2_a3') || 
			(fields[i].name == '1_1_2_b')  || 
			(fields[i].name == '1_1_2_c')  || 
			(fields[i].name == '1_1_2_d') )
		{
			if(true == isNumber(fields[i].value))
			{
                var result = field_1_1_2 + parseFloat(fields[i].value);
                result = result.toFixed(12);
                field_1_1_2 = parseFloat(result);
			}
		}
		// B 1.1.3 
		if( (fields[i].name == '1_1_3_a') || 
			(fields[i].name == '1_1_3_b') ||  
			(fields[i].name == '1_1_3_c') || 
			(fields[i].name == '1_1_3_d') )
		{
			if(true == isNumber(fields[i].value))
			{
                var result = field_1_1_3 + parseFloat(fields[i].value);
                result = result.toFixed(12);
                field_1_1_3 = parseFloat(result);
			}
		}
		// B2 1.1.1 
		if( (fields[i].name == 'P2_1_1_1_a') || 
			(fields[i].name == 'P2_1_1_1_b') ||  
			(fields[i].name == 'P2_1_1_1_c') || 
			(fields[i].name == 'P2_1_1_1_d') || 
			(fields[i].name == 'P2_1_1_1_e') ||
			(fields[i].name == 'P2_1_1_1_f') )
		{
			if(true == isNumber(fields[i].value))
			{
                var result = field_P2_1_1_1 + parseFloat(fields[i].value);
                result = result.toFixed(12);
                field_P2_1_1_1 = parseFloat(result);
			}
		}
		// B2 1.1.2 
		if( (fields[i].name == 'P2_1_1_2_a') || 
			(fields[i].name == 'P2_1_1_2_b') ||  
			(fields[i].name == 'P2_1_1_2_c') || 
			(fields[i].name == 'P2_1_1_2_d')  )
		{
			if(true == isNumber(fields[i].value))
			{
                var result = field_P2_1_1_2 + parseFloat(fields[i].value);
                result = result.toFixed(12);
                field_P2_1_1_2 = parseFloat(result);
			}
		}

		// C 1.1.1 
		if( (fields[i].name == 'C_1_1_1_a') || 
			(fields[i].name == 'C_1_1_1_b') ||  
			(fields[i].name == 'C_1_1_1_c') || 
			(fields[i].name == 'C_1_1_1_d') || 
			(fields[i].name == 'C_1_1_1_e') ||
			(fields[i].name == 'C_1_1_1_f') ||
            (fields[i].name == 'C_1_1_1_g') ||
			(fields[i].name == 'C_1_1_1_h') ||
            (fields[i].name == 'C_1_1_1_i'))
		{
			if(true == isNumber(fields[i].value))
			{
                var result = field_C_1_1_1 + parseFloat(fields[i].value);
                result = result.toFixed(12);
                field_C_1_1_1 = parseFloat(result);
			}
		}
		// C 1.1.2 
		if( (fields[i].name == 'C_1_1_2_a1') || 
			(fields[i].name == 'C_1_1_2_a2') ||  
			(fields[i].name == 'C_1_1_2_a3') || 
			(fields[i].name == 'C_1_1_2_b') || 
			(fields[i].name == 'C_1_1_2_c') ||
			(fields[i].name == 'C_1_1_2_d') )
		{
			if(true == isNumber(fields[i].value))
			{
                var result = field_C_1_1_2 + parseFloat(fields[i].value);
                result = result.toFixed(12);
                field_C_1_1_2 = parseFloat(result);
			}
		}
		// C 1.1.3 
		if( (fields[i].name == 'C_1_1_3_a') ||  
			(fields[i].name == 'C_1_1_3_b') || 
			(fields[i].name == 'C_1_1_3_c') ||
			(fields[i].name == 'C_1_1_3_d') )
		{
			if(true == isNumber(fields[i].value))
			{
                var result = field_C_1_1_3 + parseFloat(fields[i].value);
                result = result.toFixed(12);
                field_C_1_1_3 = parseFloat(result);
			}
		}

		// D 1.1.1 
		if( (fields[i].name == 'D_1_1_1_a') || 
			(fields[i].name == 'D_1_1_1_b') ||  
			(fields[i].name == 'D_1_1_1_c')  )
		{
			if(true == isNumber(fields[i].value))
			{
                var result = field_D_1_1_1 + parseFloat(fields[i].value);
                result = result.toFixed(12);
                field_D_1_1_1 = parseFloat(result);
			}
		}
		// D 1.1.2 
		if( (fields[i].name == 'D_1_1_2_a') || 
			(fields[i].name == 'D_1_1_2_b')  )
		{
			if(true == isNumber(fields[i].value))
			{
                var result = field_D_1_1_2 + parseFloat(fields[i].value);
                result = result.toFixed(12);
                field_D_1_1_2 = parseFloat(result);
			}
		}
		// D 1.1.3 
		if( (fields[i].name == 'D_1_1_3_a') || 
			(fields[i].name == 'D_1_1_3_b')  )
		{
			if(true == isNumber(fields[i].value))
			{
                var result = field_D_1_1_3 + parseFloat(fields[i].value);
                result = result.toFixed(12);
                field_D_1_1_3 = parseFloat(result);
			}
		}
		// D 1.2.1 
		if( (fields[i].name == 'D_1_2_1_a') || 
			(fields[i].name == 'D_1_2_1_b') ||  
			(fields[i].name == 'D_1_2_1_c')  )
		{
			if(true == isNumber(fields[i].value))
			{
                var result = field_D_1_2_1 + parseFloat(fields[i].value);
                result = result.toFixed(12);
                field_D_1_2_1 = parseFloat(result);
			}
		}
		// D 1.2.2 
		if( (fields[i].name == 'D_1_2_2_a') || 
			(fields[i].name == 'D_1_2_2_b')  )
		{
			if(true == isNumber(fields[i].value))
			{
                var result = field_D_1_2_2 + parseFloat(fields[i].value);
                result = result.toFixed(12);
                field_D_1_2_2 = parseFloat(result);
			}
		}
		// D 1.2.3 
		if( (fields[i].name == 'D_1_2_3_a') || 
			(fields[i].name == 'D_1_2_3_b')  )
		{
			if(true == isNumber(fields[i].value))
			{
                var result = field_D_1_2_3 + parseFloat(fields[i].value);
                result = result.toFixed(12);
                field_D_1_2_3 = parseFloat(result);
			}
		}
		// D 1.2.4 
		if( (fields[i].name == 'D_1_2_4_a') || 
			(fields[i].name == 'D_1_2_4_b') || 
			(fields[i].name == 'D_1_2_4_c') || 
			(fields[i].name == 'D_1_2_4_d') || 
			(fields[i].name == 'D_1_2_4_e') || 
			(fields[i].name == 'D_1_2_4_f')  )
		{
			if(true == isNumber(fields[i].value))
			{
                var result = field_D_1_2_4 + parseFloat(fields[i].value);
                result = result.toFixed(12);
                field_D_1_2_4 = parseFloat(result);
			}
		}
		// D 1.2.6 
		if( (fields[i].name == 'D_1_2_6_a') || 
			(fields[i].name == 'D_1_2_6_b')   )
		{
			if(true == isNumber(fields[i].value))
			{
                var result = field_D_1_2_6 + parseFloat(fields[i].value);
                result = result.toFixed(12);
                field_D_1_2_6 = parseFloat(result);
			}
		}
		// D 2.1.1 
		if( (fields[i].name == 'D_2_1_1_a') || 
			(fields[i].name == 'D_2_1_1_b') ||  
			(fields[i].name == 'D_2_1_1_c')  )
		{
			if(true == isNumber(fields[i].value))
			{
                var result = field_D_2_1_1 + parseFloat(fields[i].value);
                result = result.toFixed(12);
                field_D_2_1_1 = parseFloat(result);
			}
		}
		// D 2.1.2 
		if( (fields[i].name == 'D_2_1_2_a') || 
			(fields[i].name == 'D_2_1_2_b')  )
		{
			if(true == isNumber(fields[i].value))
			{
                var result = field_D_2_1_2 + parseFloat(fields[i].value);
                result = result.toFixed(12);
                field_D_2_1_2 = parseFloat(result);
			}
		}
		// D 2.2.1 
		if( (fields[i].name == 'D_2_2_1_a') || 
			(fields[i].name == 'D_2_2_1_b') ||  
			(fields[i].name == 'D_2_2_1_c')  )
		{
			if(true == isNumber(fields[i].value))
			{
                var result = field_D_2_2_1 + parseFloat(fields[i].value);
                result = result.toFixed(12);
                field_D_2_2_1 = parseFloat(result);
			}
		}
		// D 2.2.2 
		if( (fields[i].name == 'D_2_2_2_a') || 
			(fields[i].name == 'D_2_2_2_b')  )
		{
			if(true == isNumber(fields[i].value))
			{
                var result = field_D_2_2_2 + parseFloat(fields[i].value);
                result = result.toFixed(12);
                field_D_2_2_2 = parseFloat(result);
			}
		}

		// D2 1.1.1 
		if( (fields[i].name == 'D2_1_1_1_a') || 
			(fields[i].name == 'D2_1_1_1_b')  )
		{
			if(true == isNumber(fields[i].value))
			{
				field_D2_1_1_1 = field_D2_1_1_1 + parseFloat(fields[i].value);
			}
		}
		// D2 1.1.2 
		if( (fields[i].name == 'D2_1_1_2_a') || 
			(fields[i].name == 'D2_1_1_2_b') ||
			(fields[i].name == 'D2_1_1_2_c')  )
		{
			if(true == isNumber(fields[i].value))
			{
                var result = field_D2_1_1_2 + parseFloat(fields[i].value);
                result = result.toFixed(12);
                field_D2_1_1_2 = parseFloat(result);
			}
		}
		// D2 1.1.3 
		if( (fields[i].name == 'D2_1_1_3_a') || 
			(fields[i].name == 'D2_1_1_3_b')  )
		{
			if(true == isNumber(fields[i].value))
			{
                var result = field_D2_1_1_3 + parseFloat(fields[i].value);
                result = result.toFixed(12);
                field_D2_1_1_3 = parseFloat(result);
			}
		}

		// D2 1.2.1 
		if( (fields[i].name == 'D2_1_2_1_a') || 
			(fields[i].name == 'D2_1_2_1_b')  )
		{
			if(true == isNumber(fields[i].value))
			{
                var result = field_D2_1_2_1 + parseFloat(fields[i].value);
                result = result.toFixed(12);
                field_D2_1_2_1 = parseFloat(result);
			}
		}
		// D2 1.2.2 
		if( (fields[i].name == 'D2_1_2_2_a') || 
			(fields[i].name == 'D2_1_2_2_b') ||
			(fields[i].name == 'D2_1_2_2_c')  )
		{
			if(true == isNumber(fields[i].value))
			{
                var result = field_D2_1_2_2 + parseFloat(fields[i].value);
                result = result.toFixed(12);
                field_D2_1_2_2 = parseFloat(result);
			}
		}
		// D2 1.2.3 
		if( (fields[i].name == 'D2_1_2_3_a') || 
			(fields[i].name == 'D2_1_2_3_b')  )
		{
			if(true == isNumber(fields[i].value))
			{
                var result = field_D2_1_2_3 + parseFloat(fields[i].value);
                result = result.toFixed(12);
                field_D2_1_2_3 = parseFloat(result);
			}
		}
		// D2 2.1.1 
		if( (fields[i].name == 'D2_2_1_1_a') || 
			(fields[i].name == 'D2_2_1_1_b')  )
		{
			if(true == isNumber(fields[i].value))
			{
                var result = field_D2_2_1_1 + parseFloat(fields[i].value);
                result = result.toFixed(12);
                field_D2_2_1_1 = parseFloat(result);
			}
		}
		// D2 2.1.2 
		if( (fields[i].name == 'D2_2_1_2_a') || 
			(fields[i].name == 'D2_2_1_2_b') ||
			(fields[i].name == 'D2_2_1_2_c')  )
		{
			if(true == isNumber(fields[i].value))
			{
                var result = field_D2_2_1_2 + parseFloat(fields[i].value);
                result = result.toFixed(12);
                field_D2_2_1_2 = parseFloat(result);
			}
		}
		// D2 2.2.1 
		if( (fields[i].name == 'D2_2_2_1_a') || 
			(fields[i].name == 'D2_2_2_1_b')  )
		{
			if(true == isNumber(fields[i].value))
			{
                var result = field_D2_2_2_1 + parseFloat(fields[i].value);
                result = result.toFixed(12);
                field_D2_2_2_1 = parseFloat(result);
			}
		}
		// D2 2.2.2 
		if( (fields[i].name == 'D2_2_2_2_a') || 
			(fields[i].name == 'D2_2_2_2_b') ||
			(fields[i].name == 'D2_2_2_2_c')  )
		{
			if(true == isNumber(fields[i].value))
			{
                var result = field_D2_2_2_2 + parseFloat(fields[i].value);
                result = result.toFixed(12);
                field_D2_2_2_2 = parseFloat(result);
			}
		}
	}
	
	//set values
	setValue('1_1_1', field_1_1_1);
	setValue('1_1_2', field_1_1_2);
	setValue('1_1_3', field_1_1_3);
	
	setValue('P2_1_1_1', field_P2_1_1_1);
	setValue('P2_1_1_2', field_P2_1_1_2);
	
	setValue('C_1_1_1', field_C_1_1_1);
	setValue('C_1_1_2', field_C_1_1_2);
	setValue('C_1_1_3', field_C_1_1_3);
	
	setValue('D_1_1_1', field_D_1_1_1);
	setValue('D_1_1_2', field_D_1_1_2);
	setValue('D_1_1_3', field_D_1_1_3);
	setValue('D_1_2_1', field_D_1_2_1);
	setValue('D_1_2_2', field_D_1_2_2);
	setValue('D_1_2_3', field_D_1_2_3);
	setValue('D_1_2_4', field_D_1_2_4);
	setValue('D_1_2_6', field_D_1_2_6);
	setValue('D_2_1_1', field_D_2_1_1);
	setValue('D_2_1_2', field_D_2_1_2);
	setValue('D_2_2_1', field_D_2_2_1);
	setValue('D_2_2_2', field_D_2_2_2);
	
	setValue('D2_1_1_1', field_D2_1_1_1);
	setValue('D2_1_1_2', field_D2_1_1_2);
	setValue('D2_1_1_3', field_D2_1_1_3);
	setValue('D2_1_2_1', field_D2_1_2_1);
	setValue('D2_1_2_2', field_D2_1_2_2);
	setValue('D2_1_2_3', field_D2_1_2_3);
	setValue('D2_2_1_1', field_D2_2_1_1);
	setValue('D2_2_1_2', field_D2_2_1_2);
	setValue('D2_2_2_1', field_D2_2_2_1);
	setValue('D2_2_2_2', field_D2_2_2_2);
	
}

function addEvents(){
	var fields = document.getElementsByTagName('input');
	for (i=0; i < fields.length; ++i)
	{
		fields[i].onchange = calc;
	}
}

function setValue(which, val){
	var i = 0;
	var fields = document.getElementsByTagName('input');
	
	for (i=0; i < fields.length; ++i)
	{	
		if(fields[i].name == which)
		{
			fields[i].value = val;
		}
	}
}

function isNumber(n) {
	n = parseFloat(n);
	return !isNaN(parseFloat(n)) && isFinite(n);
}



