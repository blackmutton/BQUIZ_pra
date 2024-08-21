<!-- 從mvim.php複製而來 -->
<h3 class="cent">更換動畫圖片</h3>
<hr>

<form action="./api/update.php" method="post"enctype="multipart/form-data">
    <table>
        
        <tr>
            <td>動畫圖片:</td>
            <td><input type="file" name="img" id="img"></td>
        </tr>
        <tr>
            <td>
            <input type="text" name="id" value="<?=$_GET['id']?>">
            <input type="hidden" name="table"vlaue="mvim">
                <input type="submit" value="更新">
                <input type="reset" value="重置">
            </td>
            <td></td>
        </tr>
    </table>
</form>