(function(){
   
   var body  = document.getElementsByTagName("body")[0];
   var form  = document.getElementsByTagName('form')[0];


 form.onsubmit = function(){

 	   var name = document.getElementById('name').value;
 	   var url = form.getAttribute("action");
     var _token = document.getElementsByTagName('input')[0].value;
 	   var list = document.getElementsByTagName('ul')[0];


   Callback.ajax(url,{ 
       method : "POST",
          data: {
             name : name,
             _token : _token
       },
       before:function(){
          list.innerHTML = "<p>Searching....</p>";
       },
       complete: function(response){
          var rus = response.toString();
          if(rus.length!=0) {
             list.innerHTML = response;
        } else{        
             list.innerHTML = response;
          }  	  
       }
   });
   return false;
 };


})();