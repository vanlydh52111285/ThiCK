<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $data=[
            ['01','a1','a2','th'],
            ['02','b1','b2','tt'],
            ['03','c1','c2','th']
        ];
        
    ?>
    <table border="1">
        <tr>
            <td>
                MS
            </td>
            <td>
                Ho
            </td>
            <td>
                Ten
            </td>
            <td>
                Lop
            </td>
        </tr>
        <?php
            foreach($data as $sv){
                echo '<tr>';
                    foreach($sv as $key=> $valua){
                        echo '<td>';
                        echo "$sv[$key]";
                        echo '</td>';
                    }
                echo'</tr>';
            }
        ?>
        
        
      
    </table>
</body>
</html>