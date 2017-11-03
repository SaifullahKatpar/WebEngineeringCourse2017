//<script>

		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		    	addMenu(this);
		    	addImages(this);
		    }
		};
			xhttp.open("GET", "strings.xml", true);
			xhttp.send();

		function addMenu(xml) {
		  	    var xmlDoc = xml.responseXML;
		  	    /**
		  	    var xmlEl = xmlDoc.getElementsByTagName('item');
		  	    txt ="";
		  	    for(var i=0;i<xmlEl.length;i++){			  	    	
		    	 x = xmlEl[i];
		    	 parentName = x.parentNode.getAttribute("name");
		    	 txt += x.childNodes[0].nodeValue;
		  	    }
		        document.getElementById("demo").innerHTML = txt; 
		        **/

		  	    var xmlEl = xmlDoc.getElementsByTagName('string');
		  	    menu ="";
		  	    for(var i=0;i<4;i++){
		  	    menu += "<li><a href='#'>"+xmlEl[i].childNodes[0].nodeValue+"</li>";
		  	    }
		        document.getElementById("items").innerHTML = menu; 
		  }


		function addImages(xml) {
		  	    var xmlDoc = xml.responseXML;
		  	    
		  	    var xmlEl = xmlDoc.getElementsByTagName('item');
		  	    var images = new Array();

		    	 x = xmlEl[0];
		    	 parentName = x.parentNode.getAttribute("name");


		    	count=0;
		  	    for(var i=0;i<xmlEl.length;i++){			  	    	
		    	 x = xmlEl[i];
		    	 parentNameNew = x.parentNode.getAttribute("name");

		    	 if(parentNameNew==parentName){
		    	 images[count++]= x.childNodes[0].nodeValue;
		    	 }

		    	 else
		    	 	break;

		  	    }

		  	    menu="";

		  	    for(var i=0;i<count;i++){
			  	    menu += "<a href=''><img src='.\\images\\"+ images[i].toLowerCase()+".jpg'><br>"+images[i]+"<br>";
		  	    }

		        document.getElementById("images").innerHTML = menu; 

		  }

//</script>
