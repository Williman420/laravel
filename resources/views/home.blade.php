<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>haloo</h1>
    <div>halo nama saya WILLIMAN</div>
    <div> <input type="color" id = "colorID"></div>
    <script> const color = document.getElementById("colorID"); 
    const backgroundColor = document.body;

    backgroundColor.addEventListener("input", () => {
        const selectedColor = color.value;
        backgroundColor.style.backgroundColor = selectedColor;
    });
</script> 
</body>
</html>