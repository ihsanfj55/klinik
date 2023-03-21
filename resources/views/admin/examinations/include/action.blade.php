<a href="{{ route('examination.show', $id) }}" class="btn btn-primary btn-sm"><i class="bi bi-receipt"></i></a>
<a href="{{ route('examination.edit', $id) }}" class="btn btn-warning btn-sm"><i class="ri-edit-2-line"></i></a>
<form action="{{ route('examination.destroy', $id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm me-2">
        <i class="bi bi-trash"></i>
    </button>
</form>
