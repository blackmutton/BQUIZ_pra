<h3 class="cent">新增校園印象圖片</h3>
<hr>

<form action="./api/add.php" method="post"enctype="multipart/form-data">
    <table>
        
        <tr>
            <td>校園印象圖片:</td>
            <td><td><input type="file" name="img" id="img"></td></td>
        </tr>
        <tr>
            <td>
            <input type="hidden" name="table"vlaue="image">
                <input type="submit" value="新增">
                <input type="reset" value="重置">
            </td>
            <td></td>
        </tr>
    </table>
</form>