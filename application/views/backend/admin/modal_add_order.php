<form method="post" action="<?php echo base_url()?>order/make_order">
        <div class="form-group">
            <label for="name">Name1</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="phoneNumber">Phone Number</label>
            <input type="text" class="form-control" name="phoneNumber">
        </div>
        <div class="form-group">
            <label for="service">Service</label>
            <select class="form-control" name="service">
            <option>KRA</option>
            <option>NEMA</option>
            <option>AGPO</option>
            <option>NEMIS</option>
            <option>NTSA</option>
            <option>TSA</option>
            <option>Invitation Cards</option>
            <option>Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" rows="3"></textarea>
        </div>
        
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>