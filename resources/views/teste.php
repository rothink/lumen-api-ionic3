<?php
/**
 * Created by PhpStorm.
 * User: rothink
 * Date: 27/09/17
 * Time: 01:04
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form id="form">
    <input type="text" name="name" value="Rodrigu's bar">
    <input type="text" name="description" value="Melhor catuaba da região">
    <input type="file" name="photo" id="file">
</form>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript">
    $('#file').on('change', function () {
        let formData = new FormData();
        formData.append('name', 'Erik\'s bar');
        formData.append('description', 'Melhor catuaba da região');
        formData.append('photo', $('#file')[0].files[0]);
        console.info(formData);
        let headers = {
            'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2MWMyNzRmOGVkYjliNDc5ODkzOGM1OWYzOTAwZjIxMWE0MzIyNWI0MzYwYjA5OGUyZmU4ZWZkYWY4NTIwNDA5OWQxMTAxMjVmYWNhNmU1In0.eyJhdWQiOiIzIiwianRpIjoiYzYxYzI3NGY4ZWRiOWI0Nzk4OTM4YzU5ZjM5MDBmMjExYTQzMjI1YjQzNjBiMDk4ZTJmZThlZmRhZjg1MjA0MDk5ZDExMDEyNWZhY2E2ZTUiLCJpYXQiOjE1MDY1NjQzMzIsIm5iZiI6MTUwNjU2NDMzMiwiZXhwIjoxNTM4MTAwMzMyLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.e-GBIl-DdVT-gcsRq4gkEmVC2Pju8jeKSdRaVk5516qj_yaC8akTYbdxGKRI27MLad5fOMNI8GzGM6-W3HYe_wo0zmbR2cZOe6nGxaLh8BilaiapoYCypU7PcwccrOADFWE4XjHchdbGGkG7ZPRL6gPp22lslbYjgxZHdAsPvWAl3oskveczor_bYKFUxAg7yyELBczq2xV-sszyaG3afD-GghL70SA6zMCIL01K_CZ0ae938xYedsggpwt2-KSiNKChN7ZEg4v0Czsfp_TQzPwMIajQIXFvWVoSfuLDaawSyxz0QPsKqIGKJGW7lg4hgJjaH-tAw58biwOu5OKMsgRrPe8aZlGlktUW6zQELu5pecuAp8XypDG5nsgHk7PQSGU9A2o2eJgI-3njGcAezzbzIRp7yyjpFG_q6G9zc_CoEjmyNdZcqvzPh8deqty1VJekB-A9G0-jHMrbRxfPhAJTHS6df1aLKDJh-5RpmdLddFD5QOPqrYth95gjj_VrWAyxgCl_wwRkOYQ7HhJL9o6-VMr0iuLfeVLFDvbptArksYca8kcU7rWut3f4vmwtPBoiBA1XUOSIVuMqHJqFoUOIg64VaGRgYdc0TNz1ALoZ_PiQQK_yryx50j7hrUJouDikzpsA9Y7ZBew_NztcsNKynElq84wF8WocTpbgM4Y',
            //'content-type': 'multipart/form-data'
            'content-type': 'application/x-www-form-urlencoded'
        }
        axios.post('http://localhost:8000/api/v1/restaurants/1', formData, {headers: headers})
    })
</script>
</body>
</html>