      {{csrf_field()}}
               <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="name" id="name" class="form-control" required value="{{$edit_agency->name}}">
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Last Name</label>
                      <input type="text" name="last_name" id="last_name" class="form-control" required value="{{$edit_agency->last_name}}">
                    </div>
                  </div>
                  
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Agency Name</label>
                      <input type="text" name="agency_name" id="agency_name" class="form-control" required value="{{$edit_agency->agency_name}}">
                    </div>
                  </div>
                  
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Liscense No</label>
                      <input type="text" name="liscense_no" id="Liscense No" class="form-control" value="{{$edit_agency->lisence_no}}">
                    </div>
               </div>
                  
                  
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>City Name</label>
                      <select name="city_id" id="city_id" class="form-control">
                          <option value="">Select City Name</option>
                          @foreach($city_name as $value)
                          <option value="{{$value->city_name}}" @if($value->city_name == $edit_agency->city_id) selected @endif>{{$value->city_name}}</option>      
                          @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Logo</label>
                      <input type="file" name="logo" id="logo" class="form-control" required>
                    </div>
                  </div>
                  
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label> View Logo</label>
                      <img src="{{asset('public/logo_images/'.$edit_agency->logo)}}" style="width: 78px;height: 78px;object-fit: cover;">
                    </div>
                  </div>
                  
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" id="email" class="form-control" value="{{$edit_agency->email}}">
                    </div>
                  </div>
                  
                  
               </div>
               
               
              <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Rate</label>
                      <input type="text" name="rate" id="rate" class="form-control" value="{{$edit_agency->rate}}">
                    </div>
                  </div>
                  
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Phone Number</label>
                      <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{$edit_agency->phone_number}}">
                    </div>
                  </div>

                  
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3">
                    <div class="form-group">
                      <label>Address</label>
                     <textarea id="address" name="address" rows="4" cols="50" class="form-control">{{$edit_agency->address}}</textarea>
                    </div>
                  </div>
                  
               </div>