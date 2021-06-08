@include('header')

<div class="container">
    <div class="row my-3 mx-3">
        <div class="col-12 bg-white">
            <form>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4 my-3 mx-3">
                  <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="La venganza del Mago">
                        <label for="nombre">Nombre</label>
                      </div>
                  </div>
                  <div class="col-2">
                    <div class="form-floating">
                        <input type="number" class="form-control" id="max" name="max" placeholder="5">
                        <label for="floatingPassword">Maximo jugadores</label>
                      </div>
                  </div>
                </div>
              
                <!-- Text input -->
                <div class="form-outline mb-4 ">
                  <input type="text" id="form6Example3" class="form-control" />
                  <label class="form-label" for="form6Example3">Company name</label>
                </div>
              
                <!-- Text input -->
                <div class="form-outline mb-4">
                  <input type="text" id="form6Example4" class="form-control" />
                  <label class="form-label" for="form6Example4">Address</label>
                </div>
              
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form6Example5" class="form-control" />
                  <label class="form-label" for="form6Example5">Email</label>
                </div>
              
                <!-- Number input -->
                <div class="form-outline mb-4">
                  <input type="number" id="form6Example6" class="form-control" />
                  <label class="form-label" for="form6Example6">Phone</label>
                </div>
              
                <!-- Message input -->
                <div class="form-outline mb-4">
                  <textarea class="form-control" id="form6Example7" rows="4"></textarea>
                  <label class="form-label" for="form6Example7">Additional information</label>
                </div>
              
                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                  <input
                    class="form-check-input me-2"
                    type="checkbox"
                    value=""
                    id="form6Example8"
                    checked
                  />
                  <label class="form-check-label" for="form6Example8"> Create an account? </label>
                </div>
              
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Place order</button>
              </form>
        </div>
    </div>
</div>

@include('footer')