<h3 class="cent">更新圖片</h3>
<hr>

<form action="./api/update.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>標題圖片:</td>
            <td><input type="file" name="img" id="img"></td>
        </tr>
        <tr>
            <td>標題區替代文字:</td>
            <td><input type="text" name="text" id="text"></td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                <input type="hidden" name="table" value="title">
                <input type="submit" value="新增">
                <input type="reset" value="重置">
            </td>
            <td></td>
        </tr>
    </table>
</form>