<html>
 <script type="text/javascript" src="http://code.jquery.com/jquery-3.2.0.min.js"> </script>

 <script type="text/javascript">

 $(document).ready(function() {

   /* $("#display").click(function() { */               

      $.ajax({    //create an ajax request to load_page.php
        type: "POST",
        url: "display.php",             
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#responsecontainer").html(response); 
            //alert(response);
        }

    });
/*});*/
});

</script>

<body>
<h3 align="center">Manage Student Details</h3>
<table border="1" align="center">
  <tr>
       <td> <input type="text" name="search" id="search" placeholder="Search" /> </td>
   </tr> 


</table>
 <br/>
<div id="responsecontainer" align="center">

</div>
</body>
</html>