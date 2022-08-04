@extends('layouts.app')

@section('content')
<section class="section">
      <div class="row">
        <div class="col-lg-10 mx-auto mt-5">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Admin Dashboard</h5>
              <form id="Form3" action="#" method="POST" class="form-control">
                  @csrf
              <div class="row">                 
                <div class="col-lg-3">
                   <label for="inputEmail" class="col-form-label">Name</label>
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <select class="form-select" name="name" aria-label="Default select example">
                      <option value="">Select</option>
                    
                    </select>
                  </div>
                </div>
              </div>
                <div class="col-lg-3">
                   <label for="inputEmail" class="col-form-label">Email</label>
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <select class="form-select" name="email" aria-label="Default select example">
                      <option value="">Select</option>
                      
                    </select>
                  </div>
                </div>
              </div>
                <div class="col-lg-3">
                   <label for="inputEmail"  class="col-form-label"> Experience</label>
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <select class="form-select" name="experience" aria-label="Default select example">
                      <option value="">Select</option>
                     
                    </select>
                  </div>
                </div>
              </div>
                <div class="col-lg-3">
                   <label for="inputEmail" class="col-form-label">Skills</label>
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <select class="form-select" name="skills" aria-label="Default select example">
                      <option value="">Select</option>
                      
                    </select>
                  </div>
                </div>
              </div>
                <div class="col-lg-3">
                   <label for="inputEmail" class="col-form-label">Job Location</label>
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <select class="form-select" name="job_location" aria-label="Default select example">
                      <option value="">Select</option>
                     
                    </select>
                  </div>
                </div>  
              </div>
              <div class="row mb-3">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>           
              </div>
               </form>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Experience</th> 
                    <th scope="col">Photo</th>
                    <th scope="col">Download Resume</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
@endsection