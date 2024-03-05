<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="{{ asset('css/mainpage.css') }}"> 
</head>
<body>
    {{-- Include the top bar --}}
    @include('topbar')

    <div class="hello-box">
        <p>Hello</p>
    </div>



    
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Four Boxes</title>
<style>
    body {
        display: flex;
        justify-content: center; /* Center the container horizontally */
        align-items: center; /* Center the container vertically */
        height: 100vh; /* Make the body take up the full height of the viewport */
        margin: 0; /* Remove default margin */
    }
    
    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        width: 340px; /* Adjusted width to accommodate margins */
    }
    
    .box {
        width: 100px;
        height: 100px;
        background-color: blue;
        margin: 10px; /* Margin around each box */
    }
</style>
</head>
<body>

<div class="container">
    <div class="box" id="box1"></div>
    <div class="box" id="box2"></div>
    <div class="box" id="box3"></div>
    <div class="box" id="box4"></div>
</div>

</body>
</html>
