<h3 class="cent">新增動態文字廣告</h3>
<hr>

<form action="./api/add.php" method="post"enctype="multipart/form-data">
    <table>
        
        <tr>
            <td>動態文字廣告:</td>
            <td><input type="text" name="text" id="text"></td>
        </tr>
        <tr>
            <td>
            <input type="hidden" name="table"vlaue="ad">
                <input type="submit" value="新增">
                <input type="reset" value="重置">
            </td>
            <td></td>
        </tr>
    </table>
</form>