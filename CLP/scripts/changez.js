var pass1 = document.getElementById("pass1");
var pass2 = document.getElementById("pass2");
var divElt = document.getElementById("danger");
divElt.setAttribute("class","alert");
divElt.setAttribute("class","alert-danger");


function validateForm()
{
	var pass1value = pass1.value;
	var pass2value = pass2.value;
	
	if(pass1value === pass2value)
	{
		return true;
	}
	else
	{
		divElt.textContent = "Les deux mots de passe doivent etre identiques";
		return false;
	}	
}
