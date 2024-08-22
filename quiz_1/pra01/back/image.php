<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                                    <p class="t cent botli">校園映像圖片管理</p>
        <form method="post" action="./api/edit.php">
    <table width="100%">
    	<tbody>
            <tr class="yel">
        	    
                <td width="70%">校園映像圖片</td>
                <td width="10%">顯示</td>
                <td width="10%">刪除</td>
                
            </tr>
            <?php
            $total=$(ucfirst($do))->count();
            $div=3;
            $pages=ceil($total/$div);
            $now=$_GET['p']??1;
            $start=($now -1)*$div;
            $rows=${ucfirst($do)}->all();
            foreach($rows as $row){
            ?>
            <tr class="cent">
        	    
            <td width="70%">
                    <img src="./images/<?=$row['img']?>" style="width:100px;height:68px">
                </td>
                <td width="10%">
                    <input type="checkbox" name="sh[]" value="<?=$row['id']?>"<?=($row['sh']==1)?"checked":""?>>
                </td>
                <td width="10%">
                    <input type="checkbox" name="del[]" value="<?=$row['id']?>">
                </td>
                <td>
                <input type="button" value="更換校園映像圖片" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modals/<?=$do?>_update.phpid=<?=$row['id']?>&#39;)">
                </td>
                <input type="hidden" name="id[]"value="<?=$row['id']?>">
            </tr>
            <?php
            }
            ?>
    </tbody></table>
    <div class="cent">
        <?php
        if($now-1>=1){
            $prev=$now-1;
            echo "<a href='?do=image&p=$prev'> < </a>";
        }
        for($i=1;$i<=$pages;$i++){
            $font=($i==$_GET['p'])?"20px":"16px";
            echo "<a href='?do=image&p=$i'style='font-size:$font'> $i </a>";
        }
        if($now+1<=$pages){
            $nexr=$now+1;
            echo "<a href='?do=image&p=$next'> > </a>";
        }
        ?>
    </div>
           <table style="margin-top:40px; width:70%;">
     <tbody><tr>
      <td width="200px">
      <input type="hidden" name="table" value="<?= $do; ?>">
        <input type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modals/<?=$do?>.php&#39;)" value="新增校園映像圖片"></td><td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
     </tr>
    </tbody></table>    

        </form>
                                    </div>