<html>
<script type="text/javascript">
    function fncSubmit()
    {
        if(document.getElementById('checkbox').checked  == false  )
        {
            alert('PLEASE CHECK IN BOX');
            return false;
        }
        if(document.getElementById('textfield').value  == ""  )
        {
            alert('PLEASE INPUT YOURTEXT');
            return false;
        }
    }
</script>
<body >
<form  action="" method="post" enctype="multipart/form-data" onSubmit="JavaScript:return fncSubmit();">
    <input type="checkbox" name="checkbox" id="checkbox">xxxx
    <input type="text" name="textfield" id="textfield">
    <input type="submit" name="button" id="button" value="Submit">
</form>
</body>
</html>