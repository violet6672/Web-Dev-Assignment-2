//---------------loadData function-------------
function loadData()
{
  var driverArray = [
     {
        id: "730209-3043",
        lic_no: "135686819730209",
        fname: "Andrew",
        lname: "Pryor",
        addr1: "31 ",
        addr2: "Prior Park",
        parish: "St. James",
        uname: "qwer1234",
        passwd:"andrewpryor123"
     },

     {
        id: "671212-0404",
        lic_no: "143647819671212",
        fname: "Jennifer",
        lname: "Davis",
        addr1: "Wavell Ave",
        addr2: "Black Rock",
        parish: "St. Michael",
        uname: "geju7593",
        passwd:"anoth3rpass"
   },

   {
      id: "790422-1209",
      lic_no: "100893419790422",
      fname: "Anderson",
      lname: "Alleyne",
      addr1: "Lascelles Terrace",
      addr2: "The Pine",
      parish: "St. Michael",
      uname: "oyqb4789",
      passwd:"thepassw0rd"
   }
  ]

  var employeeArray = [
   {
      employeeId: "545-700-593",
      fname: "Merissa",
      lastName: "Halliwall",
      passwd:"f1rstpa55"
   },

   {
      employeeId: "090-728-221",
      fname: "Terold",
      lastName: "Bostwick",
      passwd:"secur3acc3s5"
 },

 {
   employeeId: "147-830-662",
   fname: "Vanda",
   lastName: "Marshall",
   passwd:"oll1p0ps"
 }
]

  //add to localStorage 
  if(!localStorage.getItem("driverInfo"))
  {
     localStorage.setItem("driverInfo", JSON.stringify(driverArray));
  }
  if(!localStorage.getItem("employeeinfo"))
  {
     localStorage.setItem("employeeinfo", JSON.stringify(employeeArray));
  }
}

//-----------Type Check Function---------------

function checkString(str, variableType)
{
	for(var i=0;i<str.length;i++)
	{
		if(variableType=="number")
		{
			if(isNaN(str.charAt(i)))
			{
				return false;
			}
		}
		
		if(variableType=="letter")
		{
			if(!((str.charAt(i)>='a') && (str.charAt(i)<='z')) || !((str.charAt(i)>='A') && (str.charAt(i)<='Z')))
			{
				return false;
			}
		}
		
		if(variableType=="alphanum")
		{
			var code=str.charCodeAt(i);
			if(!(code > 47 && code < 58) && !(code > 64 && code < 91) && !(code > 96 && code < 123))
			{
				return false;
			}
		}
	}
}

//--------------registration.html--------------

function func() {
	var noErrors = true;
	
	var emp = document.forms["regis"]["id"].value;
	var emp2 = document.forms["regis"]["lic_no"].value;
	var emp3 = document.forms["regis"]["fname"].value;
	var emp4 = document.forms["regis"]["lname"].value;
	var emp5 = document.forms["regis"]["addr1"].value;
	var emp6 = document.forms["regis"]["addr2"].value;
	var emp7 = document.forms["regis"]["parish"].value;
	empty1 = document.getElementById("empty1");
	empty2 = document.getElementById("empty2");
	empty3 = document.getElementById("empty3");
	empty4 = document.getElementById("empty4");
	empty5 = document.getElementById("empty5");
	empty6 = document.getElementById("empty6");
	empty7 = document.getElementById("empty7");
	
	if(emp.length==0)
	{
		var emp8 = document.getElementById("empty1");
		emp8.innerHTML = "Error: information missing";
		emp8.style.color="red";
		noErrors = false;
	}
	
	if(emp2.length==0)
	{
		var emp8=document.getElementById("empty2");
		emp8.innerHTML = "Error: information missing";
		emp8.style.color="red";
		noErrors = false;
	}
	
	if(emp3.length==0)
	{
		var emp8=document.getElementById("empty3");
		emp8.innerHTML = "Error: information missing";
		emp8.style.color="red";
		noErrors = false;
	}
	
	if(emp4.length==0)
	{
		var emp8=document.getElementById("empty4");
		emp8.innerHTML = "Error: information missing";
		emp8.style.color="red";
		noErrors = false;
	}
	
	if(emp5.length==0)
	{
		var emp8=document.getElementById("empty5");
		emp8.innerHTML = "Error: information missing";
		emp8.style.color="red";
		noErrors = false;
	}
	
	if(emp6.length==0)
	{
		var emp8=document.getElementById("empty6");
		emp8.innerHTML = "Error: information missing";
		emp8.style.color="red";
		noErrors = false;
	}
	
	if(emp7=="**Choose One**")
	{
		var emp8=document.getElementById("empty7");
		emp8.innerHTML = "Please choose a parish";
		emp8.style.color="red";
		noErrors = false;
	}
	
	if (!isIdValid(emp)) {
		noErrors = false;
	}
	
	if (!isNameValid(emp3)) {
		noErrors = false;
	}
	
	if (!isNameValid(emp4)) {
		noErrors = false;
	}
	
	if (!isAddressValid(emp5)) {
		noErrors = false;
	}
	
	if (!isAddressValid(emp6)) {
		noErrors = false;
	}
	
    if (noErrors==true)
    {
        newDriver();
    }
	return noErrors;

}

