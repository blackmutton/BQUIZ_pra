<h3 class="cent">編輯次選單</h3>
<hr>

<form action="./api/edit.php" method="post"enctype="multipart/form-data">
    <table>
        
        <tr>
            <td>次選單名稱:</td>
            <td>次選單超連結:</td>
            <td>刪除</td>
            
        </tr>
        <?php
        $rows=$Menu->all(['main_id'=>$_GET['id']]);
        foreach($rows as $row){
        ?>
        <tr>
        <td><input type="text" name="text[]" value="<?=$row['text']?>"></td>
            <td><input type="text" name="href[]" value="<?=$row['href']?>"></td>
            <td><input type="checkbox" name="del[]"></td>
            <input type="hidden" name="id[]"value=<?=$row['id']?>>
        </tr>
        <?php
        }
        ?>
        <tr>
            <td>
            <input type="hidden" name="table"vlaue="menu">
                <input type="submit" value="新增">
                <input type="reset" value="重置">
                <input type="button" value="更多次選單">
            </td>
            <td></td>
        </tr>
    </table>
</form>