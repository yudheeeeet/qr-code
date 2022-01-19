<!DOCTYPE html>
<html>
<style>
    table, th, td {
        border:1px solid black;
    }
</style>
<body>


    <center>
        <h1 style="margin-top: 100px">Qr Code Generator</h1>
        {!! QrCode::size(300)->generate('denta.tuek') !!}

    </center>


</body>
</html>
