<html>
    <head>
        <script>
            function random_function()
            {
                var a=document.getElementById("input").value;
                if(a==="mineur")
                {
                    var arr=["faible","mineur"];
                }
                else if(a==="majeur")
                {
                    var arr=["majeur","moderer","elever"];
                }
             
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }


            function random_functionn()
            {
                var o=document.getElementById("output").value;
                if(o==="mineur")
                {
                    var arr=["faible","mineur"];
                }
                else if(a==="majeur")
                {
                    var arr=["majeur","moderer","elever"];
                }
             
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
        </script>
    </head>
    <body>
        <select id="input" onchange="random_function()">
            <option>choisir..</option>
            <option>mineur</option>
            <option>majeur</option>
        </select>
        <div>
           <select id="output" onchange="random_function1()">
        </div>


    </body>
</html>