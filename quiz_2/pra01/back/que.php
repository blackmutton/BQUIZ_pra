<fieldset>
    <legend>問卷名稱</legend>
    <div style="display:flex">
        <div class="clo" style="width:50%">問卷名稱</div>
        <div>
            <input type="text" name="subject" id="subject">
        </div>
    </div>
    <div id="options" class="clo">
        <div>
            選項 <input type="text" name="option[]" id="option">
            <button onclick="more()">更多</button>
        </div>
    </div>
    <div>
        <button>新增</button>
        <button>清空</button>
    </div>
</fieldset>
<script>
    function more() {
        let opt = `
        選項 <input type="text" name="option[]" id="option">
        `
        $('#options').prepend(opt)
    }
</script>