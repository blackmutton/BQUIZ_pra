<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">校園映像圖片管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="70%">校園映像圖片</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <td></td>
                </tr>
                <?php
                $total = ${ucfirst($do)}->count();
                $div = 3;
                $pages = ceil($total / $div);
                $now = $_GET['p'] ?? 1;
                $start = ($now - 1) * $div;
                $rows = ${ucfirst($do)}->all(" limit $start,$div");
                foreach ($rows as $row) {
                ?>
                    <tr class="cent">
                        <td width="70%">
                            <img src="./images/<?= $row['img'] ?>" alt="" style="width:100px;height:100px">
                        </td>
                        <td width="10%">
                            <input type="radio" name="show" value="<?= $row['id'] ?>" <?= ($row['show'] == 1) ? "checked" : "" ?>>
                        </td>
                        <td width="10%">
                            <input type="checkbox" name="del[]" value="<?= $row['id'] ?>">
                        </td>
                        <td>
                            <input type="button" value="更換圖片" onclick="op('#cover','#cvr','./modals/<?= $do ?>_update.php?id=<?= $row['id'] ?>')">
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
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modals/<?= $do ?>.php')" value="新增網站標題圖片"></td>
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