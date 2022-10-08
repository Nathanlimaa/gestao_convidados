<html>
    <form>
        <input type="text" id="nome" />

        <input type="button" value="preencher campo" onclick="preencherCampo()" >

<script>
    function preencherCampo(){
        var nome = document.getElementById("nome").value;
        alert(nome);
        document.getElementById("nome").setAttribute("value", "TESTETESTE");
        
    }

</script>

</form>
</html>