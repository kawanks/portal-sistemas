<span class="to-show ml-2">
  <button class="btn btn-sm btn-outline-primary py-0" wire:click="$dispatch('editarItem', {itemId: {{ $item->id }} })">
    <i class="fas fa-edit"></i>
  </button>
  <button class="btn btn-sm btn-outline-danger py-0" onclick="destruirItem({{ $item->id }})">
    <i class="fas fa-times text-danger"></i>
  </button>
</span>

@once
  @section('javascripts_bottom')
    @parent
    <script>
      function destruirItem(id) {
        // console.log('destruirItem', id)
        if (confirm('Tem certeza?')) {
          Livewire.dispatch('destruirItem', { itemId: id })
        }
      }
    </script>
  @endsection
@endonce