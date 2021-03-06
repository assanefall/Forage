@extends('layout.default')
@section('content')
    

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">SENFORAGE</h4>
                  <p class="card-category"> Abonnements
                      <a href="{{route('abonnements.selectclient')}}"><div class="btn btn-warning">Nouvel Abonnement <i class="material-icons">add</i></div></a> 
                  </p>
                </div>

                @if (session('message'))
                   <div class="alert alert-success">
                       {{ session('message') }}
                   </div>
                @endif

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="table-abonnements">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Date
                        </th>
                        <th>
                          Prenom Client
                        </th>
                        <th>
                          Nom Client
                        </th>
                        <th>
                            Compteur
                          </th>
                        <th>
                          Action
                          </th>
                      </thead>
                      <tbody>
                          
                      </tbody>
                     
                    </table>
                
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Enregitrement</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                @if(Session::has('message'))
                                {{ Session::get('message') }}
                                    
                              
                              
                                @push('scripts')
                                <script type="text/javascript">
                                $(document).ready(function () {
                                    $("#error-modal").modal({
                                        'show':true,
                                    })
                                });
                                </script>
                                    
                                @endpush
                                @endif
                        
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal-delete-abonnement -->
      <div class="modal" id="modal-delete-abonnement" tabindex="-1" role="dialog">
        <form method="POST" action="" id="form-delete-abonnement">
        {{ csrf_field() }}
        @method('DELETE')
      <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Êtes-vous sûr de bien vouloir supprimer ce abonnement</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>cliquez sur close pour annuler</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Supprimer</button>
        </div>
      </div>
    </div>
  </div>
      @endsection

      @push('scripts')
      <script type="text/javascript">
      $(document).ready(function () {
          $('#table-abonnements').DataTable( { 
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('abonnements.list')}}",
            columns: [
                    { data: 'id', name: 'id' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'client.user.name', name: 'client.user.name' },
                    { data: 'client.user.firstname', name: 'client.user.firstname' },
                    { data: 'compteur.numero_serie', name: 'compteur.numero_serie' },
                    { data: null ,orderable: false, searchable: false}

                ],
                "columnDefs": [
                        {
                        "data": null,
                        "render": function (data, type, row) {
                        url_e =  "{!! route('abonnements.edit',':id')!!}".replace(':id', data.id);
                        url_d =  "{!! route('abonnements.destroy',':id')!!}".replace(':id', data.id);
                        return  '<a href='+url_e+'  class=" btn btn-primary " ><i class="material-icons">edit</i></a>'+
                        '<div class="btn btn-danger delete btn-delete-abonnement"  data-href='+url_d+'><i class="material-icons">delete</i></div>';
                       
                        },
                        "targets": 5
                        },
                    // {
                    //     "data": null,
                    //     "render": function (data, type, row) {
                    //         url =  "{!! route('abonnements.edit',':id')!!}".replace(':id', data.id);
                    //         return check_status(data,url);
                    //     },
                    //     "targets": 1
                    // }
                ],
              
          });
          $('#table-abonnements').off('click', '.btn-delete-abonnement').on('click', '.btn-delete-abonnement', 
          function(){
            var href=$(this).data('href');
            $("#form-delete-abonnement").attr("action",href);
            $('#modal-delete-abonnement').modal();
          });
      });
      </script>

          
      @endpush