@if (auth()->user()->hasPermission('update_reviewtows'))
    <a href="{{ route('admin.reviewtows.edit', $id) }}" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i> {{ __("custom.View") }}</a>
@endif

@if (auth()->user()->hasPermission('delete_reviewtows'))
    <form action="{{ route('admin.reviewtows.destroy', $id) }}" class="my-1 my-xl-0" method="post" style="display: inline-block;">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i> {{ __("custom.Delete") }}</button>
    </form>
@endif
