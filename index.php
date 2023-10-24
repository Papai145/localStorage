<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <textarea name="" id="text" cols="30" rows="10"></textarea>
    <button id="clear">Очистить</button>
    <script>
        let elem = document.getElementById("text");
        elem.addEventListener("mouseout", function() {
            localStorage.setItem('text', elem.value);
            
        })
        window.addEventListener('load', () => {
            elem.value = localStorage.getItem('text');
        });
    </script>
</body>

</html>