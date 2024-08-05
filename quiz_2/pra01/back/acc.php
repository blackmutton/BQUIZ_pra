<fieldset>
    <legend>帳號管理</legend>
    <table class="tab ct">
        <tr>
            <td class='clo'>帳號</td>
            <td class='clo'>密碼</td>
            <td class='clo'>刪除</td>
        </tr>
        <?php
        $users = $User->all();
        foreach ($users as $user) {
        ?>
            <tr>
                <td><?= $user['acc'] ?></td>
                <td><?= str_repeat("*", strlen($user['pw'])) ?></td>
                <td><input type="checkbox" name="del" value="<?= $user['id'] ?>"></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <div class="ct">
        <button onclick="del()">確定刪除</button>
        <button onclick="clear()">清空選取</button>
    </div>
    <h2>新增會員</h2>
</fieldset>