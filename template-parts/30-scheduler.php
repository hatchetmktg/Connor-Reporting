<div class="hidden modal fade" id="quickcontact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">30 Second Scheduler</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6>Ready To Go? Submit Your Notice Below!</h6>
        <p>Don't have your notice ready? No problem. <a href="<?php echo esc_url( home_url( '/' ) ); ?>scheduling/"> Click here to fill out an online scheduling form.</a></p>
        <p style="font-size: 12px;">Please use this form if your deposition is scheduled more than 48 hours in advance. If you have a deposition that needs to take place within the next 48 hours please call us at 1-888-283-1161.</p>
        <?php gravity_form( 2, false, false, false, '', false ); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>