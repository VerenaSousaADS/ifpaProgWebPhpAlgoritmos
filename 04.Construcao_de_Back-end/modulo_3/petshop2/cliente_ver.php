<style>
    .preencher{
        margin-left: 10%;
        margin-right: 10%;
        width: 6em;
        font-family: 'PT Sans Caption', sans-serif;
        text-align: left;
        font-weight: lighter;
        font-size:15px;  
        background-color:rgba(255,190,190);
        border-radius: 7px 7px 7px 7px;
        color:rgb(90,48,141);
    }

    .tabela{
        margin-left: 10%;
        margin-right: 10%;
        width: 6em;
        
    }
</style>

<br><button class="preencher" id="btn_bscCliente">Preencher</button><br><br>

<table class="tabela">
    <thead >
        <tr>
            <th >ID</th>
            <th>NOME</th>
            <th>SOBRENOME</th>
            <th>CPF</th>
            <th>ENDERECO</th>
            <th>TELEFONE</th>
            <th>EMAIL</th>
        </tr>
    </thead>

    <tbody id="tblCliente">

    </tbody>
</table>
