<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                                    <p class="t cent botli">頁尾版權資料管理</p>
        <form method="post" action="./api/update_data.php">
    <table width="100%">
    	<tbody>
            <tr class="yel">
        	    <td width="50%">頁尾版權資料</td>
                <td width="50%">
                    <?php
                    $bot=$Bottom->find(1)['bottom']
                    ?>
                    <input type="text" name="bottom" id="bottom"value="<?=$bot?>">
                </td>
                
                
            </tr>
            
    </tbody></table>
           <table style="margin-top:40px; width:70%;">
     <tbody><tr>
      <td width="200px">
        <input type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modals/<?=$do?>.php&#39;)" value="新增網站標題圖片"></td>
      <td class="cent">
        <input type="hidden" name="table"vlaue="<?=$do?>">
        <input type="submit" value="修改確定"><input type="reset" value="重置">
    </td>
     </tr>
    </tbody></table>    

        </form>
                                    </div>