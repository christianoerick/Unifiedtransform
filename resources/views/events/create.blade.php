@extends('layouts.app')

@section('title', 'Add Event')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="side-navbar">
            @include('layouts.leftside-menubar')
        </div>
        <div class="col-md-10" id="main-container">
            <div class="panel panel-default">
                <div class="page-panel-title">Add Event
              </div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @component('components.file-uploader',['upload_type'=>'event'])
                    @endcomponent
                    @component('components.uploaded-files-list',['files'=>$files,'upload_type'=>'event'])
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
