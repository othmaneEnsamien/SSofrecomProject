<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Edit New Competence
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.competences') }}" class="btn btn-success pull-right">All Competence</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))                       
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>                   
                        @endif
                        <form wire:submit.prevent="updatecompetence" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-md-4 control-label">Competence Name</div>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Competence Name"  class="form-control inpu-md" wire:model="nomcompetence">
                                    @error('nomcompetence') <p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-4 control-label"></div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>