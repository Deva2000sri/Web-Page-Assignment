<html>
    <head>
        <title>Sample Project</title>
        <style type="text/css">
            input {
              width: 60%;
              height: 35px;
            }
            #submit{
                width: 15%;
            }

            select{
                width: 15%;
                height: 35px;
            

        }

        body{
            margin-left: 400px;

        }

        </style>

        <script>
            //////////Generate dynamic textbox//////////////////
            function generate(total,id){
                var drpDown = document.getElementById(id);
                for(i=0;i<total;i++){
                    var line=document.createElement("br");
                    drpDown.parentNode.insertBefore(line,drpDown);
                    var child = document.createElement("input");
                    child.placeholder="Friend's name here";
                    child.setAttribute("required","");
                    child.id = "test"+i;
                    child.name = "test"+i;
                    drpDown.parentNode.insertBefore(child,drpDown);
                    var line=document.createElement("br");
                    drpDown.parentNode.insertBefore(line,drpDown);
                    
                

                }
            }
            


        </script>
            
            <?php
            if(array_key_exists('submit', $_POST)){
            	submit();
        
            }
            ////Save Friends list//////
            function submit(){
            	foreach ($_POST as $i) {
                    if($i=="Save Friends List"){
                        echo "Saved successfully";
                    }
                    else{
                $myfile=fopen("friends.txt","a") or die("unable to open file");
                fwrite($myfile, $i."\n");

                fclose($myfile);

            	}
            }

          
           
               
            }
            ?>
      
    </head>
    <body>
        <h1><b>Sample Project</b></h1>
    	<form method="post" action="#" >
        How many good friends do you have?<select onclick='generate(this.value,"test")' id='test' >
            <option value='0'>Select</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            <option value='4'>4</option>
            <option value='5'>5</option>
            <option value='6'>6</option>
            <option value='7'>7</option>
            <option value='8'>8</option>
            <option value='9'>9</option>
            <option value='10'>10</option>

            
            

        </select><br><br>
        <input type="submit" name="submit" id="submit" value="Save Friends List" width="100%"></form>
        
    </body>
</html>
