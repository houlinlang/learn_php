<!DOCTYPE html>
<html>
<head>
  <meta charset="utf8">
  <style type="text/css">
    tr {
      height: 20px;
    }

    td {
      width: 20px;
      height: 20px;
    }
    input{
      width:20px;
    }
  </style>
</head>

<body>
  <h1>填入数据：</h1>
  <table>
    <?php for ($i=1;$i<=9;$i++):?>
    <tr>
      <?php for ($j=1;$j<=9;$j++):?>
      <td><input/></td>
      <?php endfor;?>
    </tr>
    <?php endfor;?>
    <tr>
  </table>
  <button>确定</button>
</body>
<script></script>
<script>
</script>
</html>