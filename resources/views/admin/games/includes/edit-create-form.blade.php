{!! Form::open(['route' => 'post-edit-create-game']) !!}

    {!! Form::label('title', 'Titre du jeu', ['class' => 'form-label']) !!}
    {!! Form::text('title', $game->title , ['class' => 'form-control']) !!}
    
    <div class="text-end mt-3">
        {!! Form::submit('Click Me!' , ['class' => 'btn btn-primary btn-lg']) !!}
    </div>
    {!! Form::hidden('id',$game->id) !!}

{!! Form::close() !!}