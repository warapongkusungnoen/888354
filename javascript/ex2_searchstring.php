<!DOCTYPE html>
<html>
<head>
<style >
.page{
 margin: 5px;
 border:7px;
 text-align:center;
}

.blank{
 padding:6px;
}

textarea{ display:inline-block;
vertical-align: top;
width:300px;
height:150px;
}

label{
display:inline-block;
}

.panel-body{
text-align:center;
}

</style>

<script type="text/javascript">
function scan(){

   var str = document.getElementById("set").value;
          str = str.split(/(\s+)/);
    var stringArray = new Array();
for(var i =0; i < str.length; i++){
    stringArray.push(str[i]);
    if(i != str.length-1){
        stringArray.push(" ");
    }
}
 
  var key = document.getElementById("txt").value;
   var count = 0;
   var re= new RegExp(key ,"g");
   if(document.getElementById('case1').checked) {
     for(var j=0;j<stringArray.length;j++){
		 
		 
		if(re.exec(stringArray[j])!=null){
			
		
			count++;
		}
			
	 }

  }else if(document.getElementById('case2').checked) {
      key=key.toLowerCase();
	  
	  for(var j=0;j<stringArray.length;j++){
		 stringArray[j]=stringArray[j].toLowerCase();
		 
		if(re.exec(stringArray[j])!=null){
			
			count++;
		}
			
		  
		  
	  }
  }
  
   
  
  document.getElementById("result").innerHTML =count;

	  
  }


</script>
</head>
<body>
<div class="form-horizontal">
	<div class="panel container-fluid page">
      	<div class="panel-heading" >
          <h1 align="center">ex02 Search String Non-Sensitive Case</h1>
		  <hr>
		</div>
		<div class="panel-body ">
         
		 <form >
		 <div class="blank"> </div>
			<label >Text Input:</label><textarea id="set" ></textarea><br>
			<div class="blank"> </div>
			<label>Sensitive Case:</label>
				<form >
					<input type="radio" id="case1" name="case" value="y" checked> Yes</input>
					<input type="radio" id="case2" name="case" value="n"> No</input><br>
					
				</form>
				 <div class="blank"> </div>
			<label>Search</label><input type="text "id="txt" ></input> <br>	
			<div class="blank"> </div>
		 <button id="btn"  >search</button><br>
		 
		 <label>Search Result:</label>
		 <div id="result" style="display:inline-block;"></div>
		 
		 </form>
		
		</div>
	</div>
</div>
</body>
</html>