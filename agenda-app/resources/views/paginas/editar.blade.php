<x-layout titulo="Editar">
    <form action="../atualizar/{{$dado->id}}" method="get">
        <label> Id: </label>
        <input type="number" id="id" name="id" value="{{$dado->id}}" disabled required/><br><br>

        <label> Data: </label>
        <input type="date" id="dataEvento" name="dataEvento" value="{{$dado->dataEvento}}" required/><br><br>

        <label> Descrição: </label>
        <input type="text" id="descricao" name="descricao" value="{{$dado->descricao}}" required/><br><br>

        <button class="btn btn-primary" type="submit">Atualizar</button>
        <a class="btn btn-primary" href="../cadastrar">Voltar</a>           
        <!-- Botão Excluir com modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Excluir
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Tem certeza que deseja excluir o cliente: {{$dado->id}}?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                <a type="button" class="btn btn-primary" href="/excluir/{{$dado->id}}">Sim</a>
            </div>
            </div>
        </div>
        </div>
        <!-- fim do div da modal -->
    </form>
</x-layout>