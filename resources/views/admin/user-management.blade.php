@extends('admin.layouts.master')
@section('title', 'Dashboard | User-Management')
@section('content')
<main class="content">
  <div class="container-fluid p-0">
    <!-- Bootstrap Modal start -->
    <div class="row">
        <div class="col">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <i class="align-middle me-2" data-feather="plus"></i>Add User
            </button>
            <a href="">
              <button type="button" class="btn btn-danger">
                <i class="align-middle me-2" data-feather="trash-2"></i>Delete Selected
              </button>
            </a>
        </div>
    </div>
    
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Admin or HR</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                  <form>
                    <div class="form-row">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Full Name">
                      </div>
                      <div class="form-group mt-3">
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Enter Email Address" autocomplete="off">
                      </div>
                      <div class="form-group mt-3">
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Enter Password">
                      </div>
                    </div>

                    <div class="form-group mt-3">
                      <input type="text" class="form-control" id="inputAddress" placeholder="Enter Contact Number">
                    </div>

                    <div class="form-row mt-3">
                      <div class="form-group">
                        <select id="inputState" class="form-control">
                          <option selected>Choose Role</option>
                          <option>Admin</option>
                          <option>HR</option>
                        </select>
                      </div>
                      <div class="mt-3">
                        <input class="form-control" type="file" id="formFile">
                      </div>
                    </div>
                  </form>    
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-sm btn-success">Submit</button>
            </div>
          </div>
        </div>
    </div>
    <!-- Bootstrap Modal end -->

    <!-- Bootstrap data table start -->
    <div class="row pt-4">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                        </div>
                    </th>
                    <th>ID#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact No.</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                        </div>
                    </td>
                    <td>1</td>
                    <td>Jonas Alexander</td>
                    <td>Developer</td>
                    <td>San Francisco</td>
                    <td>30</td>
                    <td>2010-07-14</td>
                    <td>$86,500</td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                        </div>
                    </td>
                    <td>2</td>
                    <td>Shad Decker</td>
                    <td>Regional Director</td>
                    <td>Edinburgh</td>
                    <td>51</td>
                    <td>2008-11-13</td>
                    <td>$183,000</td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                        </div>
                    </td>
                    <td>3</td>
                    <td>Michael Bruce</td>
                    <td>Javascript Developer</td>
                    <td>Singapore</td>
                    <td>29</td>
                    <td>2011-06-27</td>
                    <td>$183,000</td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                        </div>
                    </td>
                    <td>4</td>
                    <td>Donna Snider</td>
                    <td>Customer Support</td>
                    <td>New York</td>
                    <td>27</td>
                    <td>2011-01-25</td>
                    <td>$112,000</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Bootstrap data table end -->
  </div>
</main>
</div>
</div>
@endsection