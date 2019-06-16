<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing</title>
    <style>
        p{
            height: 22px;
        }
        span{
            width:30px;
            height: 20px;
            background-color: linen;            
            margin:5px;
            display: inline-block;
            text-align: center;
            border:1px solid black;
        }
        .container{
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="container">
        <input type="text"  name="str" id="str" oninput="txtChange(event)">
        <p id="str_p"></p>
        <p id="str_num"></p>
        <p id="len"></p>
    </div>

    <script>
        function txtChange(event){
            console.log(event.data)
            var str = document.getElementById('str').value;
            var str_p = document.getElementById('str_p');
            var str_num = document.getElementById('str_num');
            document.getElementById("len").innerText = "Length: " + str.length;

            if(event.data === null){
                str_p.removeChild(str_p.lastChild);
                str_num.removeChild(str_num.lastChild);
                
                return;
            }
            str_p.innerHTML += "<span>" +event.data + "</span>";

            str_num.innerHTML += "<span>"+(str.length - 1)+"</span>";
            if(str == ""){
                str_p.innerText =  str_num.innerText = "";
            }

        }
    </script>
</body>
</html>