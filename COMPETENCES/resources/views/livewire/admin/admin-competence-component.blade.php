<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display:block !important
        }
        .sclist
        {
            list-style: none;
        }
        .sclist li{
            line-height: 33px;
            border-bottom: 1px solid #ccc;
        }
        .slink{
            font-size: 16px;
            margin-left: 13px;
        }
        
        
    </style>

    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                       <div class="row">
                           <div class="col-md-6">
                            All Categories
                           </div>
                           <div class="col-md-6">
                            <a href="#" class="btn btn-success pull-right">Add New</a>
                           </div>
                           
                       </div>
                    </div>
                    <div class="panel-body">
                        {{-- @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif --}}
                       
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="col-md-6">Id</th>
                                        <th class="col-md-6">Competence Name</th>
                                      
                                    </tr>
                                </thead>
                               
                                <tbody></tbody>
                            </table>
                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
