<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>JQuery Ajax Demo</title>
        <script src="jquery-2.1.1.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        Input : 
        <select id="qualification">
            <option>Student</option>
            <option>Higher Secondary</option>
            <option>Diploma</option>
            <option>Graduation</option>
            <option>Post Graduation</option>
            <option>Others</option>
        </select>
        <div id="result"></div>
        <script>
            $(document).ready(function () {
                $('#qualification').click(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'textreturn.php',
                        data: 'text=' + $('#qualification').val(),
                        success: function (msg)
                        {
                            $('#result').html(msg);
                        }
                    });
                });
            });
        </script>
    </body>
</html>