function splitID(num,position) {
    return num.substring(0,position)+"-"+num.substring(position);
}

function isIdValid(id)
{
	checkString(id,"number");
    
    if((id.length<0)||(id.length>10))
    {
        return false
    }
    
    if(id.length==10)
    {
        splitID(id,6);
        return true;
	}
}

function isNameValid(fname,lname)
{
	if(!checkString(fname, "letter"))
	{
		return true;
	}
	
	if(!checkString(lname, "letter"))
	{
		return true;
	}
}
	
function isAddressValid(addr1,addr2)
{
	if(!checkString(addr1, "alphanum"))
	{
		return true;
	}
	
	if(!checkString(addr2, "alphanum"))
	{
		return true;
	}
}

function newDriver(driver)
{
    
    
}


//-----------------index.html------------------
function func2()
{
    var noErrors = true;
    
    var emp_ = document.forms["index1"]["uname"].value;
	var emp_2 = document.forms["index1"]["passwd"].value;
    empty_1 = document.getElementById("empty_1");
	empty_2 = document.getElementById("empty_2");
    
    if(emp_.length==0)
	{
		var emp9 = document.getElementById("empty_1");
		emp9.innerHTML = "This field must be filled";
		emp9.style.color="red";
		noErrors = false;
	}
	
	if(emp_2.length==0)
	{
		var emp9=document.getElementById("empty_2");
		emp9.innerHTML = "This field must be filled";
		emp9.style.color="red";
		noErrors = false;
	}
    
    if (!isUsernameFormatValid(emp_)) {
		noErrors = false;
	}
    
    if (!isPasswordFormatValid(emp_2)) {
		noErrors = false;
	}
    
    return noErrors;
}

function isUsernameFormatValid(uname)
{
    if(!checkString(uname, "alphanum"))
	{
		return true;
	}
    
    if(uname.length>8)
    {
        return false;    
    }
}

function isPasswordFormatValid(passwd)
{
    if(!(passwd.length>=8) && !(passwd.length<=16))
    {
        return false;    
    }
    
    if(!checkString(passwd, "alphanum"))
	{
		return true;
	}
    
   if(!(passwd.startsWith('a'-'z')) || !(passwd.startsWith('A'-'Z')))
    {
           return false;
    }
    
    var noNum=checkString(passwd,"number");
    if(!passwd.includes(noNum,5))
    {
            return false;
    }
}

function validateUser(userdata, usertype)
{
    
}

//---------------index.html(admin)-------------

function func3()
{
    var noErrors = true;
    
    var emp_3 = document.forms["index2"]["empid"].value;
	var emp_4 = document.forms["index2"]["passwd"].value;
    var empty_3 = document.getElementById("empty_3");
	var empty_4 = document.getElementById("empty_4");
    
    if(emp_3.length==0)
	{
		var emp10 = document.getElementById("empty_3");
		emp10.innerHTML = "This field must be filled";
		emp10.style.color="red";
		noErrors = false;
	}
	
	if(emp_4.length==0)
	{
		var emp10=document.getElementById("empty_4");
		emp10.innerHTML = "This field must be filled";
		emp10.style.color="red";
		noErrors = false;
	}
    
    if (!isEmployeeIdFormatValid(emp_3)) {
		noErrors = false;
	}
    
    if (!isPasswordFormatValid(emp_4)) {
		noErrors = false;
	}
    
    return noErrors;
}

function isEmployeeIdFormatValid(empid)
{
    checkString(empid,"number");
    
    if(empid.length>9)
    {
        return false
    }
    
    if(empid.length==9)
    {
        splitID(empid,3);
        splitID(empid,6);
        return true;
	}
}

function validateEmployee(userdata, usertype)
{
    
}

//---------------Hamburger Menu----------------
function logOut() {
  document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.container')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}