@if (auth()->user()->hasPermission('update_curricula'))
    <a href="{{ route('admin.curricula.edit', $id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> {{ __("custom.Edit") }}</a>
@endif

@if (auth()->user()->hasPermission('delete_curricula'))
    <form action="{{ route('admin.curricula.destroy', $id) }}" class="my-1 my-xl-0" method="post" style="display: inline-block;">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i> {{ __("custom.Delete") }}</button>
    </form>
@endif
