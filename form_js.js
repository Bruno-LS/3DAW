function fom(opcao) {
    switch (opcao) {
        case "listar":
            document.getElementById("form").innerHTML =
                `<form action="listar.php" method="POST">
                <fieldset>
                    <br> <br>
                    <h3 style="text-align:center;">Deixe vazio para Listar</h3>
                    <label>Matricula:</label>
                    <input type="text" name="Matricula"> <br> <br>
                    <input name="list" type="submit" value="Listar"  ">
                </fieldset>
            </form>`;
            break;
        case "alterar":
            document.getElementById("form").innerHTML =
                `<form action="${opcao}.php" method="POST">
                    <fieldset>
                        <br> <br>
                        <h3>Digite o Nome ou matricula que queira alterar</h3>
                        <label>Nome:</label>
                        <input type="text" name="Nome"> <br> <br>
                        <label>Matricula:</label>
                        <input type="text" name="Matricula"> <br> <br>
                        <input name="alterar" type="submit" value="${opcao}">
                    </fieldset>
                </form>`;
            break;

            case "excluir":
                document.getElementById("form").innerHTML =
                    `<form action="${opcao}.php" method="POST">
                        <fieldset>
                            <br> <br>
                            <label>Matricula:</label>
                            <input type="text" name="Matricula"> <br> <br>
                            <input name="excluir" type="submit" value="${opcao}">
                        </fieldset>
                    </form>`;
                break;    
            
        default:
            document.getElementById("form").innerHTML =
                `<form action="incluir.php" method="POST">
                    <fieldset>
                        <br> <br>
                        <label>Nome:</label>
                        <input type="text" name="Nome"> <br> <br>
                        <label>Matricula:</label>
                        <input type="text" name="Matricula"> <br> <br>
                        <label>AV1:</label>
                        <input type="text" name="AV1"> <br> <br>
                        <label>AV2:</label>
                        <input type="text" name="AV2"> <br> <br>
                        <input name="incluir" type="submit" value="incluir">
                    </fieldset>
                </form>`;
            break;
    }

}

