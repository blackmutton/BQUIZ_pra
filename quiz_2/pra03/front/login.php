<fieldset>
    <legend>會員登入</legend>
        <tr>
            <td class="clo">帳號</td>
            <td><input type="text" name="acc" id="acc"></td>
        </tr>
        <tr>
            <td class="clo">密碼</td>
            <td><input type="password" name="pw" id="pw"></td>
        </tr>
        <tr>
            <td>
                <input type="button" value="登入" onclick="login()">
            <input type="button" value="清除"onclick="clean()"></td>
            <td>
                <a href="?do=forgot">忘記密碼</a>
            <a href="?do=reg">尚未註冊</a>
        </td>
        </tr>
    
</fieldset>

<script>
    function login(){
        
        $.post("./api/chk_acc.php",{
            acc:$("#acc").val()     
        },(res)=>{
            if(parseInt(res)==1){
                $.post("./api/chk_pw.php",{
            acc:$("#acc").val(),
            pw:$("#pw").val()     
        },(chk)=>{
                    if(parseInt(chk)){
                        if($("#acc").val()=='admin'){
                            location.href="admin.php";
                        }else{
                            location.href="index.php";
                        }
                    }else{
                        alert("密碼錯誤")
                    }
                })
            }else{
                alert("查無帳號")
            }
        })
    }
</script>