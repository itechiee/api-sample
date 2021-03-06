@extends('layouts.app')
@section('content')
    <div class="container">

        {{ html()->form('PATCH', route('admin.subjects.update',$subject->id) )->class('form-horizontal')->open() }}

        <div class="form-group">

            {{ html()->label('semester')->class('col-md-2 form-control-label')->for('semester_id') }}
            {{ html()->select('semester_id')
                            ->options(config('const.semesters'))
                            ->class('form-control')
                            ->placeholder('Semester')
                            ->value($subject->semester_id)
                            ->required() }}
        </div>

        <div class="form-group">

            {{ html()->label('Name')->class('col-md-2 form-control-label')->for('name') }}
            {{ html()->text('name')
                            ->class('form-control')
                            ->placeholder('Name')
                            ->attribute('maxlength', 191)
                            ->value($subject->name)
                            ->required()
                            ->autofocus() }}
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('admin.subjects.index')}}" class="btn btn-primary">Back to Listing</a>
        {{ html()->form()->close() }}

    </div>

@endsection