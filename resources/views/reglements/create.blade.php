@extends('layout.default')
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Réglement</h4>
                  <p class="card-category">De la Facturation</p>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                           {{-- <label class="bmd-label-floating">SENFORAGE</label> --}}
                           <a href="#" class="footer-logo">
                            <img src="{{asset('assets/./img/logos.jpg')}}" alt="">
                          </a>
                          {{-- <input type="text" class="form-control" > --}}
                        </div>
                      </div>
                     {{--  <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>  --}}
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating"> First Name</label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating"> Name</label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" class="form-control">
                        </div>
                      </div>
                    </div>
                   
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Village</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Numero Compteur</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Type</label><br>
                          <select name="Type">
                            <option value="Wari">Wari</option>
                            <option value="Orange Money">Orange Money</option>
                            <option value="Cheque">Cheque</option>
                            <option value="Visa">Visa</option>
                            <option value="Cash">Cash</option>
                          </select>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Mois à régler</label><br>
                          <select  name="Mois">
                              <option value="janvier"> Janvier</option>
                              <option value="fevrier"> Fevreir </option>
                              <option value="mars"> Mars </option>
                              <option value="avril"> Avril</option>
                              <option value="mai"> Mai</option>
                              <option value="Juin"> Juin </option>
                              <option value="Juillet"> Juillet </option>
                              <option value="aout"> Aôut </option>
                              <option value="septembre"> Septembre</option>
                              <option value="octobre"> Octobre </option>
                              <option value="novembre"> Novembre</option>
                              <option value="decembre"> Décembre</option>
                              </select>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>SENFORAGE</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> La qualité est notre priorité.</label>
                            <textarea class="form-control" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div> --
                    <button type="submit" class="btn btn-primary pull-right">Payer</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="{{asset('assets/img/faces/card-profile1-square.jpg')}}" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                  <h4 class="card-title">Alec Thompson</h4>
                  <p class="card-description">
                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                  </p>
                  <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection