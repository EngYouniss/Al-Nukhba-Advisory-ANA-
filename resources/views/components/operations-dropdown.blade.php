<div class="dropdown-menu dropdown-menu-right">
    @if ($editRoute)
        <a class="dropdown-item" href="{{ $editRoute }}">تعديل</a>
    @endif

    @if ($deleteRoute)
        <form action="{{ $deleteRoute }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="dropdown-item text-danger">حذف</button>
        </form>
    @endif

    @if ($activateRoute)
        <a class="dropdown-item" href="{{ $activateRoute }}">تفعيل</a>
    @endif
    @if ($showRoute)
        <a class="dropdown-item" href="{{ $showRoute }}">عرض</a>
    @endif
</div>
