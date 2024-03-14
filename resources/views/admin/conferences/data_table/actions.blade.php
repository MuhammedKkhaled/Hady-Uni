@if (auth()->user()->hasPermission('update_conferences'))
    <a href="{{ route('admin.conferences.edit', $id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
@endif

@if (auth()->user()->hasPermission('delete_conferences'))
    <form action="{{ route('admin.conferences.destroy', $id) }}" class="my-1 my-xl-0" method="post" style="display: inline-block;">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i> Delete</button>
    </form>
@endif
