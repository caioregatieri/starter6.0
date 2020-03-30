<div class='btn-group'>
    <a href="{{ route('users.show', $id) }}" class='btn btn-ghost-success'>
       <i class="fa fa-eye"></i>
    </a>
    <a href="{{ route('users.edit', $id) }}" class='btn btn-ghost-info'>
       <i class="fa fa-edit"></i>
    </a>
    {!! Form::button('<i class="fa fa-trash"></i>', [
        'type' => 'button',
        'class' => 'btn btn-ghost-danger',
        'onclick' => "askDelete(".$id.", '". route('users.destroy', [$id])."')"
    ]) !!}
</div>
