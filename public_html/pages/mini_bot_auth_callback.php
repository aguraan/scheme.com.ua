<div class="container">
    <div class="row align-items-center">
        <div class="col-sm-12 text-center">
            <div class="card card-block">
                <textarea id="code"><?php echo $_GET['code'] ?></textarea>
            </div>
            <button class="btn btn-secondary" onclick="copyText()">Скопировать</button>
        </div>
    </div>
</div>
<script>
    function copyText() {
        /* Get the text field */
        const copyText = document.getElementById("code")
    
        /* Select the text field */
        copyText.select()
        copyText.setSelectionRange(0, 99999); /*For mobile devices*/
        
    
        /* Copy the text inside the text field */
        document.execCommand("copy");
    
        /* Alert the copied text */
        alert("Скопировано в буфер: " + copyText.value);
    }
</script>