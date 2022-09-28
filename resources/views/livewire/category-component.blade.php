<div class="w3-card-4">
    <table class="table table-striped table-hover - table-bordered">
        <thead>
          <tr class="w3-center">
            
            <th>NOME</th>
            <th>IMAGEM</th>
            <th>ATIVO</th>
            <th>AÇÕES</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $category)
              <tr>
                
                <td>{{ $category->name }}</td>
                <td><img src="{{ url("storage/{$category->picture}") }}" alt="{{ $category->name }}" style="max-width: 70px;"></td>
                
                <td>@if ($category->active == 1)
                    <i class="fas fa-power-off iconIndex text-success"></i>
                @else
                <i class="fas fa-power-off iconIndex text-danger"></i>
                @endif</td>
              </tr>
          @endforeach
        </tbody>
      </table>
      {{ $categories->links() }}
</div>
