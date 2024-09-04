<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">最新消息管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="80%">最新消息</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <td></td>
                </tr>
                <?php
                $total = ${ucfirst($do)}->count();
                $div = 4;
                $pages = ceil($total / $div);
                $now = $_GET['p'] ?? 1;
                $start = ($now - 1) * $div;
                $rows = ${ucfirst($do)}->all(" limit $start,$div");
                foreach ($rows as $row) {
                ?>
                    <tr class="cent">
                        <td width="80%">
                            <input type="text" name="text[]" value="<?= $row['text'] ?>" style="width:98%;height:60px">
                        </td>
                        <td width="10%">
                            <input type="checkbox" name="show[]" value="<?= $row['id'] ?>" <?= ($row['show'] == 1) ? "checked" : "" ?>>
                        </td>
                        <td width="10%">
                            <input type="checkbox" name="del[]" value="<?= $row['id'] ?>">
                        </td>

                        <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <div class="cent">
            <?php
            if ($now - 1 >= 1) {
                $prev = $now - 1;
                echo "<a href='?do=$do&p=$prev'><</a>";
            }
            for ($i = 1; $i <= $pages; $i++) {
                $size = ($i == $now) ? "20px" : "16px";
                echo "<a href='?do=$do&p=$i' style='font-size:$size'>$i</a>";
            }
            if ($now + 1 <= $pages) {
                $next = $now + 1;
                echo "<a href='?do=$do&p=$next'><</a>";
            }
            ?>
        </div>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modals/<?= $do ?>.php')" value="新增最新消息"></td>
                    <td class="cent">
                        <input type="hidden" name="table" value="<?= $do; ?>">
                        <input type="submit" value="修改確定">
                        <input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>