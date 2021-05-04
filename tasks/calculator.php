<!--<script src="engine/jquery.js"></script>
<script>
    function treatment(){
        var arg1 = $("#arg1").val();
        var arg2 = $("#arg2").val();
        var operation = $("#operation").val();
        var arr = [arg1,arg2,operation];

        $.ajax({
            type: "POST",
            url: "calculator.php",
            data: arr,
            success: function(msg){
                console.log(msg);
            }
        });
    }
</script>-->
<? include ('engine/engineCalculator.php');?>
<p><a href="../engine/catalogElement.php">вернуться на главную</a></p>
<form action="" method="post" enctype="multipart/form-data">
    <input type="number" name="arg1" id="arg1">
    <select name="operation" id="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="number" name="arg2" id="arg2">
    <input type="submit" value="результат">
</form>
<?= $result?>