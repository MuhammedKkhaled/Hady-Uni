@if (auth()->user()->hasPermission('update_teachers'))
    <a href="{{ route('admin.teachers.edit', $id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
@endif

@if (auth()->user()->hasPermission('delete_teachers'))
    <form action="{{ route('admin.teachers.destroy', $id) }}" class="my-1 my-xl-0" method="post" style="display: inline-block;">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i> Delete</button>
    </form>
@endif
