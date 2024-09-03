<x-layout titulo="cadastrar">
    <form class="container" action="cadastrar/salvar" style="width: 100%;display:flex;justify-content:center;" method="GET"> 
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Data Compromisso</label>
            <input type="date" name="dataEvento" class="form-control" id="dataEvento">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descrição do Compromisso</label>
            <textarea class="form-control" name="descricao" id="descricao" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary"> Salvar </button>
        <a class="btn btn-primary" href="atualizar">Atualizar</a>
        <a class="btn btn-primary" href="consultar">Consultar</a>
    </form>
</x-layout>